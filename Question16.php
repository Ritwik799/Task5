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
$n = array("Jharkhand"=>"Ranchi", "Maharashtra"=>"Munbai", "Gujrat"=>"Ahmedabad", "Karnataka"=>"Bangalore", "West Bengal"=>"Kolkata");
$max_key = max(array_keys($n));
echo $max_key. "\n";
?>
    
</body>
</html>