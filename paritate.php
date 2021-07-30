<?php
    session_start();
?>

<head>
<link rel="stylesheet" href="cmmdc2.css">
</head>
<body>

    
    <div class="total">
    <div class="list">
    <div class="container">
    <h3 style="color: white; text-align:center"><a href="index.php">Meniu</a></h3>
   
  <div class="link">
 
    <div class="text"><a href="calcul.php">Calculator</a></div>
  </div>
  <div class="link">
    <div class="text"><a href="cmmdc.php">Cmmdc</a></div>
  </div>
  <div class="link">
    <div class="text"><li><a href="fractii.php">Fractii</a></div>
  </div>
  <div class="link">
    <div class="text"><a href="divizibilitate.php">Divizibilitate</a></div>
  </div>
  <div class="link">
    <div class="text"><a href="divizori.php">Divizori</a></div>
  </div>
  <div class="link">
    <div class="text"><a href="coprime.php">Coprime</a></div>
  </div>
  <div class="link">
    <div class="text"><a href="paritate.php">Paritate</a></div>
  </div>
</div>
</div>
<div class="x">
<h1 style="color: white; text-align:center">Introduceti numarul</h1>
    <form action="rezolvparitate.php" method="post">
    <br><br><br><br>
        <div class="numere">
       <input class="inputuri" type="text" name="numar1" , value="" size="9px" placeholder="NUMARUL">
       <br><br>
       
       <input class="inputuri" type="submit" name="sub" , value="Rezolva" >
       </div>  
    </form>
    <br><br><br>
    <h2 style="color: white;text-align:center">Rezultatul este:</h2>
            <?php
            if (isset ($_SESSION['rezultat6'])){
                echo "<h3 style='color: white;text-align:center'>".$_SESSION['rezultat6']."</h3>";
                session_destroy () ;
            }
            ?>

</div>
</div>
</body>


