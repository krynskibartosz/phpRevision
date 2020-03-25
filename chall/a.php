<?php

  $mdp = $_POST['password'];
  print_r($_POST);
  
  echo "<br><br>";

  if($mdp == "jean"){
      echo $_POST['password'];
  }
?>