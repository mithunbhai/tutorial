<?php
// recursive function
// to calculate factorial
function calcFactorial($num) {
// define variable to hold product
static $product = 1;
// recurse until $num becomes 1
if ($num > 1) {
$product = $product * $num;
$num--;
calcFactorial($num);
}
return $product;
}
// result: "Factorial of 5 is 120"
echo "Factorial of 5 is " . calcFactorial(5);
?>


