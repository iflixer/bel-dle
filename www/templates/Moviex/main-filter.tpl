<form class="filter" data-dlefilter="dle-filter">
	<input class="filter__message" name="actors" placeholder="Поиск по актеру">
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="filter__wrap">
				<span class="filter__title">Год</span>
				<input type="text" name="r-year" id="filter_year">
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="filter__wrap">
				<span class="filter__title">Рейтинг кинопоиска</span>
				<input type="text" name="r.kp" id="filter_kp">
				<div id="filter__kp"></div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="filter__wrap filter__wrap--left filter__wrap--multi">
				<span class="filter__title">Жанр</span>
				<select name="cat" id="genre-options" multiple="multiple">
					<option value="1">Боевики</option>
					<option value="2">Вестерны</option>
					<option value="3">Военные</option>
					<option value="4">Детективы</option>
					<option value="5">Документальные</option>
					<option value="6">Драмы</option>
					<option value="7">Комедии</option>
					<option value="8">Криминал</option>
					<option value="9">Мелодрамы</option>
					<option value="10">Мюзиклы</option>
					<option value="11">Приключения</option>
					<option value="12">Семейные</option>
					<option value="13">Спортивные</option>
					<option value="14">Триллеры</option>
					<option value="15">Ужасы</option>
					<option value="16">Фантастика</option>
					<option value="17">Фэнтези</option>
				</select>
				<button class="filter__btn" type="button"></button>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="filter__wrap filter__wrap--right filter__wrap--multi">
				<span class="filter__title">Страна</span>
				<select name="country" id="country-options" multiple="multiple">
					<option value="США">США</option>
					<option value="Россия">Россия</option>
					<option value="Украина">Украина</option>
					<option value="Беларусь">Беларусь</option>
					<option value="Бразилия">Бразилия</option>
					<option value="Великобритания">Великобритания</option>
					<option value="Германия">Германия</option>
					<option value="Индия">Индия</option>
					<option value="Испания">Испания</option>
					<option value="Италия">Италия</option>
					<option value="Канада">Канада</option>
					<option value="Китай">Китай</option>
					<option value="Нидерланды">Нидерланды</option>
					<option value="СССР">СССР</option>
					<option value="Турция">Турция</option>
					<option value="Франция">Франция</option>
					<option value="Чехия">Чехия</option>
					<option value="Швеция">Швеция</option>
					<option value="Швейцария">Швейцария</option>
					<option value="Корея">Южная Корея</option>
					<option value="Япония">Япония</option>
				</select>
				<button class="filter__btn" type="button"></button>
			</div>
		</div>
		<div class="col-12 col-md-12 col-xl-6">
			<div class="filter__wrap filter__wrap--left filter__wrap--multi filter__wrap--border">
				<span class="filter__title">Качество</span>
				<select name="quality" id="quality-options" multiple="multiple">
					<option value="HDRip"> HDRip </option>
					<option value="BDRip"> BDRip </option>
					<option value="DVDRip"> DVDRip </option>
					<option value="WEBDL 1080"> WEBDL 1080 </option>
					<option value="CAMRip"> CAMRip </option>
					<option value="TS"> TS </option>
				</select>
				<button class="filter__btn" type="button"></button>
			</div>
		</div>
		<div class="col-12 col-md-12 col-xl-6">
			<div class="filter__wrap filter__wrap--last">
				<span class="filter__title">Сортировать по</span>
				<div class="filter__btns">
					<select name="sort" class="filter__select">
						<option value="date"> дате </option>
						<option value="title"> заголовку </option>
						<option value="comm_num"> комментариям </option>
						<option value="news_read"> просмотрам </option>
						<option value="rating"> рейтингу </option>
					</select>
					<select name="order" class="filter__select">
						<option value="desc"> убыванию </option>
						<option value="asc"> возрастанию </option>
					</select>
					<button data-dlefilter="submit" class="filter__apply" type="button">
						Поиск <svg xmlns="http://www.w3.org/2000/svg" width="17.281" height="11.56" viewbox="0 0 17.281 11.56"><path d="M216.248,1357.25a0.8,0.8,0,0,0-.228-0.49l-3.651-4.88a0.669,0.669,0,0,0-.913,0,0.788,0.788,0,0,0,0,.98l2.966,3.9H199.659a0.737,0.737,0,0,0,0,1.47h14.763l-2.966,3.9a0.788,0.788,0,0,0,0,.98,0.669,0.669,0,0,0,.913,0l3.651-4.88A2.561,2.561,0,0,0,216.248,1357.25Z" transform="translate(-198.969 -1351.72)"/></svg>
					</button>
					<button data-dlefilter="reset" class="filter__reset" type="button">
						Очистить <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewbox="0 0 10 10"><path d="M207.174,1418.99l3.555,3.55a0.84,0.84,0,1,1-1.185,1.19l-3.555-3.56-3.556,3.56a0.84,0.84,0,0,1-1.185-1.19l3.556-3.55-3.556-3.56a0.823,0.823,0,0,1,0-1.18,0.833,0.833,0,0,1,1.185,0l3.556,3.55,3.555-3.55a0.833,0.833,0,0,1,1.185,0,0.822,0.822,0,0,1,0,1.18Z" transform="translate(-201 -1414)"/></svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</form>