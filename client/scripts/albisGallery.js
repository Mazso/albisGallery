(function() {
    
     "use strict";
    // Finde die figcaption
    var figcap = document.getElementById("figcap");
    
    if(figcap){
    
        // schreibe einen Button dran
        figcap.innerHTML += '<button id="albisGalleryStart"></button>';
        // finde diesen Button
        var galleryStart = document.getElementById("albisGalleryStart"),


            // JSON-Daten auslesen
            imgString = document.getElementById("albisImgList").innerText,
            // string in JSON-Objekt wandeln    
            imgJSON = JSON.parse(imgString),
            result = imgJSON.images,
            // Zahl der Bilder    
            imgCount = result.length;

        // Der folgende Abschnitt kann angepasst werden, was unter Umständen Folgen fürs CSS hat

        if (imgCount > 1) {
            // wenn mehr als 1 Bild, beschrifte den Button mit Galerie
            galleryStart.innerText = "Galerie";
            galleryStart.className += "galerie";
        }
        else {
            // andernfalls mit Zoom
            galleryStart.innerText = "Zoom";
            galleryStart.className += "zoom";
        }
    }
       
    
    function albisGallery() {
    
        
    
        // sizes definieren
        var sizes = 'sizes="(max-width: 300px) 300px, (max-width: 450px) 450px, (max-width: 600px) 600px, (max-width: 900px) 900px, (max-width: 1200px) 1200px, 1400px"';

        // DON’T TOUCH!

        // Overlay konstruieren
        var albisOver = document.createElement('section');
        albisOver.id = "albisOver";
        document.body.appendChild(albisOver);
        //var albisOver = document.getElementById("albisOver");
        // Rahmen der Galerie
        albisOver.innerHTML += '<div id="albisWall" style="transform: translate3d(0, 0, 0);"></div><button id="albisExit">schließen</button>';

        var albisWall = document.getElementById("albisWall"),
            // Startposition Slider
            position = 0;

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

    galleryStart.addEventListener("click", albisGallery, false);       
})();