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
function columns($arr){
    $n = $arr;
    if (count($n) == 0)
    return array();
    elseif(count($n) == 1)
    return array_chunk($n[0],1);
    array_unshift($arr,NULL);
    $transpose = call_user_func_array('array_map',$arr);
    return array_map('array_filter',$transpose);
}

function bead_sort($arr){
    foreach($arr as $e)
    $poles[] = array_fill(0,$e,1);
    return array_map('count', columns(columns($poles)));

} 
echo "Original Array : ";
print_r(array(5,3,1,3,8,7,4,1,1,3));
echo "<br>";
echo " After Bead sort : ";
print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));
?>
</body>
</html>