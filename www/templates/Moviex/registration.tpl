<div class="col-12">
	<div class="profile__title">
		<h2>[registration]Регистрация[/registration][validation]Продолжение регистрации[/validation]</h2>
	</div>
</div>
<div class="col-12">
	<div class="page__content">
		[registration]
			Регистрация на нашем сайте позволит Вам быть его полноценным участником.
			Вы сможете добавлять новости на сайт, оставлять свои комментарии, просматривать скрытый текст и многое другое.
			<br>В случае возникновения проблем с регистрацией, обратитесь к <a href="/index.php?do=feedback">администратору</a> сайта.
		[/registration]
		[validation]
			Ваш аккаунт был зарегистрирован на нашем сайте,
			однако информация о Вас является неполной, поэтому ОБЯЗАТЕЛЬНО заполните дополнительные поля в Вашем профиле.<br>
		[/validation]
	</div>
	
	[registration]
	<div class="form-block">
		<div class="edit__group">
			<input type="text" maxlength="35" name="name" id="name" class="wide" required="">
			<label for="name">Логин</label>
			<button class="btn" title="Проверить" onclick="CheckLogin(); return false;">Проверить</button>
		</div>
		<div id='result-registration'></div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<input type="password" maxlength="45" name="password1" id="password1" class="wide" required="">
			<label for="password1">Пароль</label>
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<input type="password" maxlength="45" name="password2" id="password2" class="wide" required="">
			<label for="password2">Повторите пароль</label>
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<input type="email" maxlength="35" name="email" id="email" class="wide" required="">
			<label for="name">Ваш e-mail</label>
		</div>
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
				<label for="seccode">Повторите код:</label>{reg_code}
			</div>
		</div>
	</div>
	[/sec_code]
	[/registration]
	[validation]
	<div class="form-block">
		<div class="edit__group">
			<input type="text" maxlength="45" name="fullname" id="fullname" class="wide">
			<label for="name">Ваше имя</label>
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<input type="text" maxlength="45" name="land" id="land" class="wide">
			<label for="name">Место жительства</label>
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<textarea name="info" id="info" rows="8" class="wide"></textarea>
			<label for="info">О себе</label>
		</div>
	</div>
	<div class="form-block">
		<label for="image" style="color: #aaadb2;">Аватар</label>
		<div class="edit__group">
			<input type="file" id="image" name="image" maxlength="45" class="wide">
		</div>
	</div>
	<div class="form-block">
		<div class="edit__group">
			<table class="xfields">{xfields}</table>
		</div>
	</div>
	[/validation]
</div>
<div class="col-12">
	<div class="lost similar__form-actions">
		<div class="lostbutton">
			<button class="registration__btn" name="submit" type="submit">
				Зарегистрироваться
				<svg xmlns="http://www.w3.org/2000/svg" width="17.28" height="11.56" viewBox="0 0 17.28 11.56">
					<path d="M1509.25,1379.25a0.793,0.793,0,0,0-.23-0.49l-3.65-4.88a0.665,0.665,0,0,0-.91,0,0.782,0.782,0,0,0,0,.98l2.96,3.9h-14.76a0.736,0.736,0,0,0,0,1.47h14.76l-2.96,3.9a0.782,0.782,0,0,0,0,.98,0.665,0.665,0,0,0,.91,0l3.65-4.88A2.611,2.611,0,0,0,1509.25,1379.25Z" transform="translate(-1491.97 -1373.72)"></path>
				</svg>
			</button>
		</div>
	</div>
</div>