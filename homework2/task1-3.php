<?php
//--------------------- Задание 1 --------------------------//
//Определить сложность следующих алгоритмов:

echo 'Определить сложность следующих алгоритмов:' . '<br>';
echo 'Поиск элемента массива с известным индексом  - O(1)' . '<br>';
echo 'Дублирование одномерного массива через foreach - O(n)' . '<br>';
echo 'Рекурсивная функция нахождения факториала числа  - O(N)' . '<br>';


echo '<hr>';
//--------------------- Задание 2 --------------------------//
// Определить сложность следующих алгоритмов. Сколько произойдет итераций?
$n = 100;
$array= [];
for ($i = 0; $i < $n; $i++) { //N
    for ($j = 1; $j < $n; $j *= 2) { //бинарное прохождение logN
        $array[$i][$j]= true;
    }
}
//  сложность - вложенность (умножение) N*logN =  O(NLogN)


$n = 100;
$array = [];
for ($i = 0; $i < $n; $i += 2) { //   N/2 = N
    for ($j = $i; $j < $n; $j++) {  // N
        $array[$i][$j]= true;
    }
}
//  сложность O(N*N) = O(N^2)

echo '<hr>';
//--------------------- Задание 3 --------------------------//
// Дан массив из n элементов, начиная с 1. Каждый следующий элемент равен (предыдущий + 1).
// Но в массиве гарантированно 1 число пропущено. Необходимо вывести на экран пропущенное число.

$arr = [1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16];
echo 'Пропущенное число - ' . $number = (count($arr) + 2) *(count($arr) + 1) / 2 - array_sum($arr) . '<br>';

$arr = [1, 2, 4, 5, 6];
echo 'Пропущенное число - ' . $number = (count($arr) + 2) *(count($arr) + 1) / 2 - array_sum($arr) . '<br>';

$arr = [];
echo 'Пропущенное число - ' . $number = (count($arr) + 2) *(count($arr) + 1) / 2 - array_sum($arr) . '<br>';

//--------------------- Задание 3 --------------------------//

// делаем массив с пропущенной цифрой
for ($i = 0; $i < 10001; $i++) {
    $arr1[] = $i + 1;
}
array_splice($arr1, -3, 1);

$start = microtime(true);

//echo 'Пропущенное число - ' . ((count($arr1) + 2) *(count($arr1) + 1) / 2 - array_sum($arr1)) . '<br>';
// 0.00026893615722656

for ($i = 0; $i < count($arr1); $i++) {  // 0.011044979095459
    if ($arr1[$i+1] - $arr1[$i] == 2) {
        echo 'Пропущенное число - ' . ($arr[$i] + 1) . '<br>';
        break;
    }
}

echo  (string) (microtime(true) - $start);





