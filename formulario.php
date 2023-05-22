<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['sexo'];
    $data_nascimento=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];
    $meu_local=$_POST['meu_local'];
    $nome_do_motorista=$_POST['nome_do_motorista'];
    $marca_do_veiculo=$_POST['marca_do_veiculo'];
    $horario_entro_veiculo=$_POST['entrada_entrou_veiculo'];
    $horario_saida_veiculo=$_POST['entrada_saiu_veiculo'];


    $sql="INSERT INTO formulario-atilio(nome, email, telefone, sexo, data_nascimento, cidade, estado, endereco, meu local,
     nome_do_motorista, marca_do_veiculo, entrada_entrou_veiculo, entrada_saiu_veiculo) VALUES ($nome, $email, $telefone, 
     $sexo, $data_nascimento, $cidade, $estado, $endereco, $meu_local, $nome_do_motorista, $marca_do_veiculo, 
     $horario_entro_veiculo, $horario_saida_veiculo )";

     if(msqli_query($conexao, $sql)){
        echo"Usuario Pronto pra usar";
        else{
            echo "ERRO" .mysqli_connect_error($conexao)
        }
     }
     myqli_close($conexao);
   ?>