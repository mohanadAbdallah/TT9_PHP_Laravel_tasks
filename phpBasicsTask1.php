<?php 
//php basics exercise ..

// 1- Write a PHP program to check whether the first two characters and last two characters of a give string are same.

$string = "My name is Mohanad Abdullah Abu El-Atta My";

if(substr($string, 0, 2) === substr($string, -2, 2)){
    echo "The first and the last character are the same<br/><br/>";
} else{
    echo "The first and the last character are not the same<br/><br/>";
}
// 2- Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)

$string = "Go To school !!";

if (substr($string, 0, 2) === 'Go'){
  echo "$string starts with 'Go'. <br/><br/>";
} else{
    echo "$string does not start with 'Go'.<br/><br/>";
}

// 3- Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.
$number = 21;

if ($number % 3 === 0 || $number % 7 === 0) {
    echo "$number multiple of 3 or a multiple of 7<br/><br/>";
} else {
    echo "$number not multiple of 3 or a multiple of 7<br/><br/>";
}

// 4- Write a PHP program to check the largest number among three given numbers.
$num1 = 15;
$num2 = 27;
$num3 = 32;

$largest = $num1;

    if ($num2 > $largest) {
        $largest = $num2;
    }

    if ($num3 > $largest) {
        $largest = $num3;
    }

    echo "The largest number among $num1, $num2, and $num3 is: $largest <br/><br/>";

// 5- Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal.
function findNearestTo100($num1, $num2) {
    if ($num1 === $num2) {
        return 0;
    }

    $dist1 = abs(100 - $num1);
    $dist2 = abs(100 - $num2);

    if ($dist1 < $dist2) {
        return $num1;
    } else {
        return $num2;
    }
}

// Usage example:
$num1 = 95;
$num2 = 110;
$nearestTo100 = findNearestTo100($num1, $num2);
echo "The number nearest to 100 among $num1 and $num2 is: $nearestTo100 <br/><br/>";

// 6- Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive or return 0 if neither is in that range.

function findLargerInRange($num1, $num2) {
    if ($num1 >= 20 && $num1 <= 30 && $num2 >= 20 && $num2 <= 30) {
        return max($num1, $num2);
    } elseif ($num1 >= 20 && $num1 <= 30) {
        return $num1;
    } elseif ($num2 >= 20 && $num2 <= 30) {
        return $num2;
    } else {
        return 0;
    }
}

// Example usage:
$num1 = 27;
$num2 = 20;
$largerInRange = findLargerInRange($num1, $num2);
echo "The larger value within the range 20-30 is: " . $largerInRange . "<br/><br/>" ;

// 7- Write a PHP program to count the number of occurrences of any digit in a string.

function countDigitOccurrences($string) {
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        if ($char >= '0' && $char <= '9') {
            $count++;
        }
    }

    return $count;
}

$string = "Hello12345";
$occurrences = countDigitOccurrences($string);
echo "Number of digit occurrences in ' " . $string . " ' is : " . $occurrences ."<br/><br/>";


// 8- Write a PHP program to return the sum of digits of an integer number.

function sumOfDigits($number) {
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int) ($number / 10);
    }

    return $sum;
}

$number = 12345;
$sum = sumOfDigits($number);
echo "Sum of digits of $number is: $sum <br/><br/>";

// 9- Write a PHP program to reverse any string. (Don't use "strrev" function.)

$string = "Hello, World!";

    $reversed = '';
  
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= substr($string, $i, 1);
    }
  
    echo "The reverse of ' " . $string . " ' is : ". $reversed;