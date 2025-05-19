<!DOCTYPE html>
<html>
<head>
	{headers}
	<meta name="HandheldFriendly" content="true">
	<meta name="format-detection" content="telephone=no">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width"> 
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">	
	<link rel="shortcut icon" href="{THEME}/img/favicon.ico">
	<link rel="stylesheet" href="{THEME}/css/multi-select.css">
	<link rel="stylesheet" href="{THEME}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{THEME}/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="{THEME}/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="{THEME}/css/engine.css">
	<link rel="stylesheet" href="{THEME}/css/main.css">
	<link rel="stylesheet" href="{THEME}/css/ion.rangeSlider.css">
</head>
<body>

<header class="header">
	<div class="header__content">
		<div class="header__navigation">
			<a href="/" class="header__logo"><span>Movie</span>X</a>
			<button class="header__menu-btn" type="button"></button>
			{include file="main-menu.tpl"}
		</div>
		<div class="header__profile">
			<div class="header__search">
				<button class="header__search-btn" type="button">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"><path d="M41.532,137.666a9.248,9.248,0,0,0-3.774-13.939A9.025,9.025,0,0,0,34.2,123H34.182a9.1,9.1,0,0,0-6.5,2.711A9.182,9.182,0,0,0,39.74,139.523L45.181,145,47,143.168Zm-0.739-5.426a6.611,6.611,0,1,1-6.611-6.655A6.64,6.64,0,0,1,40.793,132.24Z" transform="translate(-25 -123)"/></svg>
				</button>
			</div>
			{login}
		</div>
		<form id="q_search" class="header__search-form" method="post">
			<input class="header__search-input" type="text" id="story" name="story" placeholder="Поиск.." type="search">
			<button type="submit" class="header__search-find" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"><path d="M280.532,139.666a9.248,9.248,0,0,0-3.774-13.939A9.021,9.021,0,0,0,273.2,125h-0.017a9.1,9.1,0,0,0-6.5,2.711,9.272,9.272,0,0,0,2.921,15.045,9.12,9.12,0,0,0,9.132-1.231L284.181,147,286,145.168Zm-0.739-5.426a6.611,6.611,0,1,1-6.611-6.655A6.641,6.641,0,0,1,279.793,134.24Z" transform="translate(-264 -125)"/></svg></button>
			<button class="header__search-close" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="10.063" height="10.062" viewBox="0 0 10.063 10.062"><path d="M43.177,135.985l3.573,3.572a0.842,0.842,0,0,1-1.191,1.19l-3.573-3.571-3.573,3.571a0.842,0.842,0,0,1-1.191-1.19l3.573-3.572-3.573-3.571a0.842,0.842,0,1,1,1.191-1.191l3.573,3.572,3.573-3.572a0.842,0.842,0,0,1,1.191,1.191Z" transform="translate(-36.969 -130.969)"/></svg></button>
			<input type="hidden" name="do" value="search">
			<input type="hidden" name="subaction" value="search">
		</form>
	</div>
</header>

{include file="main-slider.tpl"}

{speedbar}
	
<section class="content">
	<div class="container">
		[available=cat|filter|favorites]
		<div class="row">
			<div class="col-12">
				[available=cat]<div class="content__title"><h2>{category-title}</h2></div>[/available]
				[available=favorites]<div class="content__title"><h2>Мои закладки</h2></div>[/available]
				<div class="content__navigation content__navigation--catalog">
					<button class="content__filter-btn" type="button">
						Фильтр <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M83.907,357.3v-3.363a0.972,0.972,0,0,0-.273-0.661,0.943,0.943,0,0,0-1.323,0,0.968,0.968,0,0,0-.273.661V357.3a0.975,0.975,0,0,0,.273.661,0.941,0.941,0,0,0,1.323,0,0.989,0.989,0,0,0,.273-0.663h0Zm0,12.771v-8.647c0-.4.006-0.8,0-1.195v-0.017a0.972,0.972,0,0,0-.273-0.661,0.941,0.941,0,0,0-1.323,0,0.968,0.968,0,0,0-.273.661v8.647c0,0.4-.006.8,0,1.195v0.017a0.971,0.971,0,0,0,.273.66,0.938,0.938,0,0,0,1.323,0,0.978,0.978,0,0,0,.273-0.66h0Zm-2.972-11.838h4.093a0.973,0.973,0,0,0,.662-0.272,0.937,0.937,0,0,0,0-1.322,0.971,0.971,0,0,0-.662-0.273H80.935a0.974,0.974,0,0,0-.662.273,0.937,0.937,0,0,0,0,1.322,0.982,0.982,0,0,0,.662.272h0Zm6,7.245h4.093a0.974,0.974,0,0,0,.662-0.273,0.937,0.937,0,0,0,0-1.322,0.97,0.97,0,0,0-.662-0.273H86.935a0.974,0.974,0,0,0-.662.273,0.937,0.937,0,0,0,0,1.322,0.984,0.984,0,0,0,.662.273h0Zm2.99-.934v-9.3c0-.43.006-0.861,0-1.29v-0.019a0.972,0.972,0,0,0-.273-0.661,0.941,0.941,0,0,0-1.323,0,0.968,0.968,0,0,0-.273.661v9.3c0,0.429-.006.861,0,1.29v0.019a0.972,0.972,0,0,0,.273.661,0.938,0.938,0,0,0,1.323,0,0.981,0.981,0,0,0,.273-0.661h0Zm0,5.527v-2.615a0.969,0.969,0,0,0-.273-0.66,0.938,0.938,0,0,0-1.323,0,0.968,0.968,0,0,0-.273.66v2.615a0.972,0.972,0,0,0,.273.66,0.938,0.938,0,0,0,1.323,0,0.978,0.978,0,0,0,.273-0.66h0Zm6.018-9.429v-5.874c0-.273,0-0.545,0-0.818v-0.011a0.971,0.971,0,0,0-.273-0.661,0.941,0.941,0,0,0-1.323,0,0.968,0.968,0,0,0-.273.661v5.874c0,0.272,0,.545,0,0.818v0.011a0.972,0.972,0,0,0,.273.661,0.941,0.941,0,0,0,1.323,0,0.98,0.98,0,0,0,.273-0.661h0Zm0,9.429v-5.714c0-.263,0-0.528,0-0.791v-0.012a0.973,0.973,0,0,0-.273-0.661,0.941,0.941,0,0,0-1.323,0,0.968,0.968,0,0,0-.273.661v5.714c0,0.263,0,.528,0,0.791v0.012a0.971,0.971,0,0,0,.273.66,0.938,0.938,0,0,0,1.323,0,0.978,0.978,0,0,0,.273-0.66h0Zm-2.972-8.5h4.093a0.973,0.973,0,0,0,.662-0.272,0.937,0.937,0,0,0,0-1.322,0.97,0.97,0,0,0-.662-0.273H92.972a0.974,0.974,0,0,0-.662.273,0.941,0.941,0,0,0-.273.661,0.951,0.951,0,0,0,.273.661,0.982,0.982,0,0,0,.662.272h0Z" transform="translate(-80 -353)"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="14.063" height="14.062" viewBox="0 0 14.063 14.062"><path d="M90.65,362.982l5,5a1.178,1.178,0,0,1-1.666,1.665l-5-5-5,5a1.178,1.178,0,1,1-1.666-1.665l5-5-5-5a1.178,1.178,0,1,1,1.666-1.665l5,5,5-5a1.178,1.178,0,1,1,1.666,1.665Z" transform="translate(-81.969 -355.969)"></path></svg>
					</button>
					[sort]
					<div class="content__sort">
						<a class="content__sort-btn dropdown-toggle" href="#" role="button" id="sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16"><path d="M286.835,740.541a0.746,0.746,0,0,1-.713.771h-14.41a0.745,0.745,0,0,1-.712-0.771V739.77a0.745,0.745,0,0,1,.712-0.771h14.41a0.746,0.746,0,0,1,.713.771v0.771Zm-3.3,6.167a0.742,0.742,0,0,1-.706.771H271.706a0.742,0.742,0,0,1-.706-0.771v-0.771a0.742,0.742,0,0,1,.706-0.771h11.121a0.742,0.742,0,0,1,.706.771v0.771Zm-4.438,6.167a0.758,0.758,0,0,1-.74.77h-6.616a0.758,0.758,0,0,1-.739-0.77V752.1a0.758,0.758,0,0,1,.739-0.771h6.616a0.758,0.758,0,0,1,.74.771v0.771Zm-0.37,2.312,0,0,16.18-4.717-0.9-.942a0.311,0.311,0,0,0-.452,0l-1.975,2.056V739.333a0.327,0.327,0,0,0-.319-0.334h-1.28a0.328,0.328,0,0,0-.32.334v12.251l-1.974-2.057a0.312,0.312,0,0,0-.452,0l-0.9.943a0.345,0.345,0,0,0,0,.471l3.612,3.765a0.932,0.932,0,0,0,1.357,0l3.612-3.765A0.343,0.343,0,0,0,294.9,750.47Z" transform="translate(-271 -739)"/></svg></a>
						<div class="content__sort-menu dropdown-menu" aria-labelledby="sort">
							{sort}
						</div>
					</div>
					[/sort]
				</div>
				{include file="main-filter.tpl"}
			</div>
		</div>
		[/available]
		
		{info}
		
		[not-available=main]<div class="[not-available=showfull]row row--grid[/not-available]">{content}</div>[/not-available]

		[available=main]{include file="main-page.tpl"}[/available]
	</div>
</section>
	
	
[available=main]
<section class="premiers">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="premiers__title">
					<h2>Ожидаемые фильмы</h2>
					<a href="#"><span>смотреть все</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10"><path data-name="next_icon" d="M1189.99,1945.77a0.65,0.65,0,0,0-.21-0.42l-3.38-4.2a0.639,0.639,0,0,0-.84,0,0.617,0.617,0,0,0,0,.84l2.74,3.36h-13.67a0.63,0.63,0,1,0,0,1.26h13.67l-2.74,3.36a0.617,0.617,0,0,0,0,.84,0.639,0.639,0,0,0,.84,0l3.38-4.2A2.093,2.093,0,0,0,1189.99,1945.77Z" transform="translate(-1174 -1941)"/></svg></a>
				</div>
			</div>
		</div>
		<div class="row">
			{custom category="1-10" template="custom-film" order="date" limit="12" from="0"}	
		</div>
	</div>
</section>
[/available]	

{include file="main-seo.tpl"}
     
<footer class="footer">
	<div class="footer__content">
		<div class="footer__counters">
			<div class="footer__counter">{* место для счетчика *}</div>
			<div class="footer__counter">{* место для счетчика *}</div>
			<div class="footer__counter">{* место для счетчика *}</div>
		</div>
		<nav class="footer__nav">
			<a href="#">Главная</a>
			<a href="#">Правообладателям</a>
			<a href="/index.php?do=feedback">Контакты</a>
		</nav>
		<div class="footer__copyright">
			<span>© 2024 MovieX</span>
			<small>Лучший сайт в мире. Все права не защищены.</small>
		</div>
		<button class="footer__btn" type="button">
		<svg xmlns="http://www.w3.org/2000/svg" width="11.97" height="18" viewBox="0 0 11.97 18"><path id="normal" d="M1510.73,3822.01a0.808,0.808,0,0,0-.5.23l-5.05,3.81a0.7,0.7,0,0,0,0,.95,0.8,0.8,0,0,0,1.01,0l4.04-3.09v15.38a0.756,0.756,0,0,0,1.51,0v-15.38l4.04,3.09a0.8,0.8,0,0,0,1.01,0,0.7,0.7,0,0,0,0-.95l-5.05-3.81A2.742,2.742,0,0,0,1510.73,3822.01Z" transform="translate(-1505 -3822)"/></svg>
		</button>
	</div>
</footer>

{jsfiles}
<script src="{THEME}/js/bootstrap.bundle.min.js"></script>
<script src="{THEME}/js/owl.carousel.min.js"></script>
<script src="{THEME}/js/jquery.multi-select.js"></script>
<script src="{THEME}/js/main.js"></script>
<script src="{THEME}/js/ion.rangeSlider.js"></script>
{AJAX}
</body>
</html>