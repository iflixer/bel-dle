<div class="form stats">
	<div class="form__header">
		<h1 class="form__title">Статистика сайта</h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<ul class="stats__latest">
		<li>За сутки: <b>{news_day}</b> новостей, <b>{comm_day}</b> комментариев и <b>{user_day}</b> пользователей</li>
		<li>За неделю: <b>{news_week}</b> новостей, <b>{comm_week}</b> комментариев и <b>{user_week}</b> пользователей</li>
		<li>За месяц: <b>{news_month}</b> новостей, <b>{comm_month}</b> комментариев и <b>{user_month}</b> пользователей</li>
	</ul>
	<div class="stats__common d-flex jc-flex-start">
		<ul class="stats__list">
			<li><h2>Новости:</h2></li>
			<li>Общее кол-во: <b>{news_num}</b></li>
			<li>Опубликовано: <b>{news_allow}</b></li>
			<li>На главной: <b>{news_main}</b></li>
			<li>На модерации: <b>{news_moder}</b></li>
		</ul>
		<ul class="stats__list">
			<li><h2>Пользователи:</h2></li>
			<li>Общее кол-во: <b>{user_num}</b></li>
			<li>Из них забанено: <b>{user_banned}</b></li>
		</ul>
		<ul class="stats__list">
			<li><h2>Комментарии:</h2></li>
			<li>Общее кол-во: <b>{comm_num}</b></li>
			<li><a href="/?do=lastcomments">Посмотреть последние</a></li>
		</ul>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label class="form__label">Список лучших пользователей</label>
		</div>
		<div class="form__content">
			<div class="table-responsive"><table class="dle-table">{topusers}</table></div>
		</div>
	</div>
</div>