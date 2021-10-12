<?php 

$old_array = array(1, 4, 7, 9);
$new_array = ['Hey', 'Dan', 'How', 'Are', 'You'];

echo $old_array[0] . '<br><br>';
echo $new_array[1];

// Function using for printing
print_r($old_array);
print_r($new_array);

// The display for he print is odd:
/*
  Array
  (
    [0] => Hey
    [1] => Dan
    [2] => How
    [3] => Are
    [4] => You
  )

  This is for new_array
*/
?>