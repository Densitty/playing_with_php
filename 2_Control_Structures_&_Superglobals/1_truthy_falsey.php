<?php 

  // truthy values
  $truthy_1 = true;
  $truthy_2 = '1';
  $truthy_3 = 1;
  $truthy_4 = ['a'];
  var_dump($truthy_4 == true);
  echo "<br/>--------------<br/>";
  
  $truthy_5 = true;
  var_dump($truthy_2 === $truthy_3);
  echo "<br/>--------------<br/>";
  echo ('1' == 1);
  echo "<br/>--------------<br/>";

  // falsy values are
  $falsy_1 = 0;
  $falsy_2 = [];
  $falsy_3 = false;
  $falsy_4 = "";
  $falsy_5 = null;
  $falsy_6 = "0";
  var_dump("0" == false);






?>