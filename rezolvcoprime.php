<?php
  session_start();
$numar1 = $_POST['numar1'];
$numar2 = $_POST['numar2'];

    while ($numar1 != 0){
        $rest = $numar2 % $numar1;
        $numar2 = $numar1;
        $numar1 = $rest;
    } 
    if ($numar2 == 1)
    $_SESSION['rezultat5'] = "Sunt coprime";
    else 
    $_SESSION['rezultat5'] = "Nu sunt coprime";
  
   header("location:coprime.php");
   exit();

   

?>