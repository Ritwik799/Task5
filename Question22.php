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
$arr[0]["transaction_id"] = "2225731470";
$arr[1]["transaction_id"] = "2025731450";
$arr[2]["transaction_id"] = "1025731456";
$arr[3]["transaction_id"] = "1025731460";
$arr[0]["user_name"] = "Ritwik";
$arr[1]["user_name"] = "Ritul";
$arr[2]["user_name"] = "Goutam";
$arr[3]["user_name"] = "Shipra";

//Convert timestamp to date
function convert_timestamp($timestamp){
    $limit = date("U");
    $limiting = $timestamp - $limit;
    return date ("Ymd", mktime(0,0,$limiting));
}

// Comparison function
function cmp($a,$b){
    $l = convert_timestamp($a["transaction_id"]);
    $k = convert_timestamp($b["transaction_id"]);
    if($k == $l){
        return strcmp($a["user_name"] , $b["user_name"]);
    }
    else{
        return strcmp($k,$l);

    }
}

//Sort array
usort($arr, "cmp");


//print sorted info
foreach($arr as $key => $value){
    echo "\$arr[$key] : ";
    echo $value["transaction_id"];
    echo "user_name : ";
    echo $value["user_name"];
    echo "<br>";

}
?>
</body>
</html>