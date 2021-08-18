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
$a1 = array(array(56,69), array(21,35));
$a2 = array("rentz4u", "com");
function merge_arrays_by_index($x, $y){
    $temp = array();
     $temp[] = $x;
      if(is_scalar($y)){
        $temp[] = $y;

    }
    else{
        foreach($y as $k => $v){
            $temp[] = $v;
        }
    }
    return $temp;

}
echo "<pre>" ;
print_r(array_map('merge_arrays_by_index', $a2 , $a1));
?>
    
</body>
</html>