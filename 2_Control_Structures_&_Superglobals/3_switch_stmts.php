<?php
  $girlfriends = ['Fisayo','Mobolaji', 'Adeola', 'Onyinye', 'Kemi'];
  $stmt = " was the first girl I ever knew.";
  switch ($girlfriends[0]){
    case "Mobolaji":
      echo "Mobolaji" . $stmt;
      break;
    case "Adeola":
      echo "Adeola" . $stmt;
      break;
    case "Onyinye":
      echo "Onyinye" . $stmt;
      break;
    case "Kemi":
      echo "Kemi" . $stmt;
      break;
    default:
      echo "I don't have interest in girls";
      break;
  }

  echo "<br/>------------<br/>";
  $his_name = "Lucas";
  $confirm_name = $his_name === 'Lucas' ?  true : false;
  echo $confirm_name;

?>