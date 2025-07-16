<div class="form article">
	<div class="form__header">
		<h1 class="form__title">[registration]Регистрация[/registration][validation]Обновление профиля[/validation]</h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<div class="text message-info">		
		[registration]
			<b>Здравствуйте, уважаемый посетитель нашего сайта!</b><br />
			Регистрация на нашем сайте позволит Вам быть его полноценным участником.
			Вы сможете добавлять новости на сайт, оставлять свои комментарии, просматривать скрытый текст и многое другое.
			В случае возникновения проблем с регистрацией, обратитесь к <a href="/index.php?do=feedback">администратору</a> сайта.
		[/registration]
		[validation]
			<b>Уважаемый посетитель,</b><br />
			Ваш аккаунт был зарегистрирован на нашем сайте,
			однако информация о Вас является неполной, поэтому заполните дополнительные поля в Вашем профиле.
		[/validation]
	</div>
	[registration]	
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important" for="name">Логин:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="name" id="name" required />
			<input class="form__btn form__btn--find-related" title="Проверить доступность логина для регистрации" onclick="CheckLogin(); return false;" type="button" value="Проверить имя" />
			<div id='result-registration'></div>
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important" for="password1">Пароль:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="password" name="password1" id="password1" required />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important" for="password2">Повторите пароль:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="password" name="password2" id="password2" required />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important" for="email">Ваш E-Mail:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="email" id="email" required />
		</div>
	</div>	
	[question]
	<div class="form__row form__row--protect">
		<div class="form__caption">
			<label class="form__label form__label--important" for="question_answer">{question}</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="question_answer" id="question_answer" placeholder="Впишите ответ на вопрос" required />
		</div>
	</div>
	[/question]
	[sec_code]
	<div class="form__row form__row--protect">
		<div class="form__caption">
			<label class="form__label form__label--important" for="sec_code">Введите код с картинки:</label>
		</div>
		<div class="form__content form__content--sec-code">
			<input class="form__input" type="text" name="sec_code" id="sec_code" placeholder="Впишите код с картинки" maxlength="45" required />
			{reg_code}
		</div>
	</div>
	[/sec_code]
	[recaptcha]
	<div class="form__row form__row--protect">
		<div class="form__caption">
			<label class="form__label form__label--important" for="">Защита от спама</label>
		</div>
		<div class="form__content form__content--sec-code">
			{recaptcha}
		</div>
	</div>
	[/recaptcha]
	[/registration]
	[validation]
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label" for="fullname">Ваше Имя:</label>
		</div>
		<div class="form__content">
			<input type="text" id="fullname" name="fullname" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label" for="land">Место жительства:</label>
		</div>
		<div class="form__content">
			<input type="text" id="land" name="land" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label" for="image">Фото:</label>
		</div>
		<div class="form__content">
			<input type="file" id="image" name="image" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label class="form__label">О себе:</label>
		</div>
		<div class="form__content">
			<textarea class="form__textarea" id="info" name="info" rows="8" /></textarea>
		</div>
	</div>
	<div class="form__row form__row--without-label">
		<div class="form__content"><table class="form__table">{xfields}</table></div>
	</div>
	[/validation]
	<div class="form__row form__row--without-label">
		<button class="form__btn form__btn--primary" name="submit" type="submit">Отправить</button>
	</div>
</div>