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
$c = array("India"=>"New Delhi", "Italy"=>"Rome", "Japan"=>"Tokyo", "UK"=>"London", "France"=>"Paris");
foreach($c as $key=>$value){
    echo "<li>The capital of $key is $value.</li>";
}

?>
    
</body>
</html>