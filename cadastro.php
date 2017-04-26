<?php
 include "acessa.php" //conecta com o banco
?>
<?php
    /* listando variáveis */

    $nome=$_POST["nome"];
    $endereco=$_POST["endereco"];
    $cep=$_POST["cep"];
    $telefone=$_POST["telefone"];
    $cpf=$_POST["cpf"];
    $rg=$_POST["rg"];
    $login=$_POST["login"];
    $senha=$_POST["senha"];

   //função cadastrar
    function cadastraDados ($conexao,$nome,$endereco,$cep,$telefone,$cpf,$rg,$login,$senha)
    {
        $ sql = "INSERT INTO clientes (nome,endereco,cep,telefone,cpf,rg,login,senha) VALUES ('{$nome}','{$endereco}','{$cep}','{$telefone}','{$cpf}','{$rg}','{$login}','{$senha}',)";
        /*verificar nomes na tabela cliente, tem que ser igual*/
        return mysqli_query($conexao,$sql);
    }
    //tela de confirmação de cadastro. pode ser auterada
    do
    {
        echo "Nome:".$nome."<br/>";
        echo "Endereço:".$endereco."<br/>";
        echo "CEP:".$cep."<br/>";
        echo "Telefone:".$telefone."<br/>";
        echo "CPF:".$cpf."<br/>";
        echo "RG:".$rg."<br/>";
        echo "Login:".$login."<br/>";
        echo "Senha".$senha."<br/>";
        //criar confirmação

        //condiciona realizar cadastro
        if (confirm == "yes")
        {
            cadastraDados($conexao,$nome,$endereco,$cep,$telefone,$cpf,$rg,$login,$senha);
        }
        else
        {
            //criar aqui um link para retorno da pagina onde é inserido os dados caso cliente queira auterar os dados
        }
    }while(confirm != "yes")
    if (insereProdutos($conexao, $nome, $preco, $desc))
    {
        echo "Adicionado!!<br/>";
    }
else
    {
    echo "Erro!";
    $erro=mysqli_error($conexao);
    echo $erro;
    }






?>
