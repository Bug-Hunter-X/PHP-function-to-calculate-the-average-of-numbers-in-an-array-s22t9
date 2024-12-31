# PHP Average Calculator

This PHP function calculates the average of numbers in an array.  It's designed to be robust and handle empty input arrays gracefully.

## Functionality

The `calculate_average` function takes an array of numbers as input and returns their average as a float. If the input array is empty, it returns 0.0.

## Usage

Simply include the `bug.php` file in your project and call the `calculate_average` function with your array of numbers.

## Example

```php
include 'bug.php';

$numbers = [10, 20, 30, 40];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: 25
```

## Error Handling

The function explicitly checks for empty arrays to avoid division by zero errors.  This makes the function more reliable.
