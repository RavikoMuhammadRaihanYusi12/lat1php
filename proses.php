<?php

    $username = $_GET["uname"];
    $pass = $_GET["pwd"];

    echo "Username = ".$username." <br>";
    echo "Password = ".$pass." <br>";

    
    $data = array("admin" =>"123", "kontz" =>"123");

    $ada = false;

    foreach($data as $user => $password){
        if($user == $username && $password == $password){
            $status = true;
            break;
        } 
    }

        if($ada){
            echo "Success! <br>";
        } else {
            echo "False! <br>";
        }
    ?>
   