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
function floorDec($number, $precision, $separator){
    $number_part = explode($separator, $number);
    $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);
    if($number_part[0] > 0){
        $number_part[1] = floor($number_part[1]);
    }
    else{
        $number_part[1] = ceil($number_part[1]);
    }
    $ceil_number = array($number_part[0],$number_part[1]);
    return implode($separator,$ceil_number);
}
print_r(floorDec(1.55, 2, "."). "\n");
echo "<br>";
print_r(floorDec(100.25781, 4, "."). "\n");
echo "<br>";
print_r(floorDec(-2.9636, 3, "."). "\n");
echo "<br>";
?>
    
</body>
</html>