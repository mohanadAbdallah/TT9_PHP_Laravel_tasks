<?php
//php basics Array and Functions exercise ..
echo '<header style="padding: 12px;background-color: aqua;margin-bottom: 19px;"><h1>HomeWork 2 PHP Arrays & Functions .. </h1></header>';


echo '<h2>#1</h2>';
function evenNumber($numbers): array
{
    $result = array();
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $result[] = $number;
        }
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
foreach ($numbers as $number) {
    echo $number;
}
$even_numbers = evenNumber($numbers);

echo '<pre>';
echo 'The even numbers are ..<br>';

foreach ($even_numbers as $even_number) {
    echo $even_number;
}

echo '<h2>#2</h2>';

function getLongestString($strings, &$index)
{
    $longestString = '';
    $index = -1;

    foreach ($strings as $key => $string) {
        if (strlen($string) > strlen($longestString)) {
            $longestString = $string;
            $index = $key;
        }
    }

    return $longestString;
}

$strings = ["Mohanad", "Abdallah", "Mohammad", "Abu-El-Atta"];
$longestIndex = -1;
$longest = getLongestString($strings, $longestIndex);
echo "Longest string: " . $longest . " that found at index: " . $longestIndex;


//3- write a function that accepts two arrays and return a new array that holds  the value of
//multiplying each item in the first array by the corresponding item in the second array.
echo '<h2>#3</h2>';
function multiplyTwoArrays($array1, $array2): array
{
    $result = [];

    for ($i = 0; $i < count($array1); $i++) {
        $result[] = $array1[$i] * $array2[$i];
    }

    return $result;
}


$array1 = [2, 4, 6];
$array2 = [2, 4, 6];

$multi = multiplyTwoArrays($array1, $array2);
echo '<pre>';
var_dump($multi);
echo '<pre>';

//4- factorial
echo '<h2>#4</h2>';
function findFactorial($number): int
{
    if ($number < 0) {
        echo 'Invalid Input';
    }

    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$number = 7;
$factorial = findFactorial($number);
echo "Factorial of $number is : $factorial <br>";
//5- Write a function to check whether a number is prime or not.
echo '<h2>#5</h2>';

function isPrime($number): bool
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 12;

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}