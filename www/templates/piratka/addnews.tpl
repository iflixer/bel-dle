<div class="form">
	<div class="form__header">
		<h1 class="form__title">Добавить пост</h1>
		<a href="/" class="form__btn icon-at-left"><span class="far fa-home"></span>На главную</a>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label form__label--important" for="title">Заголовок:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" id="title" name="title" value="{title}" maxlength="150" placeholder="Введите заголовок" required />
			<input class="form__btn form__btn--find-related" title="Найти похожие" onclick="find_relates(); return false;" type="button" value="Найти похожие" />
			<div id="related_news"></div>
		</div>
	</div>
	[urltag]
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label" for="alt_name">URL статьи:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="alt_name" value="{alt-name}" maxlength="150" placeholder="URL новости" />
		</div>
	</div>
	[/urltag]
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label">Категория:</label>
		</div>
		<div class="form__content">
			{category}
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label class="form__label form__label--important">Вводная часть:</label>
		</div>
		<div class="form__content">
			[not-wysywyg]
			{bbcode}
			<textarea class="form__textarea" name="short_story" id="short_story" onfocus="setFieldName(this.name)" rows="10">{short-story}</textarea>
			[/not-wysywyg] 
			{shortarea}
		</div>
	</div>
	<div class="form__row">
		<div class="form__caption form__caption--above">
			<label class="form__label">Подробная часть:</label>
		</div>
		<div class="form__content">
			[not-wysywyg]
			{bbcode}
			<textarea class="form__textarea" name="full_story" id="full_story" onfocus="setFieldName(this.name)" rows="20">{full-story}</textarea>
			[/not-wysywyg] 
			{fullarea}
		</div>
	</div>
	<div class="form__row form__row--without-label">
		<div class="form__content"><table class="form__table">{xfields}</table></div>
	</div>
	<div class="form__row">
		<div class="form__caption">
			<label class="form__label" for="tags">Ключевые слова:</label>
		</div>
		<div class="form__content">
			<input class="form__input" type="text" name="tags" id="tags" value="{tags}" maxlength="150" autocomplete="off" />
		</div>
	</div>
	<div class="form__row form__row--without-label">
		<div class="form__content form__content--admintag">{admintag}</div>
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
		<button class="form__btn form__btn--primary" name="add" type="submit">Отправить</button>
		<button class="form__btn form__btn--secondary" name="nview" onclick="preview()" type="submit">Просмотр</button>
		<a href="#" class="form__btn form__btn--secondary" onclick="$('.form__vote').toggle();return false;">Добавить опрос</a>
	</div>
	<div class="form__vote hidden">
		<div class="form__row">
			<div class="form__caption">
				<label class="form__label">Заголовок:</label>
			</div>
			<div class="form__content">
				<input class="form__input" type="text" name="vote_title" value="{votetitle}" maxlength="150" placeholder="Заголовок опроса" />
			</div>
		</div>
		<div class="form__row">
			<div class="form__caption">
				<label class="form__label">Сам вопрос:</label>
			</div>
			<div class="form__content">
				<input class="form__input" type="text" name="frage" value="{frage}" maxlength="150" placeholder="Сам вопрос" />
			</div>
		</div>
		<div class="form__row">
			<div class="form__caption form__caption--above">
				<label class="form__label">Варианты ответов (Каждая новая строка является новым вариантом ответа):</label>
			</div>
			<div class="form__content">
				<textarea class="form__textarea" name="vote_body" rows="10">{votebody}</textarea>
			</div>
		</div>
		<div class="form__row form__row--without-label">
			<div class="form__content checkbox">
				<label>
					<input type="checkbox" name="allow_m_vote" value="1" {allowmvote}>
					Разрешить выбор нескольких вариантов
				</label>
			</div>
		</div>
	</div>
</div>

