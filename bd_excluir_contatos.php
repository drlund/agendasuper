<?php

include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM `contatos` WHERE id_contato = $id";
$deletar = mysqli_query($conexao, $sql);

?>

	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/5ba0c75967.js" crossorigin="anonymous"></script>
	<div class="container" style="width: 400px "> 
		<center>
			<h3>Excluído com sucesso</h3>
			<div style="margin-top: 10px">
			<a href="bd_listar_contatos.php" class="btn btn-sm btn-warning">Voltar</a>
			</div>
		</center>
	</div>