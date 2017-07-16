<?php
$arr = array();
for($i=0;$i<100000;$i++){
    $arr[$i] = rand(1,100000);
}
//print_r($arr);
$arr = array_flip(array_flip($arr));
print('<hr/>'.count($arr));