<?php
// ����� � � ��������. ����������� �������
// ������� ���� ������� ������ ������ � �� ���� ������
// ��� ������� ��� ����� ������� �������, �� ��������

function listDir($id_dir){
    //��������� ����
    $strDir = '/' . $id_dir;

    // ����������� ����� ����
    $arr = scandir($strDir);
    // ������� ������
    $str = '';
    foreach($arr as $key=>$value) {
        $str = $str . '<a href="?id=' . $value . '">' . $value . '</a><br>';
    }
    return $str;
}

$id = $_GET['id'];

echo listDir($id);
var_dump($_GET);






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

