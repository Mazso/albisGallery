<!DOCTYPE html>
<head><meta charset="utf-8">
<link rel="stylesheet" href="/client/css/standard.css">
<title>Albis Gallery</title>

</head>

<body>


<section>
	<h1>Albis Gallery</h1>
	
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
		$thisFrame = 0,
		$nextFrame = 0,
		$prevFrame = 0,
		$overlay = $('#albisOverlay'),
		$prev = 0,
		$next = 0,
		$overlayHtml = '<div id="albisOverlay" style="display: block;"><div id="albisWall" style="r:0%"></div></div>',
		$buttonsHtml = '<button id="prev">zurück</button ><button id="next">weiter</button><button id="exit">schließen</button>',
		$piccounterHtml = '<p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p>',
		$picnumber = 0,
		$piccounter = 0,
		$gallaryImg = '',
		$thisPic ='',
		$nextPic ='',
		$prevPic ='',
		$wall = 0;
	
	$thumbs.click(function(event) {
		event.preventDefault();
		$('body').append($overlayHtml);
		$overlay = $('#albisOverlay');
		$wall = $('#albisWall');
		$thisFrame = $thumbs.index(this);
		$overlay.addClass('visible slide').prepend($piccounterHtml, $buttonsHtml);
		$prev = $overlay.find('#prev');
		$next = $overlay.find('#next');
		$piccounter = $('#piccounter');
		$picnumber = $('#picnumber');
		$thumbs.each(function($frameNumber) {
		   var href = $(this).attr('href');
		   var cap = $(this).find('img').attr('title');
		   $wall.append('<figure><img data-src="' + href +  '" alt=""><figcaption>' + cap + '</figcaption></figure>'); 
		});
		
		$thisFrame = $thumbs.index(this);
		$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame);
		$gallaryImg = $('figure img');
		showPic();

		// vorwärts schalten
		$next.click(function () {
		 	showNext();
		});
		
		$prev.click(function () {
		 	showPrev();
		});
		
		$('#exit').click(function() {
		 	exitGallery();
		});
		
		// Verhalten beim letzten Bild
		if ($thisFrame == ($frameNumber - 1) ) {
		 $next.hide();
		}

		// Verhalten beim ersten Bild
		if ($thisFrame == 0 ) {
		$prev.hide();
		}
		
	});

	function showNext(){
		//alert($thisFrame);
//		if($thisFrame < 0 || ($thisFrame + 2) >= $frameNumber){
			//$next.hide();
//			return false;
//		}
//		else {
			//alert($thisFrame+1);
			$thisFrame = $wall.data('frame');
			$nextFrame = $thisFrame+1;
			// verändert die Position des Rahmens, speichert die Bildnummer für das nächste Bild
			$wall.css('left',(-$nextFrame*100)+'%').data('frame', $nextFrame);
			showPic();
			if 	('$prev:hidden') {
				// Blendet zurück-Botton bei Bedarf ein
				$prev.show();
			}
//		}
	}
	
	function showPrev(){
//		if($thisFrame <= 0 || $thisFrame >= $frameNumber){
//			return false;
//		}
//		else {
			// ermittelt voriges Bild
			// alert($wall.data('frame'));
			$thisFrame = $wall.data('frame');
			$prevFrame = $thisFrame-1 ;
			// verändert die Position des Rahmens, speichert die Bildnummer für das vorigen Bild
			$wall.css('left',(-$prevFrame*100)+'%').data("frame", $prevFrame).addClass('zurück: ' + $prevFrame + ' vor: ' + $thisFrame);
			showPic();
			if ('$next:hidden') {
				// Blendet vorwärts-Botton bei Bedarf ein
				$next.show();
			}
		//}
	}

// Bild anzeigen
	function showPic() {
	$thisPic = $gallaryImg.eq($thisFrame);
	$thissrc = $thisPic.data('src');
	$thisPic.attr('src', $thissrc);
		$nextPic = $gallaryImg.eq($thisFrame -1);
		$nextsrc = $nextPic.data('src');
		$nextPic.attr('src', $nextsrc);
		$prevPic = $gallaryImg.eq($thisFrame +1);
		$prevsrc = $prevPic.data('src');
		$prevPic.attr('src', $prevsrc);
		//alert($wall.data('frame'));
		piccount();
		if ($wall.data('frame') == 0 ) {
			$prev.hide();
			// alert('nix davor');
		}
		if (($wall.data('frame') + 1) == $frameNumber) {
						//alert('nix danach');			
			$next.hide();
		}
	}

	function exitGallery(){
		$overlay.remove();
	}
	
	function piccount() {
		$picnumber.empty().prepend($wall.data('frame') + 1);
	}

});	



</script>


</html>