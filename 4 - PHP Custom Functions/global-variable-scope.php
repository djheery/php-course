<?php
  //  Global Scope
  $x = 10;
  function localScope() {
    $x = 20;
    return $x;
  };

  $local_x = localScope();
  print_r('Global x = ' . $x);
  print_r('Local x = ' . $x);
?>