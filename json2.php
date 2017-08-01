<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JSON</title>
       <link href="client/css/standard.css" rel="stylesheet">
    <style>

       
        
 
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

#albisGalleryStart {
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
    max-width: 90%;
    max-height: 75%;
    border: .3em solid #fff;
    z-index: 1004;
    vertical-align: middle
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
    
        
    #albisWall {
    -webkit-transition: transform 1200ms ease-in-out;
    transition: transform 1200ms ease-in-out;
    
}


        
    
    </style>
</head>
<body>
    <figure id="hingucker"><div id="hingucker_div" class="ratio3_2"><img id="hingucker_img" alt="" src="/images/bild01@2.jpg" width="500"></div><figcaption id="figcap">Ubuntu</figcaption></figure>
    
<script id="albisImgList" type="application/json">
      {
      "images": [
        {
          "src": "/images/bild01@2.jpg",
          "srcset": "/images/bild01@1.jpg 400w, /images/bild01@2.jpg 800w",
          "caption": "ein"
        },
        {
          "src": "/images/bild04@2.jpg",
          "srcset": "/images/300x200.png 300w, /images/450x300.png 450w, /images/600x400.png 600w, /images/900x600.png 900w, /images/1200x800.png 1200w,/images/1800x1200.png 1800w, /images/2400x1600.png 2400w",
          "caption": "zwei"
        },
        {
          "src": "/images/bild03@2.jpg",
          "srcset": "/images/bild03@1.jpg 400w, /images/bild03@2.jpg 800w",
          "caption": "drei"
        },
        {
          "src": "/images/bild04@2.jpg",
          "srcset": "/images/bild04@1.jpg 400w, /images/bild04@2.jpg 800w",
          "caption": "vier"
        },
        {
          "src": "/images/bild05@2.jpg",
          "srcset": "/images/bild05@1.jpg 400w, /images/bild05@2.jpg 800w",
          "caption": "fünf"
        }
      ]
      }
</script>
    
    
<script>


function albisGallery() {
    
    "use strict";
    // Finde die figcaption
    var figcap = document.getElementById("figcap");
    // schreibe einen Button dran
    figcap.innerHTML += '<button id="albisGalleryStart"></button>';
    // finde diesen Button
    var galleryStart = document.getElementById("albisGalleryStart");
       
        
    // JSON-Daten auslesen
    var imgString = document.getElementById("albisImgList").innerText,
    // string in JSON-Objekt wandeln    
    imgJSON = JSON.parse(imgString),
    result = imgJSON.images,
    // Zahl der Bilder    
    imgCount = result.length,
    // Startposition Slider
    position = 0;
    
    
    if (imgCount > 1) {
        // wenn mehr als 1 Bild, beschrifte den Button mit Galerie
        galleryStart.innerText = "Galerie";
    }
    else {
        // andernfalls mit Zoom
        galleryStart.innerText = "Zoom";
    }
       
    
    function startAlbisGallery() {
    
   
    
    // sizes definieren
        var sizes = 'sizes="(max-width: 300px) 300px, (max-width: 450px) 450px, (max-width: 600px) 600px, (max-width: 900px) 900px, (max-width: 1200px) 1200px, (max-width: 1800px) 1800px, 2400px"';
        var sizes = 'sizes="(max-width: 300px) 300px, (max-width: 450px) 450px, (max-width: 600px) 600px, (max-width: 900px) 900px, (max-width: 1200px) 1200px, 1400px"';



        // Overlay konstruieren
        var albisOver = document.createElement('section');
        albisOver.id = "albisOver";
        document.body.appendChild(albisOver);
        //var albisOver = document.getElementById("albisOver");
        // Rahmen der Galerie
        albisOver.innerHTML += '<div id="albisWall" style="transform: translate3d(0, 0, 0);"></div><button id="albisExit">schließen</button>';

        var albisWall = document.getElementById("albisWall");

        // Wenn mehr als ein Bild, BEdienelemente einblenden und NAvigationsfunktionen einbinden
        if (imgCount > 1) {



            // Navigationselelemente definieren
            var albisControls = '<p id="albisCounter">Bild <span id="picnumber"></span> von <span id="allpics">' + imgCount + '</span></p><button id="albisPrev"><span id="albisPrev_span">zurück</span></button><button id="albisNext"><span id="albisNext_span">weiter</span></button>';
            // und einbinden
            albisWall.insertAdjacentHTML('afterend', albisControls);    

            // Navigationselemente auslesen
            var nextButton = document.getElementById("albisNext"),
                prevButton = document.getElementById("albisPrev"),
                picnumber = document.getElementById("picnumber");

            // Navigationsfunktion aufrufen
            nextButton.addEventListener("click", nextSlide, false);
            prevButton.addEventListener("click", prevSlide, false);

            // Zurück-Button ausblenden
            prevButton.style.display ="none";

            // Zähler auf "1" setzen
            picnumber.innerHTML = '1';

            // Tastaturbedienung    
            window.addEventListener("keydown", function(event) {
                if (event.defaultPrevented) {
                    return; // Do nothing if the event was already processed
                }
                switch (event.key) {
                    case "ArrowLeft":
                    // für das 1. Bild abschalten    
                    if (position != 0) {
                        // ansonsten vorheriges Bild aufrufen
                        prevSlide();
                    }
                    break;
                    case "ArrowRight":
                    // für letztes Bild abschalten    
                    if (position != imgCount - 1) {
                        // ansonsten nächstes Bild aufrufen
                        nextSlide();
                    }    
                    break;
                    // Escape schließt die Galerie    
                    case "Escape":
                    albisExit();
                    break;
                    default:
                    return; // Quit when this doesn't handle the key event.
                }
                // Cancel the default action to avoid it being handled twice??
                //event.preventDefault();
            }, true);
        }

        // figure-Element einbinden
        for (var i = 0; i < imgCount; i++) { 
           var object = result[i];
           var caption = object["caption"],
                src = object["src"],
                srcset = object["srcset"];
                albisWall.innerHTML += '<figure class="albisFig"><img class="albisImg" data-srcset="'  + srcset + '" data-src="'  + src + '" ' + sizes + ' alt=""><figcaption class="albisCap"><p class="albisCap_p">' + caption + '</p></figcaption></figure>';
        }    

        // Erstes Bild laden
        var albisImg = document.getElementsByClassName("albisImg");
        albisImg[0].setAttribute('srcset',albisImg[0].getAttribute('data-srcset'));
        albisImg[0].setAttribute('src',albisImg[0].getAttribute('data-src'));

        // zweites Bild laden wenn vorhanden
        if (imgCount > 1) {
            albisImg[1].setAttribute('srcset',albisImg[1].getAttribute('data-srcset'));
            albisImg[1].setAttribute('src',albisImg[1].getAttribute('data-src'));
        }

        // Schließen-Button und -Funktion
        document.getElementById("albisExit").addEventListener("click", albisExit, false);


        // Nächstes Bild       
        function nextSlide() {
            position = position + 1;
            // Bildnummer einfügen
            picnumber.innerHTML = position + 1;
            // Position des Bildes
            albisWall.style["transform"] = 'translate3d(-' + position + '00%, 0, 0)';
            // näcstes Bild laden, sobald Bild 2 eingebeldent wird und bis das vorletzte Bild angezeigt wird
            if (position >= 1 && position <= imgCount - 2) {
                albisImg[position + 1].setAttribute('srcset',albisImg[position + 1].getAttribute('data-srcset'));
                albisImg[position + 1].setAttribute('src',albisImg[position + 1].getAttribute('data-src'));
            }   
            sliderButtons();
        }

        function prevSlide() {
            position = position - 1;
            // Bildnummer einfügen
            picnumber.innerHTML = position +1;
            // Position des Bildes
            albisWall.style["transform"] = 'translate3d(-' + position + '00%, 0, 0)';
            sliderButtons();
        }


        function sliderButtons() {
            // Anzeige der Buttons verbergen, wenn erste bzw. Letzte Position erreicht ist
            if (position == imgCount - 1) {
                nextButton.style.display ="none";
            }
            else  {
                nextButton.style.display ="inline";
            }
            if (position == 0) {
                prevButton.style.display ="none";
            }
            else  {
                prevButton.style.display ="inline";
            }
        }

        function albisExit() {
            albisOver.parentNode.removeChild(albisOver);
        }
    
    }

    galleryStart.addEventListener("click", startAlbisGallery, false);       
}
albisGallery();
    
</script>
    
</body></html>