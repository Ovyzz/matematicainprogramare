
<?php
    include ("conexiune.php");
?>

<head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
<link rel="stylesheet" href="indexcss2.css">
</head>
 <body>
 <nav >

<ul>
    <li><a href="index.php" style="gradient-borde" >Acasa</a></li>
    <li><a href="2110_character/despre.html"style="gradient-borde" >Despre</a></li>
    
    <li><a href="calculator.php" style="gradient-borde">Calculator</a></li>
    <li><a href="contact.html" style="gradient-borde">Contact</a></li> 
    <li><a href="login1.php" style="gradient-borde">Delogare</a></li>           
</ul>
</nav>
</div>
<?php
session_start();

$id = $_SESSION['id'];
$select = "SELECT  pseudo FROM user WHERE id_user = $id";
$rez = mysql_query($select);
$reztot = mysql_fetch_array($rez); 
$nume = $reztot[0];
echo "<h1 style='color: white; text-align:center; margin-top:290px;font-size: 55px;'>Bine ai venit $reztot[0] !</h1>"


?>
<div class="redirect">
    <a href="contact.html">Contacteaza-ne</a>
</div>


</body>