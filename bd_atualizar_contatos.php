<?php

	include 'conexao.php';

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	$sql = "UPDATE `contatos` SET `nome`='$nome',`email`='$email',`telefone`= '$telefone' WHERE id_contato = $id";
	$atualizar = mysqli_query($conexao, $sql);

?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/5ba0c75967.js" crossorigin="anonymous"></script>
	<div class="container" style="width: 400px "> 
		<center>
			<h3>Atualizado com sucesso</h3>
			<div style="margin-top: 10px">
			<a href="bd_listar_contatos.php" class="btn btn-sm btn-warning">Voltar</a>
			</div>
		</center>
	</div>