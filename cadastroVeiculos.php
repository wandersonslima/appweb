<?php include "acessa.php" ?>/* conexao banco*/
<?php
    /*função adicionar veiculo*/
    function adicionaVeiculo ($conexao,$nomeVeiculo,$preco,$juros)
    {
        $sql = "INSERT INTO veiculos ($nomeVeiculo,preco,jurus) VALUE ('{$nomeVeiculo}','{$preco}','{$jurus}')";
        /*verificar nomes atributos tabela veiculos*/
        return mysqli_query($conexao,$sql);
    }
    /*função deletar veiculo*/
    function deletaVeiculo ($conexa,$id)
    {
        $sql = "DELETE FROM veiculos WHERE id = '{$id}'";
        return mysqli_query($conexa,$sql);
    }
    //tela confirmação inserir veiculo
    do
    {
        echo "Veiculo:".$nomeVeiculo."<br/>";
        echo "Preço:".$preco."<br/>";
        echo "Jurus:".juros."<br/>";

        //criar confirmação

        //condiciona realizar cadastro
        if (confirm == "yes")
        {
            adicionaVeiculo($conexao,$nome,$endereco,$cep,$telefone,$cpf,$rg,$login,$senha);
        }
        else
        {
            //criar aqui um link para retorno da pagina onde é inserido os dados caso cliente queira auterar os dados
        }
    }while(confirm != "yes")
?>
