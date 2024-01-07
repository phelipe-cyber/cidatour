<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$datahora = date('Y-m-d H:i:s');

    $nome = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobrenome']);
    $rg = trim($_POST['rg']);
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = trim($_POST['email']);
    $datanascimento = $_POST['datanascimento'];
    $datanascimento_f = date('Y-m-d', strtotime(str_replace('/', '-', $datanascimento)));
   
    $inset_base = "INSERT INTO `clientes`(`id`, `nome`, `sobrenome`, `rg`, `cpf`, `telefone`, `data_nascimento`, `email`,`data_criacao`,`data_alteracao`) VALUES
         (null,'$nome','$sobrenome','$rg','$cpf','$telefone','$datanascimento_f','$email','$datahora','$datahora')";
        
        $mysqli_query_add_base = mysqli_query($conn, $inset_base);

        if ($mysqli_query_add_base == 1) {
            echo "Cadastro efetuado com sucesso";
        }else{
            // echo "error";
            echo "error: ". $conn->error;
            
        }

?>