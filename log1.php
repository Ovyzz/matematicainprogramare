<?php

include ("conexiune.php");
         
    if (isset($_POST['user']) && isset($_POST['pass'])){
      if ($_POST['user'] =='admin' && $_POST['pass'] == 'admin')
      header("location:admin.php");
      else {
            $sel = "SELECT id_user FROM user WHERE nume = '".$_POST['user']."' AND parola = '".$_POST['pass']."'";
            $rez = mysql_query($sel);
           
            if (mysql_num_rows($rez) == 1){
              session_start();
                $rezult = mysql_fetch_row($rez);
                $_SESSION['id'] = $rezult[0];
                header("location:index.php");      
                exit (); 
          }
        
            else 
          echo "<script> type = 'text/javascript'>alert('Ati introdus datele gresit'); document.location.href = 'login1.php';</script>";
        }
      }
     else 
     echo "<script> type = 'text/javascript'>alert('Nu sunteti conectat'); document.location.href = 'login1.php';</script>";
    mysql_close ();

?>