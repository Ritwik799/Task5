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
function array_change_value_case($input, $ucase){
    $case = $ucase;
    $narray = array();
    if(!is_array($input)){
        return $narray;
    }
    foreach($input as $key => $value){
        if(is_array($value)){
            $narray[$key] = array_change_value_case($value,$case);
            continue;
        }
        $narray[$key] = ($case == CASE_UPPER ? STRTOUPPER($value) : strtolower($value));
    }
    return $narray;
}
$Color = array ('A'=>'Red', 'B'=>'Yellow', 'C'=>'Grey');
echo "Actual array : ";
print_r($Color);
echo "<br>";
echo "Values are in lower case : ";
$myColor = array_change_value_case($Color, CASE_LOWER);
print_r($myColor);
echo "<br>";
echo "Values are in upper case : ";
$myColor = array_change_value_case($Color, CASE_UPPER);
print_r($myColor);

?>
    
</body>
</html>