<div class="form">
	<div class="form__header">
		<h1 class="form__title">Восстановить пароль</h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important" for="lostname">Ваш логин:</label>
		</div>
		<div class="form__content">
			<input type="text" name="lostname" id="lostname" placeholder="Ваш логин или E-Mail" />
		</div>
	</div>
	[sec_code]
	<div class="form__row form__row--protect">
		<div class="form__caption">
			<label class="form__label form__label--important" for="sec_code">Введите код с картинки:</label>
		</div>
		<div class="form__content form__content--sec-code">
			<input class="form__input" type="text" name="sec_code" id="sec_code" placeholder="Впишите код с картинки" maxlength="45" required />
			{code}
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
	<div class="form__row form__row--without-label">
		<button class="form__btn form__btn--primary" name="submit" type="submit">Отправить</button>
	</div>
</div>
	
