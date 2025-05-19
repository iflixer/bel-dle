<div class="row">
	<div class="col-12">
		<div class="content__title">
			<h1>Новые фильмы и сериалы онлайн</h1>
		</div>
		<div class="content__navigation">
			<div class="content__mobile-tabs" id="content__mobile-tabs">
				<div class="content__mobile-tabs-btn dropdown-toggle" role="button" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<input type="button" value="Фильмы">
					<span></span>
				</div>
				<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Фильмы</a></li>
						<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Сериалы</a></li>
						<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Мультфильмы</a></li>
                        <li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Аниме</a></li>
					</ul>
				</div>
			</div>
			<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
				<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Фильмы</a></li>
				<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Сериалы</a></li>
				<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Мультфильмы</a></li>
                <li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Аниме</a></li>
			</ul>
			[sort]
			<div class="content__sort">
				<a class="content__sort-btn dropdown-toggle" href="#" role="button" id="sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16"><path d="M286.835,740.541a0.746,0.746,0,0,1-.713.771h-14.41a0.745,0.745,0,0,1-.712-0.771V739.77a0.745,0.745,0,0,1,.712-0.771h14.41a0.746,0.746,0,0,1,.713.771v0.771Zm-3.3,6.167a0.742,0.742,0,0,1-.706.771H271.706a0.742,0.742,0,0,1-.706-0.771v-0.771a0.742,0.742,0,0,1,.706-0.771h11.121a0.742,0.742,0,0,1,.706.771v0.771Zm-4.438,6.167a0.758,0.758,0,0,1-.74.77h-6.616a0.758,0.758,0,0,1-.739-0.77V752.1a0.758,0.758,0,0,1,.739-0.771h6.616a0.758,0.758,0,0,1,.74.771v0.771Zm-0.37,2.312,0,0,16.18-4.717-0.9-.942a0.311,0.311,0,0,0-.452,0l-1.975,2.056V739.333a0.327,0.327,0,0,0-.319-0.334h-1.28a0.328,0.328,0,0,0-.32.334v12.251l-1.974-2.057a0.312,0.312,0,0,0-.452,0l-0.9.943a0.345,0.345,0,0,0,0,.471l3.612,3.765a0.932,0.932,0,0,0,1.357,0l3.612-3.765A0.343,0.343,0,0,0,294.9,750.47Z" transform="translate(-271 -739)"/></svg></a>
				<div class="content__sort-menu dropdown-menu" aria-labelledby="sort">
					{sort}
				</div>
			</div>
			[/sort]
		</div>
	</div>
</div>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
		<div class="row row--grid" >
			{content}
		</div>	
	</div>
	<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
		<div class="row row--grid">
			{custom category="1-10" template="shortstory" order="date" limit="48" from="0"}
		</div>	
	</div>
	<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
		<div class="row row--grid">
			{custom category="1-10" template="shortstory" order="date" limit="48" from="0"}
		</div>	
	</div>
    <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
		<div class="row row--grid">
			{custom category="1-10" template="shortstory" order="date" limit="48" from="0"}
		</div>	
	</div>
</div>