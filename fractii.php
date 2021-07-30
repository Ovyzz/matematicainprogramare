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
<h1 style="color: white; text-align:center">Introduceti numerele</h1>
    <form action="fractii.php" method="get">
    <br><br><br><br>
        <div class="numere">
       <input class="inputuri" type="text" name="numar1" , value="" size="9px" placeholder="NUMARUL 1">
       <br> <br>
       <input class="inputuri" type="text" name="numar2" , value="" size="9px"placeholder="NUMARUL 2">
       <br><br>
       <input class="inputuri" type="submit" name="sub" , value="Rezolva" >
       </div>
       
    
    </form>
    <br><br><br>
    <h2 style="color: white;text-align:center">Rezultatul este:</h2>
            <?php
            if (isset ($_GET['numar1']) && isset($_GET['numar2'])){
                $a= $_GET['numar1'];
                $b = $_GET['numar2'];
                function cdc ( $a ,  $b){
                    while ($b){
                            $rest = $a % $b;
                            $a = $b;
                            $b = $rest;
                    }
                    return $a;
                }
                $c = cdc($a, $b);
                if ($c == 1)
                echo "<h2 style='color: white;text-align:center'>Fractia este ireductibila</h2>";
                else {
                while($a % $c == 0 && $b % $c == 0 && $c != 1){
                    $a = $a / $c;
                    $b = $b/$c;
                    $c=cdc($a,$b);
                    
                }
                
                echo "<h2 style='color: white;text-align:center'>$a/$b</h2>";
            }
        }
            
            ?>

</div>
</div>
</body>


