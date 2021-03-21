<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Contatos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/5ba0c75967.js" crossorigin="anonymous"></script>
</head>
<body>

<style>
  #menu-responsivo {
    position: right;
    width: 100%;
    font-family: 'Open Sans', sans-serif;
    margin-top: 1%;
    margin-right: 2%;

  }
</style>

</head>

<div class="container" style="margin-top: 10px">
  <header class="menu-responsivo">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-auto" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-auto">
            <a class="nav-link" href="index.php" style="color:white; font-weight: bold; ">Home</a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="form_adicionar_contato.php" style="color:white; font-weight: bold;">Incluir</a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="bd_listar_contatos.php" style="color:white; font-weight: bold;">Consultar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</div>

<div class="container" style="margin-top: 10px">
  <h3>&nbsp;&nbsp;Lista de Contatos</h3>
</div>

<div class="container" style="margin-top: 40px">
  
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">MCI</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>


    	<?php

    	include 'conexao.php';
    	$sql = "SELECT * FROM `contatos`";
    	$busca = mysqli_query($conexao, $sql);

    	while ($array = mysqli_fetch_array($busca)) {
    		
    		$id_contato = $array['id_contato'];
        $mci = $array['mci'];
    		$nome = $array['nome'];
    		$email = $array['email'];
    		$telefone = $array['telefone'];
    	?>
    	    
   	<tr>
   	<td><?php echo $mci ?></td>
   	<td><?php echo $nome ?></td>
   	<td><?php echo $email ?></td>
   	<td><?php echo $telefone ?></td>

	<td>
    <a class="btn btn-warning btn-sm" href="form_editar_contato.php?id=<?php echo $id_contato ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

    <a class=""> &nbsp; </a>
    
		<a class="btn btn-danger btn-sm" href="bd_excluir_contatos.php?id=<?php echo $id_contato ?>" onclick="return deletechecked();" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Excluir</a>

    <!-- Modal para confirmação de exclusão -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    </div>

	</td>
	</tr>

   	<?php } ?>

</table>

</div>

<script>
          function deletechecked()
          { 
          var answer = confirm("Deseja excluir permanentemente este contato?")
          if (answer){
              document.messages.submit();
          }

          return false;  
        }
</script> 
<script type="text/javascript" src = "js/bootstrap.js"></script>
</body>
</html>