<?php include "acessa.php"?>
<?php

    $nome=$_POST["nome"];
    $endereco=$_POST["endereco"];
    $cep=$_POST["cep"];
    $tel_celular=$_POST["tel_celular"];
    $tel_residencial=$_POST["tel_residencial"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];

    function inserirDados ($conexao,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$email,$senha)
    {
        $sql = "insert into cliente (nome,endereco,cep,tel_celular,tel_residencial,email,senha) values 
                ('{$nome}','{$endereco}','{$cep}','{$tel_celular}','{$tel_residencial}','{$email}','{$senha}')";
        //inserindo dados na tabela

        return mysqli_query($conexao,$sql);

    }


    if(inserirDados($conexao,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$email,$senha))
    {
        header("Location: indexx.php");

    }
    else
    {
        echo "Erro!";
        $erro=mysqli_error($conexao);
        echo $erro;
    }



?>
