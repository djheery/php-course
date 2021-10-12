<!-- Switch statements are useful if you want to test 1 condition against multiple values -->
<!-- i.e if you want to check the number of a given variable & do something different based on the number -->
<?php
  $number = 69;
  switch($number){
    case 1: 
      print_r('Hey man');
      break;
    case 2: 
      print_r('Why is it 2?');
      break;
    case 8: 
      print_r('Woah that was a jump');
      break;
    case 69: 
      print_r('Saucy');
      break;

    default: 
      print_r('You are an Arsewipe');
      break;
  }
?>