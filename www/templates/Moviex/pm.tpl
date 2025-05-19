<div class="col-12">
<div class="profile__title">
		<h2>Личные сообщения</h2>
	</div>
	<div class="box_in">
		<div class="pm-box">
			<nav id="pm-menu">
				[inbox]<span>Входящие</span>[/inbox]
				[outbox]<span>Отправленные</span>[/outbox]
				[new_pm]<span>Написать новое сообщение</span>[/new_pm]
			</nav>
			<div class="pm_status">
				{pm-progress-bar}
				{proc-pm-limit} % / ({pm-limit} сообщений)
			</div>
		</div>
		[pmlist]
		<div class="pmlist">
			{pmlist}
		</div>
		[/pmlist]
		[newpm]
		<div class="profile__title">
		<h2>Создать сообщение</h2>
	</div>
	
	<div class="form-block">
		<div class="edit__group">
			<input type="text" name="name" value="{author}" id="name" class="wide" required="">
			<label for="name">Имя адресата</label>
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<input type="text" name="subj" value="{subj}" id="subj" class="wide" required="">
			<label for="subj">Тема сообщения</label>
		</div>
	</div>
	<div class="similar__area" class="form-block">
	{editor}
	<div class="edit__check"><input type="checkbox" id="outboxcopy" name="outboxcopy" value="1" /> <label for="outboxcopy">Сохранить сообщение в папке "Отправленные"</label> </div>
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
	[/sec_code]<br>
	<div class="lost similar__form-actions">
		<div class="lostbutton">
			<button class="similar__form-publish" type="submit" name="add">Отправить</button>
			<button class="similar__form-publish" type="button" onclick="dlePMPreview()">Просмотр</button>
		</div>
	</div>
		[/newpm]
	</div>
	[readpm]
	<div class="comment">
	<div class="comment__title">
		<img class="comment__avatar" src="{foto}" alt="{login}">
		<div class="comment__title-wrap">
			<span class="comment__autor">{author}</span>
			<span class="comment__date">{date}</span>
		</div>
	</div>
	<div class="comment__content">
		<div class="comment__message">{text}</div>
		<div class="comment__actions">
			[ignore]<span class="comment__quote">Игнор</span>[/ignore]
			[del]<span class="comment__quote">Удалить</span>[/del]
			[complaint]<span class="comment__quote">Жалоба</span>[/complaint]
			[reply]
			<span class="comment__quote reply-com">Ответить <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewbox="0 0 12 12"><path d="M276.429,3160.96h-5.364v-1.45a0.418,0.418,0,0,0-.684-0.41l-4.1,2.48a0.453,0.453,0,0,0,0,.84l4.1,2.48a0.418,0.418,0,0,0,.684-0.41v-1.44h4.944v6.9a1,1,0,1,0,1.991,0v-7.4A1.582,1.582,0,0,0,276.429,3160.96Z" transform="translate(-266 -3159)"/></svg></span>
			[/reply]
		</div>
	</div>
</div><br>
	[/readpm]
</div><br>