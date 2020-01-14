<?php
//function listDir(){
//    return
//}




$arr = scandir('/');
array_shift($arr);
var_dump($arr);
$str = '';
foreach($arr as $key=>$value) {
    $str = $str . '<a href="task1-1.php?id=' . $value . '">' . $value . '</a><br>';
}
echo $str;

