<?php
  session_start();
$numar1 = $_POST['numar1'];
$numar2 = $_POST['numar2'];

    while ($numar1 != 0){
        $rest = $numar2 % $numar1;
        $numar2 = $numar1;
        $numar1 = $rest;
    } 
 
   $_SESSION['rezultat'] = $numar2;
   header("location:cmmdc.php");
   exit();

   

?>