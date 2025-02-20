# PHP: Unexpected Division by Zero in Average Calculation

This repository demonstrates a common error in PHP:  an unexpected division by zero error when calculating the average of an array of numbers. The `calculateAverage` function is initially designed to handle empty arrays, but it lacks proper input validation to check for non-numeric values in the input array. This leads to an error if non-numeric data is present.

The `bug.php` file contains the buggy code, and `bugSolution.php` provides a corrected version with improved input validation to prevent the division by zero error.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`. Observe the warning and unexpected output for the case with a non-numeric value in the array.
3. Run `bugSolution.php` to see the corrected behavior.