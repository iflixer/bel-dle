<section class="site-desc order-last">
	[available=main]
	<div class="conttext">
		{include file="engine/modules/custom_seo.php?part=seo-text-hp"}
	</div>
	[/available]

	[available=cat]
	<div class="conttext">
		{include file="engine/modules/custom_seo.php?part=seo-text-category"}
	</div>
	[/available]

	[available=showfull]
	<div class="conttext">
		{include file="engine/modules/custom_seo.php?part=seo-text-post"}
	</div>
	[/available]
</section>
<style>
	.site-desc .conttext h2{margin:20px 0 10px; font-weight: bold;font-size:20px;color:#999}
	.site-desc .conttext p{color:#777}
	.site-desc .conttext ul{padding-left:10px;list-style:disc;margin:10px 5px; color:#777}
	.site-desc .conttext p.spoiler{margin:10px 0 10px; font-weight: bold;cursor: pointer;text-decoration: underline;text-decoration-style: dotted}
	.site-desc .conttext .spoiler-text{display:none;}
	.site-desc .conttext .spoiler-text strong{display:block;width:100%;margin:20px 0 10px; font-weight: bold;}
</style>
