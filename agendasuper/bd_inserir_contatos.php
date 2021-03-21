<?php 

include 'conexao.php';

$mci = $_POST['mci'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO `contatos`(`mci`, `nome`, `email`, `telefone`) VALUES ($mci,'$nome','$email','$telefone')";

$inserir = mysqli_query($conexao, $sql);

?>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/5ba0c75967.js" crossorigin="anonymous"></script>
    <div class="container" style="width: 400px "> 
        <center>
            <h3>Contato adicionado com sucesso</h3>
            <div style="margin-top: 10px">
            <a href="bd_listar_contatos.php" class="btn btn-sm btn-warning">Voltar</a>
            </div>
        </center>
    </div>