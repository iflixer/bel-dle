<div class="voter">			
	<div class="voter__title">{title}</div>
	<div class="voter__caption">Принимай участие в опросах и помогай в развитии нашему сайту!</div>
	<div class="voter__list">
		[votelist]<form method="post" name="vote">[/votelist]
		{list}
		[voteresult]<div class="voter__count">Всего проголосовало: {votes}</div>[/voteresult]			
		[votelist]
		<input type="hidden" name="vote_action" value="vote" />
		<input type="hidden" name="vote_id" id="vote_id" value="{vote_id}" />
		<div class="voter__bottom d-flex ai-center">
			<button class="voter__submit" type="submit" onclick="doVote('vote'); return false;" >Голосовать</button>
			<button class="voter__btn icon-at-right" type="button" onclick="doVote('results'); return false;" >Результаты опроса</button>
			
			{*
			<button class="voter__btn icon-at-right" type="submit" onclick="ShowAllVotes(); return false;" >Другие опросы<span class="fal fa-plus"></span></button>
			*}
		</div>
		</form>
		[/votelist]
	</div>
</div>	