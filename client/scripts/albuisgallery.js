jQuery.fn.albisGallery = function() {
			
		var $thumbs = $('div.albisThumbs').find('a'),
			$frameNumber = $thumbs.length,
			$nextsrc = 0,
			$prevsrc = 0,
			$overlayHtml = ['<div id="albisOver"><p id="albisCounter">Bild <span id="picnumber"></span> von <span id="allpics">' + $frameNumber + '</span></p><button id="albisPrev"><span id="albisPrev_span">zurück</span></button ><button id="albisNext"><span id="albisNext_span">weiter</span></button><button id="albisExit">schließen</button><div id="albisWall"></div></div>'].join();
		//$thumbs.click(function(event) {
		//	event.preventDefault();
		$('body').append($overlayHtml);
		var	$overlay = $('#albisOver'),
			$wall = $('#albisWall'),
			$albisFigure = '',
			$thisFrame = 0;
		$thumbs.each(function($frameNumber) {
		   	$href = $(this).attr('href');
		 	$cap = $(this).attr('title');
		    $albisFigure += '<figure class="albisFig"><img class="albisImg" data-src="' + $href + '" alt=""><figcaption class="albisCap"><p class="albisCap_p">' + $cap + '</p></figcaption></figure>';
		});
		$wall.html($albisFigure);
			//$thisFrame = $thumbs.index(this);
		$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame);
		var $prev = $('#albisPrev'),
			$next = $('#albisNext'),
			$picnumber = $('#picnumber'),
			$gallaryImg = $wall.find('img');
		showPic();
		$next.on( "click", showNext);
		$prev.on( "click", showPrev);
		
		$('#albisExit').on( "click", exitGallery);
	
		function showNext(){
			$thisFrame = $wall.data('frame')+1;
			if($thisFrame === $frameNumber){
				return false;
			}
			else {
				$wall.css('left',(-$thisFrame*100)+'%').data('frame', $thisFrame);
				showPic();
				if 	('$prev:hidden') {
					$prev.show();
				}
			}
		}
		
		function showPrev(){
			$thisFrame = $wall.data('frame')-1;
			//$prevFrame =  $thisFrame;
			if($thisFrame < 0){
				return false;
			}
			else {
				$wall.css('left',(-$thisFrame*100)+'%').data("frame", $thisFrame);
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
			$('#ajaxcontainer').remove();
		}
		
		function piccount() {
			$picnumber.empty().prepend($wall.data('frame') + 1);
		}
	
	};	

//}( jQuery ));

function ajaxload(){
	$('body').append('<span id="ajaxcontainer"></span>');
	$('#ajaxcontainer').load('galerie', { ajaxid: $(this).data('ajaxid') }, function thumbsload(){
		$('div.albisThumbs').albisGallery();
	});
}

$('#ajaxload').on( "click", ajaxload); 
