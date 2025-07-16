<div class="form pm-page">
	<div class="form__header">
		<h1 class="form__title">Персональные сообщения</h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<ul class="form__row form__row--without-label pm__links">
		<li>[inbox]Входящие[/inbox]</li>
		<li>[outbox]Отправленные[/outbox]</li>
		<li>[new_pm]Создать новое[/new_pm]</li>
	</ul>
	<div class="pm__status">
		<div>Папки персональных сообщений заполнены на:</div>
		{pm-progress-bar}
		{proc-pm-limit}% от лимита ({pm-limit} сообщений)
	</div>
	[pmlist]
	<div class="form__header"><h2 class="form__title">Список сообщений</h2></div>	 
	<div class="table-responsive">{pmlist}</div>
	[/pmlist]
	[readpm]
	<div class="form__header"><h2 class="form__title">Ваши сообщения</h2></div>	
	<div class="pm-item d-flex">
		<div class="pm-item__img img-fit-cover"><img src="{foto}" alt="{login}"/></div>
		<div class="pm-item__description stretch-free-width">
			<div class="pm-item__meta d-flex jc-flex-start">
				<span>{author}</span><span>{group-name}</span><span>{date}</span>
			</div>
			<div class="pm-item__text clearfix">{text}</div>
			<div class="pm-item__meta d-flex jc-flex-start">
				<span>[reply]Ответить[/reply]</span><span>[ignore]Игнор[/ignore]</span><span>[complaint]Пожаловаться[/complaint]</span><span>[del]Удалить[/del]</span>
			</div>
		</div>
	</div>
	[/readpm]
	[newpm]
	<div class="form__header"><h2 class="form__title">Новое сообщение</h2></div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important">Кому:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="name" placeholder="Кому" value="{author}" required />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label">Тема:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="subj" placeholder="Тема" value="{subj}" />
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label class="form__label form__label--important">Ваше письмо:</label>
		</div>
		<div class="form__content">{editor}</div>
	</div>
	<div class="form__row form__row--without-label">
		<div class="form__content checkbox">
			<label for="outboxcopy">
				<input type="checkbox" id="outboxcopy" name="outboxcopy" value="1" checked /> 
				Сохранить сообщение в папке "Отправленные"
			</label>
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
			{sec_code}
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
		<button class="form__btn form__btn--primary" type="submit" name="add">Отправить</button>
		<button class="form__btn form__btn--secondary" type="button" onclick="dlePMPreview()">Просмотр</button>
	</div>
	[/newpm]
</div>	
	