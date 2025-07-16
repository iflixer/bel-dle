			<div class="main-section-one">

				<div class="section">
					<div class="section-title clearfix">
						<a href="/movies"><h2>Новинки кино</h2></a>
					</div>
					<div class="homesection-content">
						{custom category_root="4" template="shortstory" aviable="global" fixed="yes" order="year desc,rating" from="0" limit="10" cache="yes"}
					</div>
					<div class="apkwidget inmain">
						<div class="widgettitle">Пиратка для мобилки</div>
						<a href="https://apk.piratka.me" class="apkbutt inverse">Скачать приложение</a>
					</div>
				</div>
				
				<div class="section">
					<div class="section-title clearfix">
						<a href="/series"><h2>Сериалы</h2></a>
					</div>
					<div class="homesection-content">
						{custom category_root="5" template="shortstory" aviable="global" fixed="yes" order="year desc,rating" from="0" limit="10" cache="yes"}
					</div>

					<div class="side-block inmain">
						<a class="tgsignupbtn tgbtn" href="https://t.me/[telegram-bot-name]" target="_blank">Подпишитесь на обновления</a>
						<div class="upd-box-title">Обновление сериалов</div>
						<div class="side-block__content">
							{custom category_root="5" template="custom-upd" order="date" limit="15" cache="yes"}
						</div>
					</div>
				</div>
				
				<div class="section">
					<div class="section-title clearfix">
						<a href="/cartoon"><h2>Мультфильмы</h2></a>
					</div>
					<div class="homesection-content">
						{custom category_root="6" template="shortstory" aviable="global" fixed="yes" order="year desc,rating" from="0" limit="10" cache="yes"}
					</div>
				</div>
				
				<div class="section">
					<div class="section-title clearfix">
						<a href="/tvshow"><h2>Телепередачи</h2></a>
					</div>
					<div class="homesection-content">
						{custom category_root="8" template="shortstory" aviable="global" fixed="yes" order="year desc,rating" from="0" limit="10" cache="yes"}
					</div>
				</div>
				
			</div>
