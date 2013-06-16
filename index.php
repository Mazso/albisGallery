<!DOCTYPE html>
<html lang="de">
<head><meta charset="utf-8">
<link rel="stylesheet" href="/client/css/standard.css?v=2">
<title>Albis Gallery</title>
   <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>


<section>
	<h1>Albis Gallery</h1>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum dolor in lorem mattis ut dignissim sapien pharetra. Aenean viverra, magna nec accumsan luctus, felis dolor ultricies sem, at egestas neque purus et eros. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque purus nec tellus malesuada vulputate. Vestibulum et rutrum velit. </p>

<div class="albisThumbs">
<ul>

<li><a href="/images/bild01.jpg"><img title="BILD eins" src="/images/thumb01.jpg"></a></li>
<li><a href="/images/bild02.jpg"><img title="BILD zwei" src="/images/thumb02.jpg"></a></li>
<li><a href="/images/bild03.jpg"><img title="BILD drei" src="/images/thumb03.jpg"></a></li>
<li><a href="/images/bild04.jpg"><img title="BILD vier" src="/images/thumb04.jpg"></a></li>
<li><a href="/images/bild05.jpg"><img title="BILD fünf" src="/images/thumb05.jpg"></a></li>
<li><a href="/images/bild06.jpg"><img title="BILD sechs" src="/images/thumb06.jpg"></a></li>
<li><a href="/images/bild07.jpg"><img title="BILD sieben" src="/images/thumb07.jpg"></a></li>
<li><a href="/images/bild08.jpg"><img title="BILD acht" src="/images/thumb08.jpg"></a></li>
<li><a href="/images/bild09.jpg"><img title="BILD neun" src="/images/thumb09.jpg"></a></li>

</ul>


</div>
	
	
</section>
</body>
<script src="/client/scripts/jquery.min.js"></script>

<script>

(function($,window,undefined){var pluginName="touchClick";var defaults={className:"active",callback:function(){console.log("touchClick")}};var isTouch=("ontouchend" in window);var touchstartEvent=isTouch?"touchstart."+pluginName:"mousedown."+pluginName;var touchmoveEvent=isTouch?"touchmove."+pluginName:"mousemove."+pluginName;var touchendEvent=isTouch?"touchend."+pluginName:"mouseup."+pluginName;function Plugin(element,className,callback){this.element=element;if(typeof className==="function"){this.options={};this.options.className=defaults.className;this.options.callback=className}else{this.options={className:className||defaults.className,callback:callback||defaults.callback}}this._defaults=defaults;this._name=pluginName;this.init()}Plugin.prototype.init=function(){var self=this;var $element=$(self.element);var className=self.options.className;var callback=self.options.callback;$element.bind(touchstartEvent,function(e){this.touchClickStart=true;$element.addClass(className)}).bind(touchmoveEvent,function(e){if(this.touchClickStart){this.touchClickStart=undefined;$element.removeClass(className)}}).bind(touchendEvent,function(e){var dom=this;if(this.touchClickStart){this.touchClickStart=undefined;$element.removeClass(className);setTimeout(function(){$.proxy(callback,dom)(e)},0)}})};$.fn[pluginName]=function(className,callback){return this.each(function(){if(!$.data(this,"plugin_"+pluginName)){$.data(this,"plugin_"+pluginName,new Plugin(this,className,callback))}})}})(jQuery,window);

	

jQuery.fn.albisGallery = function() {
		
	var $thumbs = $('div.albisThumbs').find('a'),
		$frameNumber = $thumbs.length,
		$thisFrame = 0,
		$nextFrame = 0,
		$prevFrame = 0,
		$nextsrc = 0,
		$prevsrc = 0,
		$overlayHtml = '<div id="albisOverlay"><p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p><button class="prev"><span>zurück</span></button ><button class="next"><span>weiter</span></button><button id="exit">schließen</button><div id="albisWall"></div></div>';
	$thumbs.click(function(event) {
		event.preventDefault();
		$('body').append($overlayHtml);
		$overlay = $('#albisOverlay');
		$wall = $('#albisWall');
		$overlay.addClass('visible slide');
		var $albisFigure = '';
		
		$thumbs.each(function($frameNumber) {
		   $href = $(this).attr('href');
		   $cap = $(this).find('img').attr('title');
		    $albisFigure += '<figure><img data-src="' + $href +  '" alt=""><figcaption><p>' + $cap + '</p></figcaption></figure>';
		});
		$wall.html($albisFigure);
		$thisFrame = $thumbs.index(this);
		$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame);
		$prev = $overlay.find('button.prev');
		$next = $overlay.find('button.next');
		$picnumber = $('#picnumber');
		$gallaryImg = $wall.find('img');
		showPic();
		$next.touchClick(function () {
		 	showNext();
		});
		
		$prev.touchClick(function () {
		 	showPrev();
		});
		
		$('#exit').touchClick(function() {
		 	exitGallery();
		});
	});

	function showNext(){
		$thisFrame = $wall.data('frame');
		$nextFrame = $wall.data('frame')+1;
		
		if($nextFrame == $frameNumber){
			return false;
		}
		else {
			$wall.css('left',(-$nextFrame*100)+'%').data('frame', $nextFrame);
			showPic();
			if 	('$prev:hidden') {
				$prev.show();
			}
		}
	}
	
	function showPrev(){
		$thisFrame = $wall.data('frame');
		$prevFrame =  $thisFrame-1;
		if($thisFrame <= 0){
			return false;
		}
		else {
			$wall.css('left',(-$prevFrame*100)+'%').data("frame", $prevFrame);
			showPic();
			if ('$next:hidden') {
				$next.show();
			}
		}
	}

	function showPic() {
		$thisPic = $gallaryImg.eq($thisFrame);
		$thissrc = $thisPic.data('src');
		$thisPic.attr('src', $thissrc);
		
		$nextPic = $gallaryImg.eq($thisFrame+1);
		$nextsrc = $nextPic.data('src');
		$nextPic.attr('src', $nextsrc);
		
		$nextnextPic = $gallaryImg.eq($thisFrame+2);
		$nextnextsrc = $nextnextPic.data('src');
		$nextnextPic.attr('src', $nextnextsrc);
		
		$prevPic = $gallaryImg.eq($thisFrame-1);
		$prevsrc = $prevPic.data('src');
		$prevPic.attr('src', $prevsrc);
		
		$prevprevPic = $gallaryImg.eq($thisFrame-2);
		$prevprevsrc = $prevprevPic.data('src');
		$prevprevPic.attr('src', $prevprevsrc);
		piccount();
		if ($wall.data('frame') == 0 ) {
			$prev.hide();
		}
		if (($wall.data('frame') + 1) == $frameNumber) {
			$next.hide();
		}
	}

	function exitGallery(){
		$overlay.remove();
	}
	
	function piccount() {
		$picnumber.empty().prepend($wall.data('frame') + 1);
	}

};	

$(window).load(function(){
	$('.albisThumbs').albisGallery();
});


</script>


</html>