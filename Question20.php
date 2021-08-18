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
// to sort an array according to another  array acting as a priority list
function list_cmp($a, $b){
    global $order;
    foreach($order as $key => $value){
        if($a == $value){
            return 0;
            break;
        }
        if($b == $value){
            return 1;
            break;
        }
    }
}
$order[0] = 1;
$order[1] = 3;
$order[2] = 4;
$order[3] = 2;

$array[0] = 2;
$array[1] = 1;
$array[2] = 3;
$array[3] = 4;
$array[4] = 2;
$array[5] = 1;
$array[6] = 2;

usort($array, "list_cmp");

print_r($array);

?>
</body>
</html>