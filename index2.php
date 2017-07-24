<!doctype html>
<html>
<head><title>Galerie</title></head>
    <link href="client/css/standard.css" rel="stylesheet">
    <style>
    /*
        #imageslider {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 3000;
            display: block;
            width: 100%;
            height: 100%;
            background: blue;
            overflow: hidden;
            
         
        }
        
        #slide {
            width:500%;
            display: inline-block;
            margin-left: -200%;
         
            float:left;
            background: yellow;
            vertical-align: baseline;
            
          
        }
        
        figure {
            width: 20%;
          bottom:10%;
            position: relative;
            float:left;
           height: 100%;
            background: red;
        }
       
        
        img {
            height: 80%;
        }*/
       
        
 
 .cl:after,
body {
    clear: both
}

#cont1,
#navtoggle,
figcaption,
figure,
nav,
section {
    display: block
}
#albisWall
{
    white-space: nowrap
}
#albisOver,
{
    overflow: hidden
}
button,
input,
select {
    font-size: 100%;
    margin: 0;
    vertical-align: baseline
}
label {
    font-size: 1rem
}
button,
input {
    line-height: normal
}
[role=button],
button,
input[type=button] {
    border: 0;
    outline: 0!important;
    -webkit-appearance: none!important;
    cursor: pointer;
    -moz-appearance: none!important
}
a:focus,
button:focus {
    outline: transparent solid 0!important
}
.vs {
    position: absolute;
    clip: rect(0 0 0 0);
    margin: -1px;
    border: 0;
    padding: 0;
    width: 1px;
    height: 1px
}
#bread,
#map,
#rundgang {
    width: 100%
}

.ajaxload {
    color: #eceeed;
    background: #850515;
    text-decoration: none;
    border: 1px solid #fff;
    font-size: 1rem;
    border-radius: .4em;
    position: absolute;
    top: 1em;
    right: 1em;
    font-weight: 700
}

#albisNext:before,
#albisPrev:before {
    width: auto;
    font: 5em/3 Arial;
    margin-top: -1.4em
}
#albisOver,
#albisWall {
    width: 100%;
    height: 100%
}
#albisWall {
    position: absolute;
    top: 0;
    letter-spacing: -4px
}
.albisImg {
    display: inline-block;
    max-width: 85%;
    max-height: 85%;
    border: .3em solid #fff;
    z-index: 1004;
    vertical-align: middle
}
        /*
@media only screen and (min-width: 1100px),
only screen and (-webkit-min-device-pixel-ratio: 1.25)and (min-width: 800px),
only screen and (min-resolution: 120dpi)and (min-width: 800px),
only screen and (-webkit-min-device-pixel-ratio: 1.5)and (min-width: 700px),
only screen and (min-resolution: 144dpi)and (min-width: 700px),
only screen and (-webkit-min-device-pixel-ratio: 2)and (min-width: 700px),
only screen and (min-resolution: 144dpi)and (min-width: 700px),
{
    #albisWall {
        -webkit-transition: left 1.5s ease;
        -moz-transition: left 1.5s ease;
        transition: left 1.5s ease;
        will-change: left
    }
}
@media only screen and (min-width: 1400px),
only screen and (-webkit-min-device-pixel-ratio: 1.25)and (min-width: 1100px),
only screen and (min-resolution: 120dpi)and (min-width: 1100px),
only screen and (-webkit-min-device-pixel-ratio: 1.5)and (min-width: 900px),
only screen and (min-resolution: 144dpi)and (min-width: 900px),
only screen and (-webkit-min-device-pixel-ratio: 2)and (min-width: 700px),
only screen and (min-resolution: 144dpi)and (min-width: 700px),
{
    .albisImg {
        max-width: 80%;
        max-height: 80%
    }
}
@media only screen and (min-width: 1500px),
only screen and (-webkit-min-device-pixel-ratio: 1.25)and (min-width: 1200px),
only screen and (min-resolution: 120dpi)and (min-width: 1200px),
only screen and (-webkit-min-device-pixel-ratio: 1.5)and (min-width: 1000px),
only screen and (min-resolution: 144dpi)and (min-width: 1000px),
only screen and (-webkit-min-device-pixel-ratio: 2)and (min-width: 700px),
only screen and (min-resolution: 144dpi)and (min-width: 700px),
{
    .albisImg {
        max-width: 70%;
        max-height: 70%
    }
}
@media only screen and (min-width: 1700px),
only screen and (-webkit-min-device-pixel-ratio: 1.25)and (min-width: 1300px),
only screen and (min-resolution: 120dpi)and (min-width: 1300px),
only screen and (-webkit-min-device-pixel-ratio: 1.5)and (min-width: 1100px),
only screen and (min-resolution: 144dpi)and (min-width: 1100px),
only screen and (-webkit-min-device-pixel-ratio: 2)and (min-width: 800px),
only screen and (min-resolution: 144dpi)and (min-width: 800px),
{
    .albisImg {
        max-width: 60%;
        max-height: 60%
    }
}
@media only screen and (min-width: 2000px),
only screen and (-webkit-min-device-pixel-ratio: 1.25)and (min-width: 1600px),
only screen and (min-resolution: 120dpi)and (min-width: 1600px),
only screen and (-webkit-min-device-pixel-ratio: 1.5)and (min-width: 1300px),
only screen and (min-resolution: 144dpi)and (min-width: 1300px),
only screen and (-webkit-min-device-pixel-ratio: 2)and (min-width: 1000px),
only screen and (min-resolution: 144dpi)and (min-width: 1000px),
{
    .albisImg {
        max-width: 50%;
        max-height: 50%
    }
}
@media only screen and (-webkit-min-device-pixel-ratio: 1.5)and (min-width: 1600px),
only screen and (min-resolution: 144dpi)and (min-width: 1600px),
only screen and (-webkit-min-device-pixel-ratio: 2)and (min-width: 1200px),
only screen and (min-resolution: 144dpi)and (min-width: 1200px),
{
    .albisImg {
        max-width: 40%;
        max-height: 40%
    }
}*/
#albisThumbs li {
    display: none
}
#albisOver {
    position: fixed;
    display: block;
    top: 0;
    left: 0;
    z-index: 3000;
    background: #222;
    background: rgba(0, 0, 0, .8);
    -webkit-transition: opacity 1s ease;
    -moz-transition: opacity 1s ease;
    transition: opacity 1s ease
}
#albisNext:before,
.albisCap_p,
.albisFig,
.albisFig:before {
    display: inline-block
}
.albisFig {
    line-height: 1px;
    position: relative;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1002;
    text-align: center
}
.albisFig:before {
    content: "";
    margin-right: -1px;
    width: 1px;
    height: 50%
}
.albisCap {
    font-size: 1rem;
    line-height: 1.4;
    position: absolute;
    right: 10%;
    bottom: 5%;
    left: 10%;
    z-index: 1008!important;
    white-space: normal;
    letter-spacing: normal
}
.albisCap_p {
    padding: .1em 1em;
    color: #fff;
    background: #333;
    background: rgba(0, 0, 0, .6)
}
#albisNext,
#albisPrev {
    position: absolute;
    top: 20%;
    bottom: 20%;
    border: 0;
    width: 48%;
    outline: 0!important;
    z-index: 2000;
    background: 0 0;
    opacity: .3;
    transition: opacity 2s ease
}
#albisNext {
    right: 0
}
#albisNext_span,
#albisPrev_span {
    float: left;
    text-indent: -10000px
}
#albisNext:hover,
#albisPrev:hover {
    background: 0 0!important;
    opacity: 1
}
#albisNext:before {
    content: '\2771';
    position: absolute;
    right: 3%;
    color: #fff;
    speak: none
}
#albisPrev:before {
    content: '\2770';
    position: absolute;
    left: 3%;
    color: #fff;
    speak: none
}
#albisCounter,
#albisExit {
    font-size: 1rem;
    position: relative
}
#albisExit {
    top: 1%;
    right: 1%;
    float: right;
    border: none;
    border-radius: .2em;
    outline: 0;
    z-index: 2000;
    background: #fff
}
#albisCounter {
    top: 2%;
    z-index: 2000;
    text-align: center;
    color: #fff
}
        
    
    </style>
    <body>
        
        <button id="loadAlbisGallery">Galerie</button>

        <script id="test" type="application/json">
    {
      "images": [
        {
          "path": "/images/bild01@2.jpg",
          "caption": "eins"
        },
        {
          "path": "/images/bild02@2.jpg",
          "caption": "zwei zwei"
        },
        {
          "path": "/images/bild03@2.jpg",
          "caption": "drei drei drei"
        },
        {
          "path": "/images/bild04@2.jpg",
          "caption": "vier vier vier vier"
        },
        {
          "path": "/images/bild05@2.jpg",
          "caption": "fünf fünf fünf fünf fünf"
        }
      ]
      }
</script>
        <script>
            
            // http://stackoverflow.com/questions/16991341/json-parse-file-path
            // https://codepen.io/KryptoniteDove/post/load-json-file-locally-using-pure-javascript
            // http://jaskokoyn.com/2013/07/24/external-json-file/
        
        //http://stackoverflow.com/questions/19333651/change-attribute-from-data-src-to-src-without-jquery
                        // get child node index javascript
	 function loadAlbisGallery() {
"use strict";
	    var imgString = document.getElementById("test").innerText,
	        // string in JSON-Objekt wandeln    
	        imgJSON = JSON.parse(imgString),
	        result = imgJSON.images,
	        imgCount = result.length;

	    var albisGallery = '<section id="albisOver"><div id="albisWall" style="left: 0%;"></div><p id="albisCounter">Bild <span id="picnumber"></span> von <span id="allpics">5</span></p><button id="albisPrev" class="vs"><span id="albisPrev_span">zurück</span></button><button id="albisNext"><span id="albisNext_span">weiter</span></button><button id="albisExit">schließen</button></section>';

	    document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeend', albisGallery);

	    var slide = document.getElementById("albisOver"),
	        wall = document.getElementById("albisWall"),
	        allpics = document.getElementById("allpics"),
	        picnumber = document.getElementById("picnumber"),
	        slideLength = result.length,
	        nextButton = document.getElementById("albisNext"),
	        prevButton = document.getElementById("albisPrev"),
	        position = 0,
            next;

	    allpics.textContent = slideLength;
	    picnumber.textContent = '1';

	    for (var i = 0; i < slideLength; i++) {
	        var object = result[i],
	            caption = object["caption"],
	            path = object["path"];
	        wall.innerHTML += '<figure class="albisFig"><img class="albisImg" alt="" data-src="' + path + '"><figcaption class="albisCap"><p class="albisCap_p">' + caption + '</p></figcaption></figure>';
	    }

	    var albisImg = document.getElementsByClassName("albisImg"),
	        albisImg0 = albisImg[0],
	        albisImg1 = albisImg[1];
	    if (albisImg0.hasAttribute('data-src')) {
	        albisImg0.setAttribute('src', albisImg0.getAttribute('data-src'));
	        albisImg0.removeAttribute('data-src');
	    }
	    if (albisImg1.hasAttribute('data-src')) {
	        albisImg1.setAttribute('src', albisImg1.getAttribute('data-src'));
	        albisImg1.removeAttribute('data-src');
	    }
	    if (nextButton.parentNode) {
	        nextButton.addEventListener("click", nextSlide, false);
	        prevButton.addEventListener("click", prevSlide, false);
	        prevButton.classList.add("vs");
	    }
         
        albisExit.addEventListener("click", closeGallery, false); 

	    function nextSlide() {
	        position = position + 1;
	        wall.style["left"] = '-' + position + '00%';
	        next = position + 1;
	        picnumber.textContent = next;
	        if (next < slideLength && albisImg[next].hasAttribute('data-src')) {
	            albisImg[next].setAttribute('src', albisImg[next].getAttribute('data-src'));
	            albisImg[next].removeAttribute('data-src');
	        }
	        sliderButtons();
	    }

	    function prevSlide() {
	        picnumber.textContent = position;
	        position = position - 1;
	        wall.style["left"] = '-' + position + '00%';
	        sliderButtons();
	    }

	    function sliderButtons() {
	        if (position + 1 == slideLength) {
	            nextButton.classList.add("vs");
	        } else {
	            nextButton.classList.remove("vs");
	        }
	        if (position == 0) {
	            prevButton.classList.add("vs");
	        } else {
	            prevButton.classList.remove("vs");
	        }
	    }
         
        function closeGallery() {
            slide.parentNode.removeChild(slide);
        }
         
	};
            
            
    document.getElementById("loadAlbisGallery").addEventListener("click", loadAlbisGallery, false);        
        
    </script>
        

        
</body>        
</html>    