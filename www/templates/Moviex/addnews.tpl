<div class="col-12">
	<div class="profile__title">
		<h2>{header-title}</h2>
	</div>
</div>
<div class="col-12">
	<div class="form-block">
		<div class="edit__group">
			<input type="text" maxlength="35" name="title" id="title" value="{title}" class="wide" required="">
			<label for="name">Заголовок</label>
			<button class="btn" title="Найти похожие" onclick="find_relates(); return false;">Найти похожие</button>
			<div id="related_news"></div>
		</div>
	</div>
	[urltag]
	<div class="form-block">
		<div class="edit__group">
			<input type="text" maxlength="35" name="alt_name" id="alt_name" value="{alt-name}" class="wide">
			<label for="name">URL новости</label>
		</div>
	</div>
	[/urltag]
	<div class="form-block">
		<label for="category" style="color: #aaadb2;">Категория</label>
		<div class="edit__group">
			{category}
		</div>
	</div>
	[allow-shortstory]
	<div class="form-block">
		<label for="short_story" style="color: #aaadb2;">Краткое описание</label>
		<div class="edit__group">
			[not-wysywyg]
			<div class="bb-editor">
				{bbcode}
				<textarea name="short_story" id="short_story" onfocus="setFieldName(this.name)" rows="10" class="wide" required>{short-story}</textarea>
			</div>
			[/not-wysywyg]
			{shortarea}
		</div>
	</div>
	[/allow-shortstory]
	[allow-fullstory]
	<div class="form-block">
		<label for="short_story" style="color: #aaadb2;">Полное описание</label>
		<div class="edit__group">
			[not-wysywyg]
			<div class="bb-editor">
				{bbcode}
				<textarea name="full_story" id="full_story" onfocus="setFieldName(this.name)" rows="12" class="wide" >{full-story}</textarea>
			</div>
			[/not-wysywyg]
			{fullarea}
		</div>
	</div>
	[/allow-fullstory]
	<div class="form-block">
		<div class="edit__group">
			<table class="xfields">{xfields}</table>
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<input type="text" maxlength="35" name="tags" id="tags" value="{tags}" class="wide">
			<label for="name">Ключевые слова</label>
		</div>
	</div>
	<div class="form-block">
		<div>{admintag}</div>
	</div>
	[recaptcha]
	<div style="padding-bottom: 40px;">
		<div class="edit__group">
			<div>{recaptcha}</div>
		</div>
	</div>
	[/recaptcha]
	[question]
	<div style="padding-bottom: 40px;">
		<div class="edit__group">
			<input type="text" name="question_answer" id="question_answer" required>
			<label for="answer">Ответьте на вопрос: {question}</label>
		</div>
	</div>
	[/question]
	[sec_code]
	<div style="padding-bottom: 40px;">
		<div class="edit__group">
			<div class="c-captcha">
				<input type="text" name="sec_code" id="sec_code" autocomplete="off" style="max-width:200px;" required>
				<label for="seccode">Повторите код:</label>{sec_code}
			</div>
		</div>
	</div>
	[/sec_code]
</div>
<div class="col-12">
	<div class="lost similar__form-actions">
		<div class="lostbutton">
			<button class="similar__form-publish" type="submit" name="add">
				Отправить
				<svg xmlns="http://www.w3.org/2000/svg" width="17.28" height="11.56" viewBox="0 0 17.28 11.56">
					<path d="M1509.25,1379.25a0.793,0.793,0,0,0-.23-0.49l-3.65-4.88a0.665,0.665,0,0,0-.91,0,0.782,0.782,0,0,0,0,.98l2.96,3.9h-14.76a0.736,0.736,0,0,0,0,1.47h14.76l-2.96,3.9a0.782,0.782,0,0,0,0,.98,0.665,0.665,0,0,0,.91,0l3.65-4.88A2.611,2.611,0,0,0,1509.25,1379.25Z" transform="translate(-1491.97 -1373.72)"></path>
				</svg>
			</button>
			<button class="similar__form-publish" onclick="preview()" type="submit" name="nview">Просмотр</button>
		</div>
	</div>
</div>