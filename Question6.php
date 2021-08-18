<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function strfunction($value , $key){
echo "$key : $value"."<br>";
}
$x = '{"Title" : "Cricket Talks", 
"Author" : "Ritwik Chatterjee",
 "Detail" : {
"Publisher" : "Ritwik Official"
 }
   }';
   $y1 = json_decode($x,true);
   array_walk_recursive($y1,"strfunction");
?>


    
</body>
</html>