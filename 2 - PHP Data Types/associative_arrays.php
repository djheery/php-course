<?php
// An associative Array is like an object in JS/ Dictionary in Python
$associative_array = [
  'Name'=>'Daniel',
  'Age'=>27,
  'Job'=>'Who Knows'
];
print_r($associative_array);
print_r($associative_array[0]); // does not exist as you need to reference the key
print_r($associative_array['Name']); // will produce Daniel
?>