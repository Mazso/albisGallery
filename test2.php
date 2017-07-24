<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JSON2</title>
</head>

<body>

<script>
    // http://stackoverflow.com/questions/31019354/how-to-parse-json-with-multiple-rows-results
    //stackoverflow.com/questions/8412098/how-to-loop-through-json-with-multiple-objects
    https://coderwall.com/p/_kakfa/javascript-iterate-through-object-keys-and-values
 var data =   {
"images": [
{
  "path":"/image/bild1",
  "caption":"1",
 
},
{
  "path":"/image/bild2",
  "caption":"2",
 
},
{
  "path":"/image/bild3",
  "caption":"drei",
 
}
]}
    // console.log(data.Row[0].ID1);
    </script>            
            <script>
var result = data.images,
    imgCount = result.length;
console.log(imgCount);
for (var i = 0; i < imgCount; i++) {
  var object = result[i];
   for (property in object) {
    var caption = object["caption"];
       var path = object["path"];
   
    console.log(caption + '' + path);
       
       
  }
}    
    
    </script>
  
        
       
    </body>
</html>