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
echo "Associative array : Ascending order sort by value";
$array2 = array("Ritwik"=>"24", "Ritul"=>"22", "Goutam"=>"56", "Shipra"=>"47"); 
asort($array2);
foreach($array2 as $x=>$x_value){
    echo "Age of ".$x." is : ".$x_value."";
    echo "<br>";

}

echo "Associative array : Ascending order sort by key";
$array3 = array("Ritwik"=>"24", "Ritul"=>"22", "Goutam"=>"56", "Shipra"=>"47"); 
ksort($array3);
foreach($array3 as $x=>$x_value){
    echo "Age of ".$x." is : ".$x_value."";
    echo "<br>";
}

echo "Associative array : Decending order sorting by value";
$age = array("Ritwik"=>"24", "Ritul"=>"22", "Goutam"=>"56", "Shipra"=>"47");
arsort($age);
foreach($age as $x=>$x_value){
    echo "Age of ".$x." is : ".$x_value."";
    echo "<br>";

}

echo "Associative array : Decending order sorting by key";
$array4 = array("Ritwik"=>"24", "Ritul"=>"22", "Goutam"=>"56", "Shipra"=>"47");
krsort($array4);
foreach($array4 as $x=>$x_value){
    echo "Age of ".$x." is : ".$x_value."";
    echo "<br>";

}

?>
    
</body>
</html>