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
		$overlayHtml = '<div id="albisOverlay" style="display: block;"><div id="albisWall" style="left:0%"></div></div>',
		$buttonsHtml = '<button id="prev">zurück</button ><button id="next">weiter</button><button id="exit">schließen</button>',
		$piccounterHtml = '<p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p>',
		$picnumber = 0,
		$piccounter = 0,
		$wall = 0;
	
	$thumbs.click(function(event) {
		event.preventDefault();
		$('body').append($overlayHtml);
		$overlay = $('#albisOverlay');
		$wall = $('#albisWall');
		$thisFrame = $thumbs.index(this);
		$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame);
		$overlay.addClass('visible slide').prepend($piccounterHtml, $buttonsHtml);
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
		
		$prev.click(function () {
		 	showPrev();
		});
		
		$exit.click(function() {
		 	exitGallery();
		});
		
	});
	
	
	
	function showNext(){
		//alert($thisFrame);
		if($thisFrame < 0 || ($thisFrame + 2) >= $frameNumber){
			//$next.hide();
			return false;
		}
		else {
			//alert($thisFrame+1);
			$thisFrame = $wall.data('frame');
			$nextFrame = $thisFrame+1;
			// verändert die Position des Rahmens, speichert die Bildnummer für das nächste Bild
			$wall.css('left',(-$nextFrame*100)+'%').data('frame', $nextFrame);
			showPic();
			// piccount();
			
			if 	('$prev:hidden') {
				// Blendet zurück-Botton bei Bedarf ein
				$prev.show();
			}
		}
	}
	
	
	
	
	function showPrev(){
		if($thisFrame <= 1 || $thisFrame >= $frameNumber){
			return false;
		}
		else {
			// ermittelt voriges Bild
			$thisFrame = $wall.data('frame');
		
			$prevFrame = $thisFrame - 1;
			// verändert die Position des Rahmens, speichert die Bildnummer für das vorigen Bild
			$wall.css('left',(-$prevFrame*100)+'%').data("frame", $prevFrame);
			showPic();
			

			if ('$next:hidden') {
				// Blendet vorwärts-Botton bei Bedarf ein
				$next.show();
			}
			
		}
	}


// Bild anzeigen

	function showPic() {
		$gallaryImg = $('figure img');
		$thisPic = $gallaryImg.eq($thisFrame);
		$thissrc = $thisPic.data('src');
		$thisPic.attr('src', $thissrc);
		$nextPic = $gallaryImg.eq($thisFrame +1);
		$nextsrc = $nextPic.data('src');
		$nextPic.attr('src', $nextsrc);
		$prevPic = $gallaryImg.eq($thisFrame -1);
		$prevsrc = $prevPic.data('src');
		$prevPic.attr('src', $prevsrc);
		if ($wall.data('frame') == 0 ) {
			$prev.hide();
		}
	
		if (($wall.data('frame') + 1) == $frameNumber) {
			
			$next.hide();
		}
		
	}

	
	
	function exitGallery(){
		$overlay.remove();
		$piccounter.remove();
	}
			

});	



</script>


</html>