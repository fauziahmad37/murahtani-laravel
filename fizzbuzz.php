<?php 

function fizzbuzz()
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz" . PHP_EOL;
        } elseif ($i % 3 == 0) {
            echo "Fizz" . PHP_EOL;
        } elseif ($i % 5 == 0) {
            echo "Buzz" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}

//fizzbuzz();

function diagonalDifference($arr)
{
    $sum1 = 0;
    $sum2 = 0;
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        $sum1 += $arr[$i][$i];
        $sum2 += $arr[$i][$length - $i - 1];
    }
    return abs($sum1 - $sum2);
}

$arr = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
];

echo diagonalDifference($arr);

?>