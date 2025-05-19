<div class="col-12">
	<div class="profile__title">
		<h2>Восстановление пароля</h2>
	</div>
</div>
<div class="col-12">
	<div class="form-block">
		<div class="edit__group">
			<input type="text" name="lostname" id="lostname" required="">
			<label for="fullname">Логин или E-mail:</label>
		</div>
	</div>
	[recaptcha]
	<div style="padding-bottom: 40px;">
		<div class="edit__group">
			<div>{recaptcha}</div>
		</div>
	</div>
	[/recaptcha]
	[sec_code]
	<div style="padding-bottom: 40px;">
		<div class="edit__group">
			<div class="c-captcha">
				<input type="text" name="sec_code" id="sec_code" autocomplete="off" style="max-width:200px;" required>
				<label for="seccode">Повторите код:</label>{code}
			</div>
		</div>
	</div>
	[/sec_code]
</div>
<div class="col-12">
	<div class="lost similar__form-actions">
		<div class="lostbutton">
			<button class="similar__form-publish" type="submit" name="submit" title="Add">
				Отправить 
				<svg xmlns="http://www.w3.org/2000/svg" width="17.28" height="11.56" viewBox="0 0 17.28 11.56">
					<path d="M1509.25,1379.25a0.793,0.793,0,0,0-.23-0.49l-3.65-4.88a0.665,0.665,0,0,0-.91,0,0.782,0.782,0,0,0,0,.98l2.96,3.9h-14.76a0.736,0.736,0,0,0,0,1.47h14.76l-2.96,3.9a0.782,0.782,0,0,0,0,.98,0.665,0.665,0,0,0,.91,0l3.65-4.88A2.611,2.611,0,0,0,1509.25,1379.25Z" transform="translate(-1491.97 -1373.72)"></path>
				</svg>
			</button>
		</div>
	</div>
</div>