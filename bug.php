```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: 20

$numbers = [10, 20, 30, 40];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: 25

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: 0
```