function foo(array $arr): array {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

//Alternative solution using array_filter
function foo2(array $arr): array {
  return array_filter($arr, fn($value) => $value !== 'a');
}

$arr = ['a', 'b', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )
$result2 = foo2($arr);
print_r($result2); // Output: Array ( [1] => b [2] => c )
