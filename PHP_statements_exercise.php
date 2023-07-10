<?php
echo "1. Using IF...ELSE statement, write a code that check if given string is more than 5 characters.";
echo "<br>";
echo "Word 1=class";
echo "<br>";
echo "Word 2=Kodego";
echo "<br>";
echo "Word 3=top";
echo "<br>";
echo "<br>";
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

if (strlen($word1) > 5) {
    echo "The string '$word1' is more than 5 characters long.";
} else {
    echo "The string '$word1' is not more than 5 characters long.";
}
echo "<br>";
if (strlen($word2) > 5) {
    echo "The string '$word2' is more than 5 characters long.";
} else {
    echo "The string '$word2' is not more than 5 characters long.";
}
echo "<br>";
if (strlen($word3) > 5) {
    echo "The string '$word3' is more than 5 characters long.";
} else {
    echo "The string '$word3' is not more than 5 characters long.";
}
echo "<br>";
echo "<br>";
echo "<hr>";

echo "2. There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item.";
echo "<br>";
echo "quantity1 = 70";
echo "<br>";
echo "quantity2 = 100";
echo "<br>";
echo "price1 = 35";
echo "<br>";
echo "price2 = 30";
echo "<br>";
echo "<br>";
$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$totalCost1 = $quantity1 * $price1;
$totalCost2 = $quantity2 * $price2;

if ($totalCost1 < $totalCost2) {
    echo "Deal 1 is the best option with a total cost of $" . $totalCost1;
} elseif ($totalCost2 < $totalCost1) {
    echo "Deal 2 is the best option with a total cost of $" . $totalCost2;
} else {
    echo "Both deals have the same total cost of $" . $totalCost1;
}
echo "<br>";
echo "<br>";
echo "<hr>";

echo "3. Using SWITCH CASE statement, write a code that determine the number of days in a given month. Return invalid if the operator is invalid.";
echo "<br>";
echo "monthName = 'March'";
echo "<br>";
echo "<br>";
$monthName = 'March';

switch ($monthName) {
    case 'January':
    case 'March':
    case 'May':
    case 'July':
    case 'August':
    case 'October':
    case 'December':
        $days = 31;
        break;
    case 'April':
    case 'June':
    case 'September':
    case 'November':
        $days = 30;
        break;
    case 'February':
        $days = 28;
        break;
    default:
        $days = 'invalid';
        break;
}

echo "The month of $monthName has $days days.";

echo "<br>";
echo "<br>";
echo "<hr>";

echo "4. Write a program to loop over the given JSON data. Display the values via loops or recursion.";
echo "<br>";
echo "students = '[
    {name : John Garg, age  : 15, school : Ahlcon Public school},<br>
    {name : Smith Soy, age  : 16, school : St. Marie school},<br>
    {name : Charle Rena, age  : 16, school : St. Columba school}]'<br>";

$students = '[
    {"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
    {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
    {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}
]';
echo "<br>";
$data = json_decode($students, true);

foreach ($data as $student) {
    echo "Name: " . $student['name'] . "\n";
    echo "<br>";
    echo "Age: " . $student['age'] . "\n";
    echo "<br>";
    echo "School: " . $student['school'] . "\n";
    echo "<br>";
    echo "<br>";
    echo "\n";
}

echo "<hr>";
echo "5. Write a division table program using the for loop.";
echo "<br>";
echo "<br>";
$maxNumber = 10;

echo "<table style='border-collapse: collapse;'>";
echo "<tr><th></th>";
for ($column = 1; $column <= $maxNumber; $column++) {
    echo "<th>$column</th>";
}
echo "</tr>";

for ($row = 1; $row <= $maxNumber; $row++) {
    echo "<tr>";
    echo "<th>$row</th>";
    for ($col = 1; $col <= $maxNumber; $col++) {
        $quotient = $row / $col;
        echo "<td style='border: 1px solid black; padding: 5px;'>$quotient</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
