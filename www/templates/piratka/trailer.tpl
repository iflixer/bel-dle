[xfgiven_trailer]
<style>.open-popup-btn{width:max-content;padding:10px 20px;margin-bottom:20px;background-color: #11212e;opacity:0.8;color:white;border:none;cursor:pointer;}
	.open-popup-btn:hover{background-color:#333}
	.popup{display:none;position:fixed;z-index:99999;padding-top:20px;top:0;left:0;width:100vw;height:100vh;background-color:rgba(0,0,0,0.7);justify-content:center;align-items:center;}
	.popup-content{aspect-ratio:16/9;border-radius:8px;position:relative;background:white;padding:25px;width:80vw;height:auto}
	.popup-close{border-radius:20px;height:20px;width:20px !important;position:absolute;top:4px;right:4px;line-height:1;padding:0 !important;letter-spacing:0;background-color:red;color:white;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;}
	.youtube-container{position:relative;padding-bottom:56.25%;height:0;overflow:hidden;width:100%}
	.youtube-container iframe{position:absolute;top:0;left:0;width:100%;height:100%}</style>
<div class="popup" id="popup"><div class="popup-content">
		<button class="popup-close" onclick="closePopup()">X</button>
		<div class="youtube-container">
			<iframe src="[xfvalue_trailer]" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>
<script>
	function stopVideo() {const iframe = document.querySelector('.youtube-container iframe');var iframeSrc = iframe.src;iframe.src = '';iframe.src = iframeSrc;}
	function openPopup(){document.getElementById('popup').style.display='flex'}
	function closePopup(){document.getElementById('popup').style.display='none'; stopVideo();}
</script>
[/xfgiven_trailer]