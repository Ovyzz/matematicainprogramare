<?php
  session_start();
$numar_cmmmc1 = $_POST['numar_cmmmc1'];
$numar_cmmmc2 = $_POST['numar_cmmmc2'];
$numar3 =$_POST['numar_cmmmc1'];
$numar4 =$_POST['numar_cmmmc2'];

    while ($numar_cmmmc1 != 0){
        $rest = $numar_cmmmc2 % $numar_cmmmc1;
        $numar_cmmmc2 = $numar_cmmmc1;
        $numar_cmmmc1 = $rest;
    } 
    
   $_SESSION['rezultat1'] = ($numar3 * $numar4) / $numar_cmmmc2;
   echo $_SESSION['rezultat1'] ;
   header("location:cmmmc.php");
   exit();

   

?>