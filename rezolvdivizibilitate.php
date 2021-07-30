<?php
    session_start();
    $numar1 = $_POST['numar1'];
    $numar2 = $_POST['numar2'];
    if ($numar1 % $numar2 == 0 || $numar2 % $numar1 == 0)
    $_SESSION['rezultat4'] = "Da, sunt divizibile intre ele";
    else 
    $_SESSION['rezultat4'] = "Nu, nu sunt divizibile intre ele";
    header("location:divizibilitate.php");
    exit();
?>