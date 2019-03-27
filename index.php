<?php
$a="0123";
echo $a."<br/>";
$b=0789;
echo $b."<br/>";
//二维数组排序， $arr是数据，$keys是排序的健值，$order是排序规则，1是升序，0是降序
function array_sort($arr, $keys, $order=0) {
if (!is_array($arr)) {
return false;
}
$keysvalue = array();
foreach($arr as $key => $val) {
$keysvalue[$key] = $val[$keys];
}
if($order == 0){
asort($keysvalue);
}else {
arsort($keysvalue);
}
reset($keysvalue);
foreach($keysvalue as $key => $vals) {
$keysort[$key] = $key;
}
$new_array = array();
foreach($keysort as $key => $val) {
$new_array[$key] = $arr[$val];
}
return $new_array;
}

$arraya=array('a','x','y','d','e','f','g');
array_sort($arraya,0,0);
//var_dump(array_reverse($arraya));
//reset($arraya);
//var_dump($arraya);

//asort($arraya);//按照键值升序
//arsort($arraya);
// foreach($arraya as $key=>$val){
// 	echo "$key = $val<br/>";
// }

// $haha='1';
// var_dump(array_sort($haha,1,0));
echo "<br/>";
 $bool = TRUE;

      echo gettype($bool);

      echo is_string($bool);
?>