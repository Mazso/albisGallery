<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JSON</title>
</head>

<body>
    <dl itemscope itemtype="http://schema.org/Event"><dt class="t-termin "><span itemprop="name">Harzpokal Königshütte</span> </dt>
        <dd itemprop="location" itemscope itemtype="http://schema.org/Place">
            <meta itemprop="name" content="Harzer KC Königshütte e.V."> <span data-test="POST" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

<meta itemprop="postalCode" content="39128" ><meta itemprop="addressLocality" content="Magdeburg" ><meta itemprop="streetAddress" content="Juliusstraße 43" ></span></dd>
        <dd class="t-datum">
            <meta itemprop="startDate" content="2017-08-26">Sa., 26.08.
            <button class="t-toggle" aria-controls="t-461" aria-expanded="false">Details</button>
        </dd>
        <dd class="t-detail" itemprop="description" id="t-461" role="region" aria-hidden="true">
            <p>Kanuslalom auf der Wildwasserstrecke Kalte Bode.</p>
        </dd>
    </dl>
    
    
        <dl itemscope itemtype="http://schema.org/Event"><dt class="t-termin "><span itemprop="name">Harzpokal Königshütte</span> </dt>
        <dd itemprop="location" itemscope itemtype="http://schema.org/Place">
            <meta itemprop="name" content="Harzer KC Königshütte e.V."> <span data-test="POST" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

<meta itemprop="postalCode" content="39128" ><meta itemprop="addressLocality" content="Magdeburg" ><meta itemprop="streetAddress" content="Juliusstraße 43" ></span></dd>
        <dd class="t-datum">
            <meta itemprop="startDate" content="2017-08-26">Sa., 26.08.
            <button class="t-toggle" aria-controls="t-461" aria-expanded="false">Details</button>
        </dd>
        <dd class="t-detail" itemprop="description" id="t-461" role="region" aria-hidden="true">
            <p>Kanuslalom auf der Wildwasserstrecke Kalte Bode.</p>
        </dd>
    </dl>
    
    
    
    
    
    <script>
        
    (function() {
        var ttoggle = document.getElementsByClassName("t-toggle"),
            ttogglelength = ttoggle.length,
            details;
        function openDetails() { 
            this.innerHTML = "schließen";
            this.setAttribute("aria-expanded", "true");
            details = this.parentNode.parentNode.children[3];
            details.setAttribute("arian-hidden", "false");
            details.classList.add("show");
            this.addEventListener("click", closeDetails, false);
        }

        function closeDetails() { 
            this.innerHTML = "Details";
            this.setAttribute("aria-expanded", "false");
            details = this.parentNode.parentNode.children[3];
            details.setAttribute("arian-hidden", "true");
            details.classList.remove("show");
            this.removeEventListener("click", closeDetails);
            this.addEventListener("click", openDetails, false);
        }     
        
        if (ttogglelength >= 1) {
            for(var i = 0; i < ttogglelength; i++) {
                ttoggle[i].addEventListener("click", openDetails, false);
            }    
        }
    })();
    
    (function() {    
        var thumbs = document.getElementsByClassName("thumbload"),
            thumbslength = thumbs.length;
        if (thumbslength >= 1) {
            for(var i = 0; i < thumbslength; i++) {
                thumbs[i].setAttribute('srcset',thumbs[i].getAttribute('data-srcset'));
                thumbs[i].setAttribute('src',thumbs[i].getAttribute('data-src'));
            }
        }
    })();
    </script>
    
    
</body>

</html>