<?php
// Здесь я в процессе.
// Обязательно доделаю
// Мне кажется тут нужно слепить функцию, ща попробую

function listDir($id_dir){
    //формируем путь
    $strDir = '/' . $id_dir;

    // сканировали новый путь
    $arr = scandir($strDir);
    // выводим список
    $str = '';
    foreach($arr as $key=>$value) {
        $str = $str . '<a href="?id=' . $value . '">' . $value . '</a><br>';
    }
    return $str;
}

$id = $_GET['id'];
echo listDir($id);




//array_shift($arr);
//var_dump($arr);
//$str = '';

//echo $str;

//empty($_GET['id']) ? exit : listDir($id);

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

