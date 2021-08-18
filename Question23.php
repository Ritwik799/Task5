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
function column_Sort($unsorted,$column){
    $sorted = $unsorted;
    for($i=0;$i<sizeof($sorted)-1;$i++){
        for($j=0;$j<sizeof($sorted)-1-$i;$j++)
        if($sorted[$j][$column]>$sorted[$j+1][$column]){
            $tmp = $sorted[$j];
            $sorted[$j] = $sorted[$j+1];
            $sorted[$j+1] = $tmp;

        }
    }
    return $sorted;
}
$my_array = array();
$my_array[0]["name"] = "Ritwik";
$my_array[0]["email"] = "ritwik123@gmail.com";
$my_array[0]["phone"] = "7992461547";
$my_array[0]["country"] = "India";

$my_array[1]["name"] = "James";
$my_array[1]["email"] = "james23@yahoo.in";
$my_array[1]["phone"] = "2549634452";
$my_array[1]["country"] = "UK";

$my_array[2]["name"] = "Gayle";
$my_array[2]["email"] = "Chrisgy@gmail.com";
$my_array[2]["phone"] = "9988256478";
$my_array[2]["country"] = "Jamaica";

print_r(column_Sort($my_array,"name"));


?>
    
</body>
</html>