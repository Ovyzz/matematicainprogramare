<?php
session_start();
$numar1 = $_POST['numar1'];
$numar2 = $_POST['numar2'];
$sex = $_POST['sex'];
if ($sex == 1)
    $_SESSION['rezultat3'] = $numar1 + $numar2;
    else if($sex == 2)
    $_SESSION['rezultat3'] = $numar1 * $numar2;
    else if ($sex == 3)
    $_SESSION['rezultat3'] = $numar1 / $numar2;
    else if ($sex == 4)
    $_SESSION['rezultat3'] = $numar1 - $numar2;
    else 
    $_SESSION['rezultat3'] = "Nu ati selectat operatia";
    header("location:calcul.php");
    exit();
?>