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
$my_array = array("car", "bike", "train", "aeroplane", "me", "aircraft");
$new_array = array_map('strlen', $my_array);
//Show Maximum and Minimum string length using max() function and min() function
echo "The shortest array length is " . min($new_array) . ". The longest array length is " . max($new_array). '.';
?>
</body>
</html>