<!DOCTYPE html>
<html lang="de">
<head><meta charset="utf-8">
<link rel="stylesheet" href="/client/css/standard.css?v=2">
<title>Albis Gallery</title>
<!--[if lte IE 8]>
   <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
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

	

jQuery.fn.albisGallery = function() {
		
	var $thumbs = $('.albisThumbs a'),
		$frameNumber = $thumbs.length,
		$overlayHtml = '<div id="albisOverlay"><div id="albisWall"></div></div>',
		$buttonsHtml = '<button id="prev"><span>zurück</span></button ><button id="next"><span>weiter</span></button><button id="exit">schließen</button>',
		$piccounterHtml = '<p id="piccounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p>';
	
	$thumbs.click(function(event) {
		event.preventDefault();
		$('body').append($overlayHtml);
		$overlay = $('#albisOverlay');
		$wall = $('#albisWall');
		$overlay.addClass('visible slide').prepend($piccounterHtml, $buttonsHtml);
		$thumbs.each(function($frameNumber) {
		   $href = $(this).attr('href');
		   $cap = $(this).find('img').attr('title');
		   $wall.append('<figure><img data-src="' + $href +  '" alt=""><figcaption><p>' + $cap + '</p></figcaption></figure>'); 
		});
		$thisFrame = $thumbs.index(this);
		$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame);
		$prev = $overlay.find('#prev');
		$next = $overlay.find('#next');
		$piccounter = $('#piccounter');
		$picnumber = $('#picnumber');
		$gallaryImg = $wall.find('img');
		showPic();
		$next.click(function () {
		 	showNext();
		});
		
		$prev.click(function () {
		 	showPrev();
		});
		
		$('#exit').click(function() {
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
		$prevPic = $gallaryImg.eq($thisFrame-1);
		$prevsrc = $prevPic.data('src');
		$prevPic.attr('src', $prevsrc);
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

$('.albisThumbs').albisGallery();



</script>


</html>