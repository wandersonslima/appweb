<?php
    //login
    ini_set ('defult_charset','UTF-8');

    $log=$_GET["login"];
    $sen=$_GET["senha"];
    do{
        if (($log == "wan") && ($sen == "adminMaster") )
            header("Location: menu.html");
        else
        {
            echo "Usuário/Senha incorretos!";
            header ("Location: acesso.html");
        }
    }while(($log != "wan") && ($sen != "adminMaster"))



?>