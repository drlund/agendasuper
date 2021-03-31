<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Contatos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/5ba0c75967.js" crossorigin="anonymous"></script>
</head>
<body>

</head>

  <div class="container" style="margin-top: 10px">
      <ul class="nav justify-content-end" style="background-color: #cceeff ">
        <li class="nav-item">
          <a class="nav-link active" href="index.php" style="font-weight: bold;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_adicionar_contato.php" style="font-weight: bold;">Incluir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bd_listar_contatos.php" style="font-weight: bold;">Consultar</a>
        </li>
      </ul>
  </div>

<div class="container" style="margin-top: 10px">
  <h3><b>&nbsp;&nbsp;Lista de Contatos</b></h3>
</div>

<div class="container" style="margin-top: 40px">
  
	<table class="table table-striped">
  <thead>
    <tr>
      <div  style="font-weight: bold;">
      <th scope="col">MCI</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </div>
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