# PHP Foreach Loop Modification During Iteration

This repository demonstrates a common error in PHP when modifying an array while iterating over it using a `foreach` loop.  The issue arises because modifying the array during iteration can cause elements to be skipped or processed incorrectly.

The file `bug.php` shows the erroneous code. `bugSolution.php` demonstrates the correct way to handle this situation by iterating in reverse order or using a copy of the array.

This example is particularly helpful for beginners learning about the pitfalls of modifying arrays within loops.