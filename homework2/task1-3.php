<?php
//--------------------- Задание 1 --------------------------//
//Определить сложность следующих алгоритмов:

echo 'Определить сложность следующих алгоритмов:' . '<br>';
echo 'Поиск элемента массива с известным индексом  - O(1)' . '<br>';
echo 'Дублирование одномерного массива через foreach - O(n)' . '<br>';
echo 'Рекурсивная функция нахождения факториала числа  - O(log2n) логарифм n по основанию 2' . '<br>';


echo '<hr>';
//--------------------- Задание 2 --------------------------//
// Определить сложность следующих алгоритмов. Сколько произойдет итераций?
$n = 100;
$array= [];
for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j < $n; $j *= 2) {
        $array[$i][$j]= true;
    }
}
// 50 итераций по i на 7 итераций по j => 100*7=700 итераций

echo '50 итераций по i на 7 итераций по j => 700 итераций. О(700)' . '<br>';

$n = 100;
$array = [];
for ($i = 0; $i < $n; $i += 2) {
    for ($j = $i; $j < $n; $j++) {
        $array[$i][$j]= true;
    }
}


echo 'По чётным i c плюс одна итерация по i[0] 50 штук. По каждой j  из начальных 100 на 2 меньше предыдущего
=> 2550 итераций. O(2550)' . '<br>';

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





