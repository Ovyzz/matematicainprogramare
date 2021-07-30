<?php

include ("conexiune.php");

?>

<head>
<link rel="stylesheet" href="stil2.css">
<link rel="stylesheet" href="stil3.css">
</head>

<body>
<div class="login-box">
  <h2>Login</h2>
  <form action="log1.php" , method="POST">
    <div class="user-box">
      <input type="text" name="user" required="", id="user">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="pass" required="" id="pass" >
      
      
      <label>Password</label>
    </div>
      
    <input class="input" type="submit", name="sub", id="sub", value="Conecteaza-te" size="1"> 
      
    
  </form>
    <form action="singin1.php">
  <input class="input" type="submit", name="sub1", id="sub1", value="Inscite-te" size="5"> 
  </form>
</div>

<?php

mysql_close();

?>

</body>