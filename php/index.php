<?php

/*
 * Create a function that takes an integer as an argument/parameter
 * No loop or conditional statements
 * Returns "Even" for even numbers or "Odd" for odd numbers.
 */
function evenOrOdd(int $num): string
{
    return ["Even", "Odd"][$num % 2];
}

echo evenOrOdd(4); // Output: Even
echo "\n";
echo evenOrOdd(7); // Output: Odd

/*
 * Create a function that takes an integer as an argument/parameter
 */


?>