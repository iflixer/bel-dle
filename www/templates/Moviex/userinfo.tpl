<div class="col-12">
	<div class="profile">
		<div class="profile__title nopad">
			<h2>Профиль пользователя</h2>
			[not-logged]
			<div class="profile__btns">
				<div class="profile__btn"><a href="javascript:ShowOrHide('options')">Редактировать</a></div>
			</div>
			[/not-logged]
		</div>
		<div class="profile__content">
			<div class="profile__user">
				<h3>{usertitle}</h3>
				<img src="{foto}">
				[online]
				<div class="profile__user--online">
					<h3></h3>
				</div>
				[/online]
				[offline]
				<div class="profile__user--offline">
					<h3></h3>
				</div>
				[/offline]
				<div class="profile__estimate">
					<span>{pm}</span>
					<span>{email}</span>
				</div>
			</div>
			<ul class="profile__list">
				<li><span>Имя:</span> {fullname}</li>
				<li><span>Город:</span> {land}</li>
				<li><span>Публикаций:</span> {news-num}</li>
				<li><span>Комментариев:</span> {comm-num}</li>
			</ul>
			<ul class="profile__list">
				<li><span>Регистрация:</span> {registration}</li>
				<li><span>Заходил(а):</span> {lastdate}</li>
				[news-num]
				<li>{news}[rss], RSS [/rss]</li>
				[/news-num]
				[comm-num]
				<li>{comments}</li>
				[/comm-num]
			</ul>
			<div class="profile__about">
				<span>
					О себе 
					<p>{info}</p>
				</span>
				[signature]<span>
					Подпись 
					<p>{signature}</p>
				</span>[/signature]
			</div>
		</div>
		<br><br>
		[not-logged]
		<div id="options" style="display:none;">
			<div class="profile__title">
				<h2>Редактировать профиль</h2>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<input type="text" maxlength="35" name="fullname" id="fullname" value="{fullname}" class="wide">
					<label for="name">Ваше имя</label>
				</div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<input type="email" maxlength="35" name="email" id="email" value="{editmail}" class="wide">
					<label for="email">Ваш e-mail</label>
				</div>
				<div class="edit__check">{hidemail}</div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<input type="text" maxlength="45" name="land" id="land" value="{land}" class="wide">
					<label for="land">Место проживания</label>
				</div>
			</div>
			<div class="form-block">
				<label for="category" style="color: #aaadb2; margin-bottom: 0;">Часовой пояс</label>
				<div class="edit__group" style="margin-top: 0;">
					{timezones}
				</div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<input type="password" maxlength="45" name="altpass" id="altpass" class="wide">
					<label for="altpass">Старый пароль</label>
				</div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<input type="password" maxlength="45" name="password1" id="password1" class="wide">
					<label for="password1">Новый пароль</label>
				</div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<input type="password" maxlength="45" name="password2" id="password2" class="wide">
					<label for="password2">Повторите новый пароль</label>
				</div>
			</div>
			<div class="form-block">
				<label for="category" style="color: #aaadb2;margin-bottom: 0;">Двухфакторная авторизация</label>
				<div class="edit__group" style="margin-top: 0;">
					{twofactor-auth}
				</div>
			</div>
			<div class="form-block">
				<label for="image" style="color: #aaadb2;margin-bottom: 0;">Аватар</label>
				<div class="edit__group" style="margin-top: 0;">
					<input type="file" id="image" name="image" maxlength="45" class="wide">
				</div>
				<div class="edit__group">
					<input type="text" name="gravatar" id="gravatar" value="{gravatar}" class="wide">
					<label for="image">Использовать Gravatar</label>
				</div>
				<div class="checkbox"><label for="del_foto"><input type="checkbox" name="del_foto" id="del_foto" value="yes" /> Удалить аватар</label></div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<textarea name="info" id="info" rows="8" class="wide" required="">{editinfo}</textarea>
					<label for="info">О себе</label>
				</div>
			</div>
			<div class="form-block">
				<div class="edit__group">
					<textarea name="signature" id="signature" id="info" rows="8" class="wide" required="">{editsignature}</textarea>
					<label for="info">Подпись</label>
				</div>
			</div>
			<div class="form-block">
				<label for="category" style="color: #aaadb2;margin-bottom: 0;">Список игнорируемых пользователей</label>
				{ignore-list}
			</div>
			[group=1,2,3]
			<div class="form-block">
				<div class="edit__group">
					<textarea name="allowed_ip" id="allowed_ip" id="info" rows="8" class="wide" required="">{allowed-ip}</textarea>
					<label for="info">Блокировка по IP</label>
				</div>
			</div>
			[/group]
			<div class="form-block">
				<div class="edit__group">
					<table class="xfields">{xfields}</table>
				</div>
			</div>
			<div class="form-block">
				<div class="edit__check">{news-subscribe}</div>
				<div class="edit__check">{comments-reply-subscribe}</div>
				<div class="edit__check">{unsubscribe}</div>
			</div>
			<div class="lost similar__form-actions">
				<div class="lostbutton">
					<button class="similar__form-publish" name="submit" type="submit">Сохранить</button>
					[delete]Удалить аккаунт[/delete]
					<input name="submit" type="hidden" id="submit" value="submit">
				</div>
			</div>
		</div>
		[/not-logged]
		<br><br>
	</div>
</div>