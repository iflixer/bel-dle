<div class="similar__form">
	[not-logged]
	<div class="row">
		<div class="col-12">
			<div class="form-block">
				<div class="edit__group">
					<input type="text" name="name" id="name" class="wide" required>
					<label for="fullname">Имя</label>
				</div>
				<div class="edit__group">
					<input type="email" name="mail" id="mail" class="wide" required>
					<label for="mail">Email</label>
				</div>
			</div>
		</div>
	</div>
	[/not-logged]
	<div class="similar__area">
		{editor}
	</div>
	
	[image-upload]
	<br><a onclick="ShowCommentsUploader(); return false" class="comimg" href="#">Прикрепить изображения</a><br>
	<div id="hidden-image-uploader" style="display: none">{image-upload}</div>
	[/image-upload]
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
			<label for="answer">Ответьте на вопрос {question}</label>
		</div>
	</div>
	[/question]
	[sec_code]
	<div style="padding-bottom: 40px;">
		<div class="edit__group">
			<div class="c-captcha">
				<input type="text" name="sec_code" id="sec_code" autocomplete="off" style="max-width:200px;" required>
				<label for="seccode">Повторите код</label>{sec_code}
			</div>
		</div>
	</div>
	[/sec_code]
	<div class="similar__form-actions">
		[allow-comments-subscribe]
		<div class="checkbox">
			{comments-subscribe}
		</div>
		[/allow-comments-subscribe]
		<button class="similar__form-publish" type="submit" name="submit" title="Добавить">
			Добавить 
			<svg xmlns="http://www.w3.org/2000/svg" width="17.28" height="11.56" viewbox="0 0 17.28 11.56">
				<path d="M1509.25,1379.25a0.793,0.793,0,0,0-.23-0.49l-3.65-4.88a0.665,0.665,0,0,0-.91,0,0.782,0.782,0,0,0,0,.98l2.96,3.9h-14.76a0.736,0.736,0,0,0,0,1.47h14.76l-2.96,3.9a0.782,0.782,0,0,0,0,.98,0.665,0.665,0,0,0,.91,0l3.65-4.88A2.611,2.611,0,0,0,1509.25,1379.25Z" transform="translate(-1491.97 -1373.72)"/>
			</svg>
		</button>
	</div>
</div>