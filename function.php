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
	width: 180px !important;
	height: 90px !important;
	display: inline-block;
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

<li><a href="EINS"><img title="BILD eins"></a></li>
<li><a href="ZWEI"><img title="BILD zwei"></a></li>
<li><a href="DREI"><img title="BILD drei"></a></li>
<li><a href="VIER"><img title="BILD vier"></a></li>
<li><a href="FÜNF"><img title="BILD fünf"></a></li>
<li><a href="SECHS"><img title="BILD sechs"></a></li>
<li><a href="SIEBEN"><img title="BILD sieben"></a></li>
<li><a href="ACHT"><img title="BILD acht"></a></li>
<li><a href="NEUN"><img title="BILD neun"></a></li>

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
		$prev = $overlay.find('#prev'),
		$next = $overlay.find('#next'),
		$exit = $overlay.find('#exit'),
		$piccountercode = '<p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p>',
		$picnumber = 0,
		$piccounter = 0,
		$wall = $('#albisWall');
	
	$thumbs.click(function(event) {
		// $(this).remove();
		// alert('asd');
		event.preventDefault();
		$thisFrame = $thumbs.index(this);
		alert($thisFrame);
		jQuery.fn.reverse = [].reverse; // kehrt Ausgebe der Schleife um
		$thumbs.reverse().each(function(index) {
		    //$(this).addClass('item-' + index);
		   var href = $(this).attr('href');
		   var cap = $(this).find('img').attr('title');
		   $('body').prepend('<figure><img data-src="' + href +  '"><figcaption>' + cap + '</figcaption></figure>');  
		});
		
	});
	/*
	$('figure img').click(function () {
			$imgsrc = $(this).data('src');
			alert('aS');
			//$(this).attr('href', $imgsrc);
	});		
	*/

});	



</script>


</html>