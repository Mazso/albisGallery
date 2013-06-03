<!DOCTYPE html>
<head><meta charset="utf-8">
<link rel="stylesheet" href="/client/css/standard.css">
<title>GALERIE</title>
<style>

#albisThumbs img {
	width: 90px !important;
	height: 90px !important;
	display: inline-block;
}

figure img {
	
	background: red;
}

.blue img {
	background:  blue !important;
}

</style>
</head>

<body>


<section>
	<h1>Galerie-TEST</h1>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum dolor in lorem mattis ut dignissim sapien pharetra. Aenean viverra, magna nec accumsan luctus, felis dolor ultricies sem, at egestas neque purus et eros. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque purus nec tellus malesuada vulputate. Vestibulum et rutrum velit. </p>

<div id="albisThumbs">
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

$(document).ready (function () {


	var $thumbs = $('#albisThumbs a');
	
	
	
	var $frame = $('#albisWall figure'),
		$frameNumber = $thumbs.length,
		$lastFrame = $frameNumber - 1,
		$thisFrame = 0,
		$nextFrame = 0,
		$prevFrame = 0,
		$overlay = $('#albisOverlay'),
		$prev = 0,
		$next = 0,
		$exit = 0,
		$overlaycode = '<div id="albisOverlay" style="display: block;"><div id="albisWall" style="left:0%"></div></div>',
		$buttonscode = '<button id="prev">zurück</button ><button id="next">weiter</button><button id="exit">schließen</button>',
		$piccountercode = '<p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p>',
		$picnumber = 0,
		$piccounter = 0,
		$wall = 0;
	
	$thumbs.click(function(event) {
		event.preventDefault();
		$('body').append($overlaycode);
		$overlay = $('#albisOverlay');
		$wall = $('#albisWall');
		$thisFrame = $thumbs.index(this);
		$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame).addClass($thisFrame);
		$overlay.addClass('visible slide').prepend($piccountercode).append($buttonscode);
		$prev = $overlay.find('#prev');
		$next = $overlay.find('#next');
		$exit = $('#exit');
		$piccounter = $('#piccounter');
		$picnumber = $('#picnumber');
		$thisFrame = $thumbs.index(this);
		jQuery.fn.reverse = [].reverse; // kehrt Ausgebe der Schleife um
		$thumbs.reverse().each(function($frameNumber) {
		   var href = $(this).attr('href');
		   var cap = $(this).find('img').attr('title');
		   $wall.prepend('<figure><img data-src="' + href +  '" alt=""><figcaption>' + cap + '</figcaption></figure>'); 
		});
		
		// Verhalten beim letzten Bild
		if ($thisFrame == ($lastFrame) ) {
			$next.hide();
		}
		// Verhalten beim ersten Bild
		if ($thisFrame == 0 ) {
			$prev.hide();
		}
		
		showPic();
		
		// vorwärts schalten
		$next.click(function () {
		 	showNext();
		});
		
		$exit.click(function() {
		 	exitGallery();
		});
		
	});
	
	
	// Galerie schließen
	
	// Bild anzeigen
	
	function showPic() {
		$thisPic = $('figure img').eq($thisFrame);
		$imgsrc = $thisPic.data('src');
		$thisPic.attr('src', $imgsrc);
	}
	
	
	function showNext(){
		/*if($thisFrame < 0 || $thisFrame >= $lastFrame){
			return false;
		}
		else {*/
			//alert($thisFrame+1);
			$thisFrame = $wall.data("frame");
			$nextFrame = $thisFrame+1;
			// verändert die Position des Rahmens, speichert die Bildnummer für das nächste Bild
			$wall.css('left',(-$nextFrame*100)+'%').data("frame", $nextFrame);
			//alert($nextFrame);
			// piccount();
		/*	if ($thisFrame == $frameNumber) {
				$next.hide();
			}
			if 	('$prev:hidden') {
				// Blendet zurück-Botton bei Bedarf ein
				$prev.show();
			}
		}*/
	}
	
	
	
	function exitGallery(){
		$overlay.remove();
		$piccounter.remove();
	}
			

});	



</script>


</html>