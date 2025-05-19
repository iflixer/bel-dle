[available=main]

{* Все 3 кастома ниже - это фактически один слайдер. Их нужно настроить одинаково, они не должны отличаться! *}

<div class="home">
	<div class="home__bg owl-carousel">
		{custom category="1-10" template="custom-slide1" order="date" limit="10" from="0"}
	</div>
	<div class="container">
		<div class="row no-gutters">
			<div class="col-12">
				<div class="home__title"><b>Кино</b> Новинки</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-12 col-xl-6 home__slider-wrap">
				<div class="home__slider owl-carousel">
					{custom category="1-10" template="custom-slide2" order="date" limit="10" from="0"}
				</div>
			</div>
			<div class="col-12 col-xl-6">
				<div class="home__carousel owl-carousel">
					{custom category="1-10" template="custom-slide3" order="date" limit="10" from="0"}
				</div>
			</div>
		</div>
		<div class="home__nav">
			<button class="home__btn home__btn--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20.03" height="14" viewBox="0 0 20.03 14"><path d="M1453.14,126.518l5.4,6.223a0.783,0.783,0,0,0,1.09.079,0.816,0.816,0,0,0,.07-1.1l-4.27-4.935h16.8a0.778,0.778,0,0,0,0-1.556h-16.8l4.27-4.934a0.816,0.816,0,0,0-.07-1.1,0.775,0.775,0,0,0-1.09.079l-5.4,6.223A0.811,0.811,0,0,0,1453.14,126.518Z" transform="translate(-1452.97 -119)"/></svg></button>
			<button class="home__btn home__btn--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14"><path d="M1520.83,126.518l-5.39,6.223a0.783,0.783,0,0,1-1.09.079,0.828,0.828,0,0,1-.08-1.1l4.27-4.935h-16.77a0.778,0.778,0,0,1,0-1.556h16.77l-4.27-4.934a0.828,0.828,0,0,1,.08-1.1,0.775,0.775,0,0,1,1.09.079l5.39,6.223A0.825,0.825,0,0,1,1520.83,126.518Z" transform="translate(-1501 -119)"/></svg></button>
		</div>
	</div>
</div>
[/available]