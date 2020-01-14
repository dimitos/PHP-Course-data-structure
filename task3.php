<h3>Определяем число, соответствующее введенному порядковому номеру в последовательности простых чисел.</h3>
<h3>Например, в ДЗ№1 в задаче №3 вопрос: какое число является 10001-ым простым числом?</h3>
<h3>Введите 10001 или любое другое натуральное число и узнаете! </h3>

<form action="">
    <label>
        <input type="text" name="number" placeholder="введите натуральное число">
    </label>
    <input type="submit">
</form>

<?php
/**
 * проверяет простое ли передаваемое число
 * @param $number
 * @return bool возвращает true или false
 */
function isPrime($number) {
    if ($number==2)
        return true;
    if ($number%2==0)
        return false;
    $i=3;
    $max_factor = (int)sqrt($number);
    while ($i<=$max_factor){
        if ($number%$i == 0)
            return false;
        $i+=2;
    }
    return true;
}

/**
 * Определяет число, соответствующее введенному порядковому номеру в последовательности простых чисел.
 * @param $max_number
 * @return SplStack  простое число
 */
function getPrimes($max_number) {
    $primes = new SplStack();
    for ($i=2; $primes->count() < $max_number; $i++){
        if (isPrime($i))
            $primes->push($i);
    }
    return $primes->top();
}

$numCount = $_GET['number'];

// проверяем на натуральное число
if ($numCount == '' || !ctype_digit($numCount) || $numCount == '0') {
    echo '<h3>Неа! Нужен порядковый номер числовой последовательности - любое натуральное число</h3>';
    exit;
}
$numCount = intval($numCount);
$numberPrime = getPrimes($numCount);

// Порядковому номеру 10001 в последовательности простых чисел соответствует число => 104743
// мой комп считал 1.9 секунды
// если не создавать массив и соответственно без SPL, то скорость вычисления 2,03 секунды

// Порядковому номеру 100001 в последовательности простых чисел соответствует число => 1299721
// мой комп считал 43.87 секунды
// если не создавать массив и соответственно без SPL, то скорость вычисления 47,34 секунды
?>

<h3>Порядковому номеру <?=$numCount?> в последовательности простых чисел соответствует число => <?=$numberPrime?></h3>


