<div class="form">
	<div class="form__header">
		<h1 class="form__title">Обратная связь</h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<!-- [*not-logged*] -->
	<!-- <div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important">Ваше имя:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" maxlength="35" name="name" placeholder="Ваше имя" />
		</div>
	</div> -->
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important">Ваш E-Mail:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" maxlength="35" name="email" placeholder="Ваш E-Mail" />
		</div>
	</div>
	<!-- [*/not-logged*] -->

	<input type="hidden" name="recip" value="1"/>

	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important">Тема сообщения:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" maxlength="45" name="subject" placeholder="Тема сообщения" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label class="form__label form__label--important">Ваше письмо:</label>
		</div>
		<div class="form__content">
			<textarea class="form__textarea" name="message" style="height: 160px" ></textarea>
		</div>
	</div>
	[attachments]
	<!-- <div class="form__row">
		<div class="form__caption">
			<label for="">Прикрепить файлы:</label>
		</div>
		<div class="form__content">
			<input name="attachments[]" type="file" multiple>
		</div>
	</div> -->
	[/attachments]
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
		<button class="form__btn form__btn--primary" name="send_btn" type="submit">Отправить</button>
	</div>
</div>
