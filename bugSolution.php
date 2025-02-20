```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  // Input validation: Check for non-numeric values
  $numericNumbers = array_filter($numbers, 'is_numeric');
  if (count($numericNumbers) !== count($numbers)) {
    return NAN; // Handle non-numeric input
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculateAverage($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [];
$average = calculateAverage($numbers); 
echo "Average: " . $average; //Output: Average: 0

$numbers = [10, 20, 30, 'a'];
$average = calculateAverage($numbers);
echo "Average: " . $average; //Output: Average: NAN
```