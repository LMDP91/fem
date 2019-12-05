<section id="hero" class="tbg1">
	<div id="layerslider-container-fw">
	  <div id="layerslider" style="width: 100%; height: 425px; margin: 0px auto; ">
	  {foreach from=$lstSlider item=item key=key}
		<div class="ls-layer" style="slidedirection: right; slideoutdirection : top; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;">
			<img src="{$WEB_ROOT}/sistema/images/slider/{$item.ruta}?{$rand}" class="ls-bg" alt="">
			   <h1 class="ls-s3" style="position: absolute; top:60px; left: 60px; color:#622181; font-weight:300;  slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600;">
			   </h1>
	  </div>
	  {/foreach}
	  </div>
	</div>
</section>