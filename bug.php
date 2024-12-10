function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )

// Problem: The foreach loop modifies the array during iteration leading to unexpected skip of elements
// Solution: Use a copy of the array or iterate in reverse order
