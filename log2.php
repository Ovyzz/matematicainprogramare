<?php
$conex = include("conexiune.php");
?>
<?php
if (!$conex)
die ("ne reusit sa se conecteze la baza");
    if ($_POST['nume1'] != "" && $_POST['pass1']!= "" && $_POST['email'] != ""  && $_POST['pseudo'] != ""){
         $sel = "SELECT id_user FROM user WHERE nume = '".$_POST['nume1']."'";
         $select = "SELECT id_user FROM user WHERE pseudo = '". $_POST['pseudo']."'";
         $select_email ="SELECT id_user FROM user WHERE email = '". $_POST['email']."'";
         $rez_mail = mysql_query($select_email);
          $rezu = mysql_query($sel);
          $rezpse = mysql_query($select);

            if (mysql_num_rows($rezu) != 0 ){
                echo "<script>'type = text/javascript'>alert ('Numele de utilizator exista deja');document.location.href='singin1.php';</script>";
                exit();
            }
            else if (mysql_num_rows($rezpse) != 0){
                echo "<script>'type = text/javascript'>alert ('Acest pseudonim exista deja');document.location.href='singin1.php';</script>";
                exit();
            }
            else if (mysql_num_rows($rez_mail) != 0 ){
                echo "<script> 'type = text/javascript'>alert ('Andresa de email indisponibila');document.location.href='singin1.php';</script>";
                exit();
                
            }
            
  
    if(isset($_POST['sub1'])){

        $ins= "INSERT INTO user (nume , parola , email ,  pseudo ) 
        VALUE ('".$_POST['nume1']."','".$_POST['pass1']."', '".$_POST['email']."','".$_POST['pseudo']."')";
          $final =  mysql_query($ins);
                   if (!$final)
                    die ("eroare la inregistrare");
                    else 
                    header("location:login1.php"); 
                  
        }
    }
    else 
    echo "<script type='text/javascript'>alert('Nu ati completat toate campurile'); document.location.href='singin1.php';</script>";
    ?>
    <?php
mysql_close();
?>