<?php
// Здесь я в процессе.
// Обязательно доделаю
// Мне кажется тут нужно слепить функцию, ща попробую

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

//var_dump($_GET);
//$previous = $_GET['id'];
//$dir = '/' . $_GET['id'] . '/';
//$arr = scandir($dir);
//
//foreach($arr as $key=>$value) {
//    echo <<<php
//        <a href="?id=$value">$value</a><br>
//php;
//}

