<?php
    session_start();
?>

<head>
<link rel="stylesheet" href="cmmdc.css">
</head>
<body>

    <div class="titlu">
     <h2>Calculator</h2>
    </div>
    <div class="total">
    <div class="list">
    <h3 class="titlu1">Meniu</h3>
<li><a href="calcul.php">Calculator</a></li>
<br>
<li><a href="cmmdc.php">Cmmdc</a></li>
<br>
<li><a href="cmmmc.php">Cmmmc</a></li>
<br>
<li><a href="fractii.php">Fractii</a></li>
<br>
<li class="current">
 <a href="divizibilitate.php">Divizibilitate</a></li>
<br>
<li><a href="divizori.php">Divizori</a></li>
<br>
<li><a href="coprime.php">Coprime</a></li>
<br>
<li><a href="paritate.php">Paritate</a></li>
</div>
<div class="x">
<h1 style="color: white; text-align:center">Introduceti numerele</h1>
    <form action="rezolvcmmmc.php" method="post">
    <br><br><br><br>
        <div class="numere">
       <input type="text" name="numar_cmmmc1" , value="" size="9px">
       <br> <br>
       <input type="text" name="numar_cmmmc2" , value="" size="9px">
       <br><br>
       <input class="inputuri" type="submit" name="sub" , value="Rezolva" >
       </div>
       
    
    </form>
    <br><br><br>
    <h2 style="color: white;text-align:center">Rezultatul este:</h2>
            <?php

                if (isset ($_SESSION['rezultat1'])){
                echo "<h3 style='color: white;text-align:center'>".$_SESSION['rezultat1']."</h3>";
                session_destroy () ;
                }
            ?>

</div>
</div>
</body>


