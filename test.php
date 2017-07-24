<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JSON</title>
</head>

<body>
    
    /*http://jsonformatter.org/*/
    
    
    <script>
        
        
        // http://stackoverflow.com/questions/15268594/iterate-through-nested-json-object-array
        
(function() {

  var xxxmyJSONObject = 
    {
    "images":
        {
            "1": 
            [
                {"path" : "/images/bild01@2.jpg",
                "caption": "bild1"}
            ],

            "2": 
            [
                {"path" : "/images/bild02@2.jpg",
                "caption": "bild2"}
            ],
            "3": 
            [
                {"path" : "/images/bild03@2.jpg",
                "caption": "bild3"}
            ]
        }
        
    };
 
var myJSONObject = {"images":{"1": [{"path" : "/images/bild01@2.jpg","caption": "bild1"}],"2": [{"path" : "/images/bild02@2.jpg","caption": "bild2"}],"3": [{"path" : "/images/bild03@2.jpg","caption": "bild3"}],"4": [{"path" : "/images/bild04@2.jpg","caption": "bild4"}]}};
	
// http://stackoverflow.com/questions/35987043/counting-records-in-json-array-using-javascript-and-postman


var test = JSON.parse('{"images": [{"path" : "/images/bild01@2.jpg","caption": "bild1"},{"path" : "/images/bild02@2.jpg","caption": "bild2"},{"path" : "/images/bild03@2.jpg","caption": "bild3"}]}');

    

console.log(myJSONObject.images.length); // 2
  
 var imageData;
  var imageArray;
  var imageIndex;

  for (imageData in myJSONObject.images) {
      imageArray = myJSONObject.images[imageData];
  
      //console.log(Object.keys(myJSONObject).length);
      for (imageIndex = 0; imageIndex < imageArray.length; ++imageIndex) {
          display(imageArray[imageIndex].path);
          display(imageArray[imageIndex].caption);
      }
  }

  function display(msg) {
    var p = document.createElement('p');
    p.innerHTML = String(msg);
    document.body.appendChild(p);
  }

})();
        
        </script>
    </body>
</html>