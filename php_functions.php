<?php

echo "1. Create a function that check if a character is a vowel or consonant.";
echo "<br>";
echo "<br>";
function checkCharacter($char) {
    $char = strtolower($char);

    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        return 'vowel';
    } elseif (ctype_alpha($char)) {
        return 'consonant';
    } else {
        return 'invalid';
    }
}

$character = 'J';
$result = checkCharacter($character);
echo "The character ''$character'' is a $result.";

echo "<br>";
echo "<br>";
echo "<hr>";

echo "2. Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One.";
echo "<br>";
echo "<br>";
function convertToWord($number) {
    $digitsToWords = [
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
    ];

    $word = '';
    $digits = str_split($number);
    
    foreach ($digits as $digit) {
        if (isset($digitsToWords[$digit])) {
            $word .= $digitsToWords[$digit] . ' ';
        } else {
            $word .= 'Unknown ';
        }
    }

    return trim($word);
}

$number = '10121985';
$word = convertToWord($number);
echo "The number ''$number'' in word form is ''$word''.";
echo "<br>";
echo "<br>";
echo "<hr>";

echo "3. Create a function that determine if a given number is divisible by 3.";
echo "<br>";
echo "<br>";
function isDivXthree($number) {
    if ($number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

$number = 37;
if (isDivXthree($number)) {
    echo "The number $number is divisible by 3.";
} else {
    echo "The number $number is not divisible by 3.";
}

echo "<br>";
echo "<br>";
echo "<hr>";

echo "4. Create a function that delete the recurring elements inside a sorted list of strings.";
echo "<br>";
echo "<br>";
function deleteRecurringElements($list) {
    $result = [];
    $prevElement = null;

    foreach ($list as $element) {
        if ($element !== $prevElement) {
            $result[] = $element;
        }
        $prevElement = $element;
    }

    return $result;
}

$list = ["Joseph", "Joseph", "Moroni", "Moroni", "Lopez", "Azares"];
$uniqueList = deleteRecurringElements($list);
echo "Original List: " . implode(", ", $list) . "\n";
echo "<br>";
echo "Unique List: " . implode(", ", $uniqueList);

echo "<br>";
echo "<br>";
echo "<hr>";

echo "5. Create a function that determine if the given number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself.";
echo "<br>";
echo "<br>";

function Armstrong($number) {
    $originalNumber = $number;
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, 3);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

$number = 370;
if (Armstrong($number)) {
    echo "The number $number is an Armstrong Number.";
} else {
    echo "The number $number is not an Armstrong Number.";
}

?>
