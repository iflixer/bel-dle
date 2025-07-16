<div class="comment-item js-comm">
	[available=lastcomments]<div class="comment-item__title">{news_title}</div>[/available]
	<div class="comment-item__header d-flex ai-center [commentsgroup=1]comment-item__header--admin[/commentsgroup]">
		<div class="comment-item__img img-fit-cover js-comm-avatar"><img src="{foto}" alt="{login}"></div>
		<div class="comment-item__meta flex-grow-1">
			<div class="comment-item__author ws-nowrap js-comm-author">[not-group=5]{author}[/not-group][group=5]{login}[/group]</div>
			<div class="comment-item__date ws-nowrap">{date}</div>
		</div>
		[rating-type-4]<div class="comment-item__rating ws-nowrap">
			[rating-plus]<span class="fal fa-plus-circle"></span> {likes}[/rating-plus]
			[rating-minus]<span class="fal fa-minus-circle"></span> {dislikes}[/rating-minus]
		</div>[/rating-type-4]
	</div>
	<div class="comment-item__main full-text clearfix">{comment}</div>
	[not-available=lastcomments]<div class="comment-item__footer d-flex ai-center">
		<div class="comment-item__reply">[reply]Ответить<span class="fal fa-angle-down"></span>[/reply]</div>
		<div class="comment-item__reply">[fast]<span class="fal fa-redo-alt"></span>Цитировать[/fast]</div>
		[group=1]<ul class="comment-item__controls flex-grow-1 ws-nowrap">
			<li>{ip}</li>
			<li>[com-edit]Редактировать[/com-edit]</li>
			<li>[com-del]Удалить[/com-del]</li>
			<li class="checkbox">{mass-action}</li>
		</ul>[/group]
	</div>[/not-available]
</div>


