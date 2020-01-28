function Square(name, pricetext, color, price, groupNumber, baserent, rent1, rent2, rent3, rent4, rent5) {
	this.name = name;
	this.pricetext = pricetext;
	this.color = color;
	this.owner = 0;
	this.mortgage = false;
	this.house = 0;
	this.hotel = 0;
	this.groupNumber = groupNumber || 0;
	this.price = (price || 0);
	this.baserent = (baserent || 0);
	this.rent1 = (rent1 || 0);
	this.rent2 = (rent2 || 0);
	this.rent3 = (rent3 || 0);
	this.rent4 = (rent4 || 0);
	this.rent5 = (rent5 || 0);
	this.landcount = 0;

	if (groupNumber === 3 || groupNumber === 4) {
		this.houseprice = 50;
	} else if (groupNumber === 5 || groupNumber === 6) {
		this.houseprice = 100;
	} else if (groupNumber === 7 || groupNumber === 8) {
		this.houseprice = 150;
	} else if (groupNumber === 9 || groupNumber === 10) {
		this.houseprice = 200;
	} else {
		this.houseprice = 0;
	}
}

function Card(text, action) {
	this.text = text;
	this.action = action;
}

function corrections() {
	document.getElementById("cell1name").textContent = "Mediter-ranean Avenue";

	// Add images to enlarges.
	document.getElementById("enlarge5token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; bottom: 20px;" />';
	document.getElementById("enlarge15token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge25token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge35token").innerHTML += '<img src="images/train_icon.png" height="60" width="65" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge12token").innerHTML += '<img src="images/electric_icon.png" height="60" width="48" alt="" style="position: relative; top: -20px;" />';
	document.getElementById("enlarge28token").innerHTML += '<img src="images/water_icon.png" height="60" width="78" alt="" style="position: relative; top: -20px;" />';
}

function utiltext() {
	return '&nbsp;&nbsp;&nbsp;&nbsp;Если одна "утилита" принадлежит арендная плата в 4 раза сумма, показанная на кости.<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;Если обе "утилиты" находятся в собственности аренда составляет 10 раз сумму, указанную на кости.';
}

function transtext() {
	return '<div style="font-size: 14px; line-height: 1.5;">Арендовать<span style="float: right;">$25.</span><br />Если 2 железные дороги принадлежат<span style="float: right;">50.</span><br />Если 3 &nbsp; &nbsp; " &nbsp; &nbsp; " &nbsp; &nbsp; "<span style="float: right;">100.</span><br />Если 4 &nbsp; &nbsp; " &nbsp; &nbsp; " &nbsp; &nbsp; "<span style="float: right;">200.</span></div>';
}

function luxurytax() {
	addAlert(player[turn].name + " заплатил $ 100 за посадку на налог на роскошь.");
	player[turn].pay(100, 0);

	$("#landed").show().text("Вы приземлились на налог на роскошь. Заплати $ 100.");
}

function citytax() {
	addAlert(player[turn].name + " заплатил $ 200 за посадку по городскому налогу.");
	player[turn].pay(200, 0);

	$("#landed").show().text("Вы приземлились на городской налог. Платить$200.");
}

var square = [];

square[0] = new Square("Начать", "СОБЕРИТЕ 200$ ЗАРПЛАТЫ, КОГДА БУДЕТЕ ПРОХОДИТЬ.", "#FFFFFF");
square[1] = new Square("Средиземноморский Проспект", "$60", "#8B4513", 60, 3, 4, 20, 60, 180, 320, 450);
square[2] = new Square("СУНДУК СООБЩЕСТВА", "СЛЕДУЙТЕ ИНСТРУКЦИЯМ НА ВЕРХНЕЙ КАРТЕ", "#FFFFFF");
square[3] = new Square("Балтийский Проспект", "$60", "#8B4513", 60, 3, 4, 20, 60, 180, 320, 450);
square[4] = new Square("муниципальный налог", "ОПЛАТИ $200", "#FFFFFF");
square[5] = new Square("Железная Дорога", "$200", "#FFFFFF", 200, 1);
square[6] = new Square("Восточный Проспект", "$100", "#87CEEB", 100, 4, 6, 30, 90, 270, 400, 550);
square[7] = new Square("Шанс", "СЛЕДУЙТЕ ИНСТРУКЦИЯМ НА ВЕРХНЕЙ КАРТЕ", "#FFFFFF");
square[8] = new Square("Вермонт-Авеню", "$100", "#87CEEB", 100, 4, 6, 30, 90, 270, 400, 550);
square[9] = new Square("Коннектикут Авеню", "$120", "#87CEEB", 120, 4, 8, 40, 100, 300, 450, 600);
square[10] = new Square("Просто Посещение", "", "#FFFFFF");
square[11] = new Square("Сент-Чарльз Пласe", "$140", "#FF0080", 140, 5, 10, 50, 150, 450, 625, 750);
square[12] = new Square("электрическая компания", "$150", "#FFFFFF", 150, 2);
square[13] = new Square("Проспект Штаты", "$140", "#FF0080", 140, 5, 10, 50, 150, 450, 625, 750);
square[14] = new Square("Вирджиния-Авеню", "$160", "#FF0080", 160, 5, 12, 60, 180, 500, 700, 900);
square[15] = new Square("Пенсильванская Железная Дорога", "$200", "#FFFFFF", 200, 1);
square[16] = new Square("Сент-Джеймс Плейс", "$180", "#FFA500", 180, 6, 14, 70, 200, 550, 750, 950);
square[17] = new Square("Сундук Сообщества", "СЛЕДУЙТЕ ИНСТРУКЦИЯМ НА ВЕРХНЕЙ КАРТЕ", "#FFFFFF");
square[18] = new Square("Теннесси-Авеню", "$180", "#FFA500", 180, 6, 14, 70, 200, 550, 750, 950);
square[19] = new Square("Нью-Йорк Авеню", "$200", "#FFA500", 200, 6, 16, 80, 220, 600, 800, 1000);
square[20] = new Square("Бесплатная автостоянка", "", "#FFFFFF");
square[21] = new Square("Кентукки-Авеню", "$220", "#FF0000", 220, 7, 18, 90, 250, 700, 875, 1050);
square[22] = new Square("ШАНС", "СЛЕДУЙТЕ ИНСТРУКЦИЯМ НА ВЕРХНЕЙ КАРТЕ", "#FFFFFF");
square[23] = new Square("Индиана-Авеню", "$220", "#FF0000", 220, 7, 18, 90, 250, 700, 875, 1050);
square[24] = new Square("Иллинойс-Авеню", "$240", "#FF0000", 240, 7, 20, 100, 300, 750, 925, 1100);
square[25] = new Square("B&O Железная Дорога", "$200", "#FFFFFF", 200, 1);
square[26] = new Square("Атлантик-Авеню", "$260", "#FFFF00", 260, 8, 22, 110, 330, 800, 975, 1150);
square[27] = new Square("Вентнор-Авеню", "$260", "#FFFF00", 260, 8, 22, 110, 330, 800, 975, 1150);
square[28] = new Square("Воды", "$150", "#FFFFFF", 150, 2);
square[29] = new Square("Марвин Гарденс", "$280", "#FFFF00", 280, 8, 24, 120, 360, 850, 1025, 1200);
square[30] = new Square("Идите в тюрьму", "Идите прямо в тюрьму. Не проходите мимо начать. Не взымать $200.", "#FFFFFF");
square[31] = new Square("Пасифик-Авеню", "$300", "#008000", 300, 9, 26, 130, 390, 900, 110, 1275);
square[32] = new Square("Северная Каролина-Авеню", "$300", "#008000", 300, 9, 26, 130, 390, 900, 110, 1275);
square[33] = new Square("Сундук сообщества", "СЛЕДУЙТЕ ИНСТРУКЦИЯМ НА ВЕРХНЕЙ КАРТЕ", "#FFFFFF");
square[34] = new Square("Пенсильвания авеню", "$320", "#008000", 320, 9, 28, 150, 450, 1000, 1200, 1400);
square[35] = new Square("короткая линия", "$200", "#FFFFFF", 200, 1);
square[36] = new Square("ШАНС", "СЛЕДУЙТЕ ИНСТРУКЦИЯМ НА ВЕРХНЕЙ КАРТЕ", "#FFFFFF");
square[37] = new Square("Парк Плейс", "$350", "#0000FF", 350, 10, 35, 175, 500, 1100, 1300, 1500);
square[38] = new Square("НАЛОГ НА РОСКОШЬ", "Оплати $100", "#FFFFFF");
square[39] = new Square("Променад", "$400", "#0000FF", 400, 10, 50, 200, 600, 1400, 1700, 2000);

var communityChestCards = [];
var chanceCards = [];

communityChestCards[0] = new Card("Выйди из тюрьмы, освободись. Эта карта может храниться до тех пор, пока она не понадобится или не будет продана.", function(p) { p.communityChestJailCard = true; updateOwned();});
communityChestCards[1] = new Card("Вы выиграли второй приз в конкурсе красоты. Соберите $10.", function() { addamount(10, 'Community Chest');});
communityChestCards[2] = new Card("От продажи акций вы получаете $ 50.", function() { addamount(50, 'Community Chest');});
communityChestCards[3] = new Card("Страхование жизни созревает. Собрать $100.", function() { addamount(100, 'Community Chest');});
communityChestCards[4] = new Card("Возврат налога на прибыль. Соберите $20.", function() { addamount(20, 'Community Chest');});
communityChestCards[5] = new Card("Праздничный фонд назревает. Получите $ 100.", function() { addamount(100, 'Community Chest');});
communityChestCards[6] = new Card("Вы наследуете $ 100.", function() { addamount(100, 'Community Chest');});
communityChestCards[7] = new Card("Получите $25 по вопросам коммерческой платы.", function() { addamount(25, 'Community Chest');});
communityChestCards[8] = new Card("Оплата больничных сборов составляет $ 100.", function() { subtractamount(100, 'Community Chest');});
communityChestCards[9] = new Card("Банковская ошибка в вашу пользу. Собрать $200.", function() { addamount(200, 'Community Chest');});
communityChestCards[10] = new Card("Оплата школьных сборов составляет $ 50.", function() { subtractamount(50, 'Community Chest');});
communityChestCards[11] = new Card("Гонорар врача. Заплати $ 50.", function() { subtractamount(50, 'Community Chest');});
communityChestCards[12] = new Card("Это твой день рождения. Соберите $10 с каждого игрока.", function() { collectfromeachplayer(10, 'Community Chest');});
communityChestCards[13] = new Card("Направляйтесь \"Начать\" (Соберите $200).", function() { advance(0);});
communityChestCards[14] = new Card("Вы оцениваете для ремонта улицы. $ 40 за дом. $ 115 за отель.", function() { streetrepairs(40, 115);});
communityChestCards[15] = new Card("Идите в тюрьму. Направляйтесь пряму в тюрьму. Не проходите поле \"Вперед\". Не собирайте $200.", function() { gotojail();});


chanceCards[0] = new Card("ВЫЙТИ НА СВОБОДУ. Эта карта может храниться до тех пор, пока она не понадобится или не будет продана.", function(p) { p.chanceJailCard=true; updateOwned();});
chanceCards[1] = new Card("Сделайте общий ремонт на всей вашей собственности. За каждый дом платят $ 25. За каждый отель $100.", function() { streetrepairs(25, 100);});
chanceCards[2] = new Card("Штраф за превышение скорости $15.", function() { subtractamount(15, 'Chance');});
chanceCards[3] = new Card("Вы были избраны председателем правления. Заплатите каждому игроку $ 50.", function() { payeachplayer(50, 'Chance');});
chanceCards[4] = new Card("Вернитесь на три места назад.", function() { gobackthreespaces();});
chanceCards[5] = new Card("ПЕРЕЙТИ К БЛИЖАЙШЕЙ УТИЛИТЕ. Если он не используется, Вы можете купить его в банке. Если принадлежит, бросьте кости и заплатите владельцу в общей сложности в десять раз больше брошенной суммы.", function() { advanceToNearestUtility();});
chanceCards[6] = new Card("Банк выплачивает вам дивиденды в размере $ 50.", function() { addamount(50, 'Chance');});
chanceCards[7] = new Card("ПРОДВИГАЙТЕСЬ К БЛИЖАЙШЕЙ ЖЕЛЕЗНОЙ ДОРОГЕ. Если он не используется, Вы можете купить его в банке. Если принадлежит, платить владельцу в два раза арендную плату, на которую они в противном случае имеют право.", function() { advanceToNearestRailroad();});
chanceCards[8] = new Card("Платите плохой налог в размере $ 15.", function() { subtractamount(15, 'Chance');});
chanceCards[9] = new Card("Совершите поездку в Рединг-Рейл-Роуд. Если вы пройдете \"Начать\" соберите $200.", function() { advance(5);});
chanceCards[10] = new Card("Продвигайтесь к променаду.", function() { advance(39);});
chanceCards[11] = new Card("Двигайтесь к Иллинойс-Авеню. Если вы пройдете \"Начать\" Соберите $200.", function() { advance(24);});
chanceCards[12] = new Card("Ваш строительный кредит созревает. Соберите $ 150.", function() { addamount(150, 'Chance');});
chanceCards[13] = new Card("ПРОДВИГАЙТЕСЬ К БЛИЖАЙШЕЙ ЖЕЛЕЗНОЙ ДОРОГЕ. Если он не используется, Вы можете купить его в банке. Если принадлежит, платить владельцу в два раза арендную плату, на которую они в противном случае имеют право.", function() { advanceToNearestRailroad();});
chanceCards[14] = new Card("Продвигайтесь к Сент-Чарльз-Плейс. Если вы пройдете\"Начать\" соберите $200.", function() { advance(11);});
chanceCards[15] = new Card("отправиться в тюрьму. Идите прямо в тюрьму. Не проходить \"Начать\". Не соберайте $200.", function() { gotojail();});
