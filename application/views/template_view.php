<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>ВЕБ_Game</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/styles.css" rel="stylesheet" type="text/css">


	<link href="css_sait/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css_sait/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css_sait/style.css" rel="stylesheet" type="text/css">

	<link href="css_sait/responsive.css" rel="stylesheet" type="text/css">
	<link href="css_sait/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css_sait/animate.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/classicedition.js"></script>
	<script type="text/javascript" src="js/ai.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/monopoly.js"></script>

	<script type="text/javascript" src="js_sait/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js_sait/bootstrap.js"></script>
	<script type="text/javascript" src="js_sait/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js_sait/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js_sait/jquery.isotope.js"></script>
	<script type="text/javascript" src="js_sait/wow.js"></script>
	<script type="text/javascript" src="js_sait/classie.js"></script>
	<script type="text/javascript" src="js_sait/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>
<script type="text/javascript" src="./obr.js"></script>
</head>
<body>
	<header style="background: url(images/img_monopoly.jpg);
						height: 679px; width: 1349px;
						repeat;
	"class="header" id="header">
		<!--header-start-->
		<div class="container">
			<h1 class="animated fadeInDown delay-07s"><i style="color: black;"><i>Web_Game</i></h1>
			<a class="link animated fadeInUp delay-1s servicelink" href="#service">Продолжить..</a>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
				<li><a href="#service">Game</a></li>
				<li><a href="#Portfolio">Инструкция</a></li>
				<li><a href="#Admin">Обратная связь</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->
	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2><i>Game_Monopoly</i></h2>
			<div id="main_content">
	 <div id="popupbackground"></div>
	 <div id="popupwrap">
		 <div id="popup">
			 <div style="position: relative;">
				 <div id="popuptext"></div>
				 <div id="popupdrag"></div>
			 </div>
		 </div>
	 </div>

	 <div id="statsbackground"></div>
	 <div id="statswrap">
		 <div id="stats">
			 <div style="position: relative;">
				 <img id="statsclose" src="images/close.png" title="Закрыть" alt="x" />
				 <div id="statstext"></div>
				 <div id="statsdrag"></div>
			 </div>
		 </div>
	 </div>

	 <p id="noscript">
		 Примечание: эта страница не будет функционировать без JavaScript.
	 </p>

	 <div id="refresh">
		 Обновите эту страницу, чтобы начать новую игру.
	 </div>

	 <div id="deed">
		 <div id="deed-normal" style="display: none;">
			 <div id="deed-header">
				 <div style="margin: 5px; font-size: 11px;">T I T L E&nbsp;&nbsp;D E E D</div>
				 <div id="deed-name"></div>
			 </div>
			 <table id="deed-table">
				 <tr>
					 <td colspan="2">
						 АРЕНДОВАТЬ&nbsp;$<span id="deed-baserent">12</span>.
					 </td>
				 </tr>
				 <tr>
					 <td style="text-align: left;">С 1 Домом</td>
					 <td style="text-align: right;">$&nbsp;&nbsp;&nbsp;<span id="deed-rent1">60</span>.</td>
				 </tr>
				 <tr>
					 <td style="text-align: left;">С 2 Домами</td>
					 <td style="text-align: right;"><span id="deed-rent2">180</span>.</td>
				 </tr>
				 <tr>
					 <td style="text-align: left;">С 3 Домами</td>
					 <td style="text-align: right;"><span id="deed-rent3">500</span>.</td>
				 </tr>
				 <tr>
					 <td style="text-align: left;">С 4 Домами</td>
					 <td style="text-align: right;"><span id="deed-rent4">700</span>.</td>
				 </tr>
				 <tr>
					 <td colspan="2">
						 <div style="margin-bottom: 8px;">С ОТЕЛЕМ $<span id="deed-rent5">900</span>.</div>
						 <div>залоговая стоимость $<span id="deed-mortgage">80</span>.</div>
						 <div>Стоимость домов $<span id="deed-houseprice">100</span>. каждый</div>
						 <div>Отели, $<span id="deed-hotelprice">100</span>. плюс 4 дома</div>
						 <div style="font-size: 9px; font-style: italic; margin-top: 5px;">Если игроку принадлежат все лоты любой цветовой группы, арендная плата удваивается на неосвоенные лоты в этой группе.</div>
					 </td>
				 </tr>
			 </table>
		 </div>

		 <div id="deed-mortgaged">
			 <div id="deed-mortgaged-name"></div>
			 <p>&bull;</p>
			 <div>ЗАЛОЖЕННЫЙ</div>
			 <div> for $<span id="deed-mortgaged-mortgage">80</span></div>
			 <p>&bull;</p>
			 <div style="font-style: italic; font-size: 13px; margin: 10px;">Карта должна быть перевернута этой стороной вверх, если имущество заложено</div>
		 </div>

		 <div id="deed-special">
			 <div id="deed-special-name"></div>
			 <div id="deed-special-text"></div>
			 <div id="deed-special-footer">
				 залоговая стоимость
				 <span style="float: right;">$<span id="deed-special-mortgage">100</span>.</span>
			 </div>
		 </div>
	 </div>
	 <table id="board">
		 <tr>
			 <td class="cell board-corner" id="cell20"></td>
			 <td style="background-color: red;" class="cell board-top" id="cell21"></td>
			 <td class="cell board-top" id="cell22"></td>
			 <td style="background-color: red;" class="cell board-top" id="cell23"></td>
			 <td style="background-color: red;" class="cell board-top" id="cell24"></td>
			 <td class="cell board-top" id="cell25"></td>
			 <td style="background-color: yellow;"class="cell board-top" id="cell26"></td>
			 <td style="background-color: yellow;"class="cell board-top" id="cell27"></td>
			 <td class="cell board-top" id="cell28"></td>
			 <td style="background-color: yellow;"class="cell board-top" id="cell29"></td>
			 <td style="background-color: white;" class="cell board-corner" id="cell30"></td>
		 </tr><tr>
			 <td style="background-color: #FFA500;"class="cell board-left" id="cell19"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: green;" class="cell board-right" id="cell31"></td>
		 </tr><tr>
			 <td style="background-color: #FFA500;" class="cell board-left" id="cell18"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: green;" class="cell board-right" id="cell32"></td>
		 </tr><tr>
			 <td style="background-color: white;" style="background-color: white;" class="cell board-left" id="cell17"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: white;" class="cell board-right" id="cell33"></td>
		 </tr><tr>
			 <td  style="background-color: #FFA500;" class="cell board-left" id="cell16"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: green;" class="cell board-right" id="cell34"></td>
		 </tr><tr>
			 <td style="background-color: white;" class="cell board-left" id="cell15"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: white;" class="cell board-right" id="cell35"></td>
		 </tr><tr>
			 <td style="background-color: #FF0080;"class="cell board-left" id="cell14"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: white;" class="cell board-right" id="cell36"></td>
		 </tr><tr>
			 <td style="background-color: #FF0080;"class="cell board-left" id="cell13"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: blue;" class="cell board-right" id="cell37"></td>
		 </tr><tr>
			 <td style="background-color: white;"class="cell board-left" id="cell12"></td>
			 <td colspan="9" class="board-center"></td>
			 <td style="background-color: white;" class="cell board-right" id="cell38"></td>
		 </tr><tr>
			 <td style="background-color: #FF0080;" class="cell board-left" id="cell11"></td>
			 <td colspan="9" class="board-center">
				 <div id="jail"></div>
			 </td>
			 <td style="background-color: blue;"  class="cell board-right" id="cell39"></td>
		 </tr><tr>
			 <td style="background-color: white;" class="cell board-corner" id="cell10"></td>
			 <td style="background-color: #87CEEB;" class="cell board-bottom" id="cell9"></td>
			 <td style="background-color: white;" class="cell board-bottom" id="cell8"></td>
			 <td style="background-color: #87CEEB;" class="cell board-bottom" id="cell7"></td>
			 <td style="background-color: #8B4513;" class="cell board-bottom" id="cell6"></td>
			 <td style="background-color: white;"   class="cell board-bottom" id="cell5"></td>
			 <td style="background-color: white;"   class="cell board-bottom" id="cell4"></td>
			 <td style="background-color: #8B4513;" class="cell board-bottom" id="cell3"></td>
			 <td style="background-color: white;"   class="cell board-bottom" id="cell2"></td>
			 <td style="background-color: #8B4513;" class="cell board-bottom" id="cell1"></td>
			 <td style="background-color: white;"   class="cell board-corner" id="cell0"></td>
		 </tr>
	 </table>

	 <div id="moneybarwrap">
		 <div id="moneybar">
			 <table>
				 <tr id="moneybarrow0" class="money-bar-row">

					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p0arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p0moneybar" class="moneybarcell">
						 <div><span id="p0moneyname" >Игрок 0</span>:</div>
						 <div>$<span id="p0money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow1" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p1arrow" class="money-bar-arrow" alt=">"/></td>
					 <td id="p1moneybar" class="moneybarcell">
						 <div><span id="p1moneyname" >Игрок 1</span>:</div>
						 <div>$<span id="p1money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow2" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p2arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p2moneybar" class="moneybarcell">
						 <div><span id="p2moneyname" >Игрок 2</span>:</div>
						 <div>$<span id="p2money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow3" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p3arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p3moneybar" class="moneybarcell">
						 <div><span id="p3moneyname" >Игрок 3</span>:</div>
						 <div>$<span id="p3money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow4" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p4arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p4moneybar" class="moneybarcell">
						 <div><span id="p4moneyname" >Игрок 4</span>:</div>
						 <div>$<span id="p4money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow5" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p5arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p5moneybar" class="moneybarcell">
						 <div><span id="p5moneyname" >Игрок 5</span>:</div>
						 <div>$<span id="p5money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow6" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p6arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p6moneybar" class="moneybarcell">
						 <div><span id="p6moneyname" >Игрок 6</span>:</div>
						 <div>$<span id="p6money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow7" class="money-bar-row">
					 <td class="moneybararrowcell"><img src="images/arrow.png" id="p7arrow" class="money-bar-arrow" alt=">" /></td>
					 <td id="p7moneybar" class="moneybarcell">
						 <div><span id="p7moneyname" >Игрок 7</span>:</div>
						 <div>$<span id="p7money">1500</span></div>
					 </td>
				 </tr>
				 <tr id="moneybarrow8">
					 <td style="border: none;" class="moneybararrowcell">&nbsp;</td>
					 <td style="border: none;">
						 <input type="button" id="viewstats" value="Показать состояние" title="Просмотр всплывающего окна, в котором отображается список свойств каждого игрока." />
					 </td>
				 </tr>
			 </table>
		 </div>
	 </div>

	 <div id="setup">
		 <div style="margin-bottom: 20px;">
			 Выберите количество игроков.
			 <select id="playernumber" title="Выберите количество игроков для игры.">
				 <option>2</option>
				 <option>3</option>
				 <option selected="selected">4</option>
				 <option>5</option>
				 <option>6</option>
				 <option>7</option>
				 <option>8</option>
			 </select>
		 </div>

		 <div id="player1input" class="player-input">
			 Игрок 1: <input type="text" id="player1name" title="Имя игрока" maxlength="16" value="Игрок 1" />
			 <select id="player1color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option selected="selected" style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player1ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player1name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player2input" class="player-input">
			 Игрок 2: <input type="text" id="player2name" title="Имя игрока" maxlength="16" value="Игрок 2" />
			 <select id="player2color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option selected="selected" style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряныйr</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player2ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player2name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player3input" class="player-input">
			 Игрок 3: <input type="text" id="player3name" title="Имя игрока" maxlength="16" value="Игрок 3" />
			 <select id="player3color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option selected="selected" style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player3ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player3name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player4input" class="player-input">
			 Игрок 4: <input type="text" id="player4name" title="Имя игрока" maxlength="16" value="Игрок 4" />
			 <select id="player4color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черныйk</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option selected="selected" style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player4ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player4name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player5input" class="player-input">
			 Игрок 5: <input type="text" id="player5name" title="Имя игрока" maxlength="16" value="Игрок 5" />
			 <select id="player5color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option selected="selected" style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player5ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player5name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player6input" class="player-input">
			 Игрок 6: <input type="text" id="player6name" title="Имя игрока" maxlength="16" value="Игрок 6" />
			 <select id="player6color" title="Цвет игрока">
				 <option selected="selected" style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player6ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player6name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player7input" class="player-input">
			 Игрок 7: <input type="text" id="player7name" title="Имя игрока" maxlength="16" value="Игрок 7" />
			 <select id="player7color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option selected="selected" style="color: orange;">Оранжевый</option>
				 <option style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player7ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player7name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div id="player8input" class="player-input">
			 Игрок 8: <input type="text" id="player8name" title="Имя игрока" maxlength="16" value="Игрок 8" />
			 <select id="player8color" title="Цвет игрока">
				 <option style="color: aqua;">Аква</option>
				 <option style="color: black;">Черный</option>
				 <option style="color: blue;">Синий</option>
				 <option style="color: fuchsia;">Фуксия</option>
				 <option style="color: gray;">Серый</option>
				 <option style="color: green;">Зеленый</option>
				 <option style="color: lime;">Лайм</option>
				 <option style="color: maroon;">Бордовый</option>
				 <option style="color: navy;">Флот</option>
				 <option style="color: olive;">Оливковый</option>
				 <option style="color: orange;">Оранжевый</option>
				 <option selected="selected" style="color: purple;">Пурпурный</option>
				 <option style="color: red;">Красный</option>
				 <option style="color: silver;">Серебряный</option>
				 <option style="color: teal;">Тиал</option>
				 <option style="color: yellow;">Желтый</option>
			 </select>
			 <select id="player8ai" title="Выберите, будет ли этот игрок управляться человеком или компьютером." onclick="document.getElementById('player8name').disabled = this.value !== '0';">
				 <option value="0" selected="selected">Человек</option>
				 <option value="1">AI (Test)</option>
			 </select>
		 </div>

		 <div style="margin: 20px 0px;">
			 <input type="button" value="Начать Игру" onclick="setup();" title="Начните играть." />
		 </div>

		 <div id="noF5">Примечание: обновление этой страницы или переход от нее может завершить игру без предупреждения.</div>
	 </div>

	 <div id="control">
		 <table>
			 <tr>
				 <td style="text-align: left; vertical-align: top; border: none;">
					 <div id="menu">
						 <table id="menutable" cellspacing="0">
							 <tr>
								 <td class="menu-item" id="buy-menu-item">

									 <a href="javascript:void(0);" title="Просматривайте оповещения и покупайте недвижимость, на которую вы приземлились.">Покупать</a>
								 </td>
								 <td class="menu-item" id="manage-menu-item">

									 <a href="javascript:void(0);" title="Просмотр, ипотека, и улучшить вашу собственность.">Руководить</a>
								 </td>
								 <td class="menu-item" id="trade-menu-item">

									 <a href="javascript:void(0);" title="Обменивайтесь собственностью с другими игроками.">Торговля</a>
								 </td>
							 </tr>
						 </table>
					 </div>

					 <div id="buy">
						 <div id="alert"></div>
						 <div id="landed"></div>
					 </div>

					 <div id="manage">
						 <div id="option">
							 <div id="buildings" title="Существующих зданий"></div>
							 <input type="button" value="Купить дом" id="buyhousebutton"/>
							 <input type="button" value="Ипотечный кредит" id="mortgagebutton" />
							 <input type="button" value="Продать дом" id="sellhousebutton"/>
						 </div>
						 <div id="owned"></div>
					 </div>
				 </td>
				 <td style="vertical-align: top; border: none;">
					 <div id="quickstats" style="">
							 <div><span id="pname" >Игрок 1</span>:</div>
							 <div><span id="pmoney">$1500</span></div>
					 </div>
					 <div>
						 <div id="die0" title="Die" class="die die-no-img"></div>
						 <div id="die1" title="Die" class="die die-no-img"></div>
					 </div>

				 </td>
			 </tr><tr>
				 <td colspan="2" style="border: none">
					 <div style="padding-top: 8px;">
						 <input type="button" id="nextbutton" title="Бросьте кости и переместите свой жетон соответственно." value="Бросьте Кости"/>
						 <input type="button" id="resignbutton" title="Если вы не можете оплатить свой долг, то вы должны уйти из игры." value="Уйти" onclick="game.resign();" />
					 </div>
				 </td>
			 </tr>
		 </table>
	 </div>

	 <div id="trade">
		 <table style="border-spacing: 3px;">
			 <tr>
				 <td class="trade-cell">
					 <div id="trade-leftp-name"></div>
				 </td>
				 <td class="trade-cell">
					 <div id="trade-rightp-name"></div>
				 </td>
			 </tr>
			 <tr>
				 <td class="trade-cell">
					 $&nbsp;<input id="trade-leftp-money" value="0" title="Введите сумму для обмена с другим игроком." />
				 </td>
				 <td class="trade-cell">
					 $&nbsp;<input id="trade-rightp-money" value="0" title="Введите сумму для обмена с другим игроком." />
				 </td>
			 </tr>
			 <tr>
				 <td id="trade-leftp-property" class="trade-cell"></td>
				 <td id="trade-rightp-property" class="trade-cell"></td>
			 </tr>
			 <tr>
				 <td colspan="2" class="trade-cell">
					 <input type="button" id="proposetradebutton" value="Предложите Торговлю" onclick="game.proposeTrade();" title="Обменяйте деньги и свойства, которые проверены выше." />
					 <input type="button" id="canceltradebutton" value="Отменить Сделку" onclick='game.cancelTrade();' title="Отмените сделку." />
					 <input type="button" id="accepttradebutton" value="Принять сделку" onclick="game.acceptTrade();" title="Примите предложенную сделку." />
					 <input type="button" id="rejecttradebutton" value="Отклонить Торговлю" onclick='game.cancelTrade();' title="Отклонить предложенную сделку." />
				 </td>
			 </tr>
		 </table>
	 </div>
	</div>
		</div>
	</section>
	<!--main-section-end-->
	<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div id="game_opis" class="container">
			<h2>Инструкция к игре</h2>
			<h3><b>Краткое описание игры</b></h3>
			<p><b>&nbsp;&nbsp;&nbsp;&nbsp;Монополия</b> — это классическая игра, в которой вы можете покупать, арендовать и продавать свою собственность!
				В начале игры участники выставляют свои фишки на поле «Вперед», затем перемещают их по игровому полю в зависимости от выпавшего на кубиках количества очков.
				Если вы попадаете на Участок Недвижимости, которая пока еще никому не принадлежит, то вы можете купить эту Недвижимость у Банка.
				Если вы решаете не покупать ее, она может быть продана на Аукционе другому игроку, предложившему за нее самую высокую цену.
				Игроки, имеющие Недвижимость, могут взимать арендную плату с игроков, которые попадают на их Участок. При строительстве Домов и Гостиниц арендная плата значительно возрастает, поэтому вам следует вести строительсто на как можно большем количестве Участков.
				Если вы нуждаетесь в деньгах, вы можете заложить вашу Недвижимость.
				В ходе игры вам следует всегда выполнять указания, написанные на карточках «Общественная казна» и «Шанс». Но не расслабляйтесь — в некоторых случаях вас могут посадить в Тюрьму.</p>
				<h3><b>Цель игры</b></h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Остаться единственным необанкротившимся игроком.</b></p>
				<h3><b>Начало игры</b></h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Фишки всех игроков выстраиваются на поле «Вперед», после чего поочередно каждый делает свой ход.</b></p>
				<p>Приятной игры!</p>
		 </div>
	 </div>
	</section>
	<section class="main-section paddind" id="Admin">
		<!--main-section-start-->
		<div id="game_opis" class="container">
			<h2>Связь с разработчиком игры</h2>
			<div class="cover">
    <h2 id="obr" class="contact">Напишите мне</h2>
    <form id="contactform" action="send/mail.php" method="post">
        <p class="contact"><label for="name">Имя</label></p>
        <input class="inp" id="name" name="name" placeholder="Ваше имя" required="" tabindex="1" type="text">

        <p class="contact"><label for="email">Email</label></p>
        <input class="inp" id="email" name="email" placeholder="example@sitehere.ru" required="" tabindex="2" type="text">

        <p class="contact"><label for="Subject">Тема</label></p>
        <input class="inp" id="subject" name="subject" placeholder="Тема сообщения" required="" tabindex="2" type="text">

        <p class="contact"><label for="comment">Сообщение</label></p>
        <textarea name="comment" id="comment" tabindex="4"></textarea> <br>
        <input class="inp" name="submit" id="submit" tabindex="5" value="Отправить" type="submit">
    </form>
</div>
		 </div>
	</section>
	<footer class="footer">
		<div class="container">
			<p id="copy" >copyright&copy;2019<span>Saper</span>Fly</p>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});

	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>

	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>
	<script type="text/javascript">
	$(function(){
	  'use strict';
	$('#form').on('submit', function(e){
	    e.preventDefault();
	    var fd = new FormData( this );
	    $.ajax({
	      url: 'email.php',
	      type: 'POST',
	      contentType: false,
	      processData: false,
	      data: fd,
	      success: function(msg){
	if(msg == 'ok') {
	  alert('Отправлено')
	} else {
	  alert('Ошибка')
	}
	      }
	    });
	  });
	});
	</script>
</body>

</html>
