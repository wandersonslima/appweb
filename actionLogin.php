<?php
    //login
    ini_set ('defult_charset','UTF-8');

    $log=$_POST["email"];
    $sen=$_POST["senha"];

        if (($log == "wan@gmail.com") && ($sen == "adminMaster") )

            header("Location: indexx.php");


        else
        {


            echo "Usuário/Senha incorretos!";
           // header ("Location: login.php");


        }




?>