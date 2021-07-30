<?php

    if (!$conex = mysql_connect("127.0.0.1", "root" , ""))

        die ("Eroare la conexiunea la baza de date");

        if (!$all = mysql_select_db("examen", $conex))
        
        die ("Eroare la selectia bazeei de date");

?>