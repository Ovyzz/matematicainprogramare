<?php
    include ("conexiune.php");
?>

<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
   
    

   <div class="login">
        <h1 class= "titlu">Login</h1>
        <div class="date">
        <form action="log1.php", method="POST">
        
        <table>
            <tr><td><h2 style="color: white;">Nume</h2></td></tr>
            <tr><td><input class="input" type="text", name="user", id="user", value=""></td></tr>
            <tr><td><h2 style="color: white;">Parola</h2></td></tr>
            <tr><td><input class="input" type="password", name="pass", id="pass", value=""></td></tr>
        </table>
        <tr><td><input class="submit" type="submit", name="sub", id="sub", value="Conecteaza-te"></td></tr>
        </form>
        </div>
    <div class="singup">
        <a  class="inscrie" href="singin.php">Inscrie-te</a>
    </div>
   </div>
   </body>
<?php

    mysql_close ();

?>
