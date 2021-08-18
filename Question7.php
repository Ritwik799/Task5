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
$num = array(1,2,3,4,5);
echo 'Original array : ' . "\n";
foreach($num as $new){
    echo "$new ";

}
$inserted = '@';
array_splice($num,3,0,$inserted); //what is array_splice?
foreach($num as $new){
    echo "$new ";

}
echo "\n";
?>
    
</body>
</html>