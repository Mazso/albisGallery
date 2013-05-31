<!DOCTYPE html>
<head><meta charset="utf-8">
<link rel="stylesheet" href="/client/css/standard.css">
<title>GALERIE</title>
</head>

<body>


<section>
	<h1>Galerie</h1>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum dolor in lorem mattis ut dignissim sapien pharetra. Aenean viverra, magna nec accumsan luctus, felis dolor ultricies sem, at egestas neque purus et eros. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque purus nec tellus malesuada vulputate. Vestibulum et rutrum velit. </p>

<p class="fnc">FUNKTIONSTEST</p>	
	
</section>
</body>
<script src="/client/scripts/jquery.min.js"></script>

<script>

	jQuery.fn.testfunc = function() {
	  $('p').hide();
	};

	$("body").testfunc();


</script>


</html>