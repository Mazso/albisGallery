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
<li><a href="/images/bild08.jpg"><img title="BILD acht" src="/images/thumb09.jpg"></a></li>
<li><a href="/images/bild09.jpg"><img title="BILD neun" src="/images/thumb09.jpg"></a></li>

</ul>


</div>
	
	
</section>
</body>
<script src="/client/scripts/jquery.min.js"></script>

<script>

$(document).ready (function () {


	var $thumbs = $('#albisThumbs a');
	
	$('body').append('<div id="albisOverlay" style="display: block;"><div id="albisWall" style="left:-0%"></div><button id="prev">zurück</button ><button id="next">weiter</button><button id="exit">schließen</button></div>');
	
	var $frame = $('#albisWall figure'),
		$frameNumber = $thumbs.length,
		$lastFrame = $frameNumber - 1,
		$thisFrame = 0,
		$nextFrame = 0,
		$prevFrame = 0,
		$overlay = $('#albisOverlay'),
		$prev = $overlay.find('#prev'),
		$next = $overlay.find('#next'),
		$exit = $overlay.find('#exit'),
		$piccountercode = '<p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p>',
		$picnumber = 0,
		$piccounter = 0,
		$wall = $('#albisWall');
	
	$thumbs.click(function(event) {
		event.preventDefault();
		$overlay.addClass('visible');
		$thisFrame = $thumbs.index(this);
		jQuery.fn.reverse = [].reverse; // kehrt Ausgebe der Schleife um
		$thumbs.reverse().each(function(index) {
		    //$(this).addClass('item-' + index);
		   var href = $(this).attr('href');
		   var cap = $(this).find('img').attr('title');
		   $wall.prepend('<figure><img data-src="' + href +  '"><figcaption>' + cap + '</figcaption></figure>');  
		});
		/*
		$thumbs.promise().done(function() {
		    $imgsrc = $thisFrame.data('src');
		    alert($thisFrame);
		    $thisFrame.attr('src', $imgsrc);
		  });
		
		$imgsrc = $thisFrame.data('src');
		alert("asdasd");
		$thisFrame.attr('src', $imgsrc);
		*/
		$('figure img').click(function () {
			$imgsrc = $(this).data('src');
			if ($imgsrc != 0 ) {
				$(this).attr('src', $imgsrc);
			}
		});		
	
		
	});
	
		

});	



</script>


</html>