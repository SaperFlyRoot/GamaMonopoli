
function AITest(p) {
	this.alertList = "";

	// Эта переменная статична, она не связана с каждым экземпляром.
	this.constructor.count++;

	p.name = "AI Test " + this.constructor.count;

	// Решает, стоит ли покупать недвижимость, на которую приземлился ИИ.
	// Return: boolean (true для покупки).
	// Аргументы:
	// индекс: индекс объекта недвижимости (0-39).
	this.buyProperty = function(index) {
		console.log("buyProperty");
		var s = square[index];

		if (p.money > s.price + 50) {
			return true;
		} else {
			return false;
		}

	}

	// Определяет реакцию на предложенную сделку.
	// Return: boolean / instanceof Trade: действительный торговый объект для встречного предложения (с AI в качестве получателя); false для отклонения; true для принятия.
	// Аргументы:
	// tradeObj: предлагаемая сделка, экземпляр сделки, имеет AI в качестве получателя.
	this.acceptTrade = function(tradeObj) {
		console.log("acceptTrade");

		var tradeValue = 0;
		var money = tradeObj.getMoney();
		var initiator = tradeObj.getInitiator();
		var recipient = tradeObj.getRecipient();
		var property = [];

		tradeValue += 10 * tradeObj.getCommunityChestJailCard();
		tradeValue += 10 * tradeObj.getChanceJailCard();

		tradeValue += money;

		for (var i = 0; i < 40; i++) {
			property[i] = tradeObj.getProperty(i);
			tradeValue += tradeObj.getProperty(i) * square[i].price * (square[i].mortgage ? 0.5 : 1);
		}

		console.log(tradeValue);

		var proposedMoney = 25 - tradeValue + money;

		if (tradeValue > 25) {
			return true;
		} else if (tradeValue >= -50 && initiator.money > proposedMoney) {

			return new Trade(initiator, recipient, proposedMoney, property, tradeObj.getCommunityChestJailCard(), tradeObj.getChanceJailCard());
		}

		return false;
	}

	// Эта функция вызывается в начале хода ИИ, до того, как будут брошены кости. Цель состоит в том, чтобы позволить ИИ управлять собственностью и/или инициировать торги.
	// Return: boolean: должен возвращать true тогда и только тогда, когда AI предложил сделку.
	this.beforeTurn = function() {
		console.log("beforeTurn");
		var s;
		var allGroupOwned;
		var max;
		var leastHouseProperty;
		var leastHouseNumber;

		// Покупать дома.
		for (var i = 0; i < 40; i++) {
			s = square[i];

			if (s.owner === p.index && s.groupNumber >= 3) { 
				max = s.group.length;
				allGroupOwned = true;
				leastHouseNumber = 6; // Ни в одной собственности никогда не будет 6 домов.

				for (var j = max - 1; j >= 0; j--) {
					if (square[s.group[j]].owner !== p.index) {
						allGroupOwned = false;
						break;
					}

					if (square[s.group[j]].house < leastHouseNumber) {
						leastHouseProperty = square[s.group[j]];
						leastHouseNumber = leastHouseProperty.house;
					}
				}

				if (!allGroupOwned) {
					continue;
				}

				if (p.money > leastHouseProperty.houseprice + 100) {
					buyHouse(leastHouseProperty.index);
				}


			}
		}

		//Собственость
		for (var i = 39; i >= 0; i--) {
			s = square[i];

			if (s.owner === p.index && s.mortgage && p.money > s.price) {
				unmortgage(i);
			}
		}

		return false;
	}

	var utilityForRailroadFlag = true; //Не предлагайт эту сделку более одного раза.


	// Эта функция вызывается каждый раз, когда AI приземляется на квадрат. Цель состоит в том, чтобы позволить ИИ управлять собственностью и/или инициировать торги.
	// Return: boolean: должен возвращать true тогда и только тогда, когда AI предложил сделку.
	this.onLand = function() {
		console.log("onLand");
		var proposedTrade;
		var property = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
		var railroadIndexes = [5, 15, 25, 35];
		var requestedRailroad;
		var offeredUtility;
		var s;

		// Если AI владеет ровно одной утилитой, попробуйт обменять ее на железную дорогу.
		for (var i = 0; i < 4; i++) {
			s = square[railroadIndexes[i]];

			if (s.owner !== 0 && s.owner !== p.index) {
				requestedRailroad = s.index;
				break;
			}
		}

		if (square[12].owner === p.index && square[28].owner !== p.index) {
			offeredUtility = 12;
		} else if (square[28].owner === p.index && square[12].owner !== p.index) {
			offeredUtility = 28;
		}

		if (utilityForRailroadFlag && game.getDie(1) !== game.getDie(2) && requestedRailroad && offeredUtility) {
			utilityForRailroadFlag = false;
			property[requestedRailroad] = -1;
			property[offeredUtility] = 1;

			proposedTrade = new Trade(p, player[square[requestedRailroad].owner], 0, property, 0, 0)

			game.trade(proposedTrade);
			return true;
		}

		return false;
	}

	// Определить, следует ли внести залог/использовать get out of jail free card (Если у вас есть).
	// Return: boolean: true для внесения залога / использования карты
	this.postBail = function() {
		console.log("postBail");

		// p.jailroll === 2 on third turn in jail.
		if ((p.communityChestJailCard || p.chanceJailCard) && p.jailroll === 2) {
			return true;
		} else {
			return false;
		}
	}

	// достаточно недвижимости, чтобы оплатить долг.
	// Return: void: ничего не возвращайт, просто вызовит функции mortgage()/sellhouse()
	this.payDebt = function() {
		console.log("payDebt");
		for (var i = 39; i >= 0; i--) {
			s = square[i];

			if (s.owner === p.index && !s.mortgage && s.house === 0) {
				mortgage(i);
				console.log(s.name);
			}

			if (p.money >= 0) {
				return;
			}
		}

	}

	// Определит, что предложить на аукционе.
	// Возвращает: целое число: -1 для выхода на аукционе, 0 для пропуска, положительное значение ставки.
	this.bid = function(property, currentBid) {
		console.log("bid");
		var bid;

		bid = currentBid + Math.round(Math.random() * 20 + 10);

		if (p.money < bid + 50 || bid > square[property].price * 1.5) {
			return -1;
		} else {
			return bid;
		}

	}
}
