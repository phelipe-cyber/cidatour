<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$datahora = date('Y-m-d H:i:s');

    $titulo = trim($_POST['titulo']);
    $descricao = trim($_POST['descricao']);
    $valor = trim($_POST['valor']);
    $custo = $_POST['custo'];
    $foto = $_POST['foto'];
   
    $inset_base = "INSERT INTO `viagens`(`id`, `titulo`, `descricao`, `valor`, `custo`, `foto`, `data_criacao`) VALUES 
    (NULL,'$titulo','$descricao','$valor','$custo','$foto','$datahora')";
        
        $mysqli_query_add_base = mysqli_query($conn, $inset_base);

        if ($mysqli_query_add_base == 1) {
            echo "Cadastro efetuado com sucesso";
        }else{
            // echo "error";
            echo "error: ". $conn->error;
            
        }

?>