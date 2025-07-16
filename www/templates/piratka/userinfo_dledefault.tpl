<div class="form">
	<div class="form__header">
		<h1 class="form__title">Просмотр профиля </h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<div class="usp">
		<div class="usp__columns d-flex jc-flex-start ai-center">
			<div class="usp__left">
				<div class="usp__img img-fit-cover"><img src="{foto}" alt=""/></div>
			</div>
			<div class="usp__middle stretch-free-width">
				<h2 class="usp__name">{usertitle}</h2>
				<div class="usp__group">Группа: {status} [time_limit]&nbsp;В группе до: {time_limit}[/time_limit]</div>
			</div>
			<div class="usp__right">
				<div class="usp__btn">{email}</div>
				[not-group=5]<div class="usp__btn">{pm}</div>[/not-group]
			</div>
		</div>
		<div class="usp__meta d-flex jc-space-between ai-center">
			[online]<div class="usp__status usp__status--online">В сети</div>[/online]
			[offline]<div class="usp__status usp__status--offline">Не в сети</div>[/offline]
			<div class="usp__activity d-flex jc-flex-start stretch-free-width">
				<div>Публикаций<div>{news-num}</div></div>
				<div>Комментариев<div>{comm-num}</div></div>
			</div>	
			[not-logged]<div class="usp__btn"><a href="javascript:ShowOrHide('options')">редактировать</a></div>[/not-logged]
		</div>
		<ul class="usp__list d-flex jc-space-between">
			<li><span>Регистрация:</span> {registration}</li>
			<li><span>Заходил(а):</span> {lastdate}</li>
			[not-group=5]
			[fullname]<li><span>Полное имя:</span> {fullname}</li>[/fullname]
			[land]<li><span>Место жительства:</span> {land}</li>[/land]
			<li><span>О себе:</span> {info}</li>
			[signature]<li><span>Подпись:</span> {signature}</li>[/signature]
			[/not-group]
		</ul>
		<ul class="usp__list d-flex jc-space-between">
			[news-num]<li class="no-label">{news}[rss], RSS [/rss]</li>[/news-num]
			[comm-num]<li class="no-label">{comments}</li>[/comm-num]
		</ul>
	</div>
</div>

<div id="options" style="margin-top: 40px; display: none;">
	<div class="form__header">
		<h2 class="form__title">Редактирование профиля:</h2>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Ваше Имя:</label>
		</div>
		<div class="form__content">
			<input type="text" name="fullname" value="{fullname}" placeholder="Ваше Имя" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Ваш E-Mail:</label>
		</div>
		<div class="form__content">
			<input type="text" name="email" value="{editmail}" placeholder="Ваш E-Mail: {editmail}" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">Подписки</div>
		<div class="form__content form__content--admintag form__content--usertag">
			<div class="checkbox">{hidemail}</div>
			<div class="checkbox"><input type="checkbox" id="subscribe" name="subscribe" value="1" /> 
			<label for="subscribe">Отписаться от подписанных новостей</label></div>
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Место жительства:</label>
		</div>
		<div class="form__content">
			<input type="text" name="land" value="{land}" placeholder="Место жительства" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Список игнорируемых пользователей:</label>
		</div>
		<div class="form__content">{ignore-list}</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Старый пароль:</label>
		</div>
		<div class="form__content">
			<input type="password" name="altpass" placeholder="Старый пароль" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Новый пароль:</label>
		</div>
		<div class="form__content">
			<input type="password" name="password1" placeholder="Новый пароль" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Повторите пароль:</label>
		</div>
		<div class="form__content">
			<input type="password" name="password2" placeholder="Повторите Новый пароль" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label>Блокировка по IP (Ваш IP: {ip}):</label>
		</div>
		<div class="form__content">
			<textarea name="allowed_ip" style="height: 160px" rows="5" class="f_textarea" >{allowed-ip}</textarea>
			<div style="margin-top: 10px">
				<span style="color:red; font-size:12px;">
				* Внимание! Будьте бдительны при изменении данной настройки.
				Доступ к Вашему аккаунту будет доступен только с того IP-адреса или подсети, который Вы укажете.
				Вы можете указать несколько IP адресов, по одному адресу на каждую строчку. 
				Пример: 192.48.25.71 или 129.42.*.*</span>
			</div>
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Аватар:</label>
		</div>
		<div class="form__content">
			<input type="file" name="image" size="28" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Сервис <a href="http://www.gravatar.com/" target="_blank">Gravatar</a>:</label>
		</div>
		<div class="form__content">
			<input type="text" name="gravatar" value="{gravatar}" placeholder="Укажите E-Mail в этом сервисе" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption"></div>
		<div class="form__content checkbox">
			<label for="del_foto">
				<input type="checkbox" name="del_foto" id="del_foto" value="yes" /> 
				Удалить аватар
			</label>
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label>Часовой пояс:</label>
		</div>
		<div class="form__content">{timezones}</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label>О себе:</label>
		</div>
		<div class="form__content">
			<textarea name="info" rows="5" style="height: 80px">{editinfo}</textarea>
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label>Подпись:</label>
		</div>
		<div class="form__content">
			<textarea name="signature" rows="5" style="height: 80px">{editsignature}</textarea>
		</div>
	</div>
	<div class="form__row form__row--without-label">
		<div class="form__content"><table class="form__table">{xfields}</table></div>
	</div>
	<div class="form__row form__row--without-label">
		<div class="form__content form__content--admintag form__content--usertag">
			<div class="checkbox">{twofactor-auth}</div>
			<div class="checkbox">{news-subscribe}</div>
			<div class="checkbox">{comments-reply-subscribe}</div>
			<div class="checkbox">{unsubscribe}</div>
		</div>
	</div>
	<div class="form__row form__row--without-label">
		<button class="form__btn form__btn--primary" name="submit" type="submit">Отправить</button>
		<input name="submit" type="hidden" id="submit" value="submit" />
	</div>
</div>