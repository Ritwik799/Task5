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
$month_temp = "55, 60, 46, 42, 66, 38, 49, 62, 78, 75, 84, 59, 30, 28, 35, 74, 69, 53, 40, 18, 27, 37, 26, 70, 29, 17, 50, 63, 22, 14";
$temp_array = explode(',', $month_temp);
$total_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp){
    $total_temp += $temp;
}
$avg_high_temp = $total_temp/$temp_array_length;
echo "Average Temperature is : ".$avg_high_temp."";
echo "<br>";
sort($temp_array);
echo "List of five lowest temperatures : ";
for($i=0;$i<5;$i++){
    echo $temp_array[$i].", ";

}
echo "<br>";
echo "List of five highest temperatures : ";
for($i=($temp_array_length-5);$i<($temp_array_length);$i++){
    echo $temp_array[$i].", ";
}
echo "<br>";
echo "Today's temperature is: 28 degree celcius.";
echo "<br>";
echo "Thank You";

?>
    
</body>
</html>