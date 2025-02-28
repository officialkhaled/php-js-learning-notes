/*
 * Create a function that takes an integer as an argument/parameter
 * No loop or conditional statements
 * Returns "Even" for even numbers or "Odd" for odd numbers.
 */
function evenOrOdd(num) {
    return ["Even", "Odd"][num % 2];
}

console.log(evenOrOdd(4)); // Output: Even
console.log(evenOrOdd(7)); // Output: Odd
