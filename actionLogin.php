<?php
    //login
    ini_set ('defult_charset','UTF-8');

    $log=$_GET["login"];
    $sen=$_GET["senha"];
    do{
        if (($log == "wan") && ($sen == "adminMaster") )
<<<<<<< HEAD
            header("Location: menu.html"); //inserir o local da proxima pagina
=======
            header("Location: menu.html"); //verificar o nome da proxima pagina
>>>>>>> dev-wanderson
        else
        {
            echo "Usuário/Senha incorretos!";
            header ("Location: acesso.html");
        }
    }while(($log != "wan") && ($sen != "adminMaster"))



?>