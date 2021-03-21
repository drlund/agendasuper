<?php

include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #004F99; /*cor de fundo*/
			color: #ffffff; /*cor da letra*/
			font-weight: bold;
		}
	</style>
</head>
<body>

<style>
  #menu-responsivo {
    position: right;
    width: 100%;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
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
            <a class="nav-link" href="index.php" style="color:white; font-weight: bold;">Home</a>
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
	<h3>&nbsp;&nbsp;Editar Contato</h3>
</div>

<div class="container" id="tamanhoContainer"style="margin-top: 40px">

	<form action="bd_atualizar_contatos.php" method="post" style="margin-top: 20px">

		<?php

		$sql = "SELECT * FROM `contatos` WHERE id_contato = $id";
    	$buscar = mysqli_query($conexao, $sql);

    	while ($array = mysqli_fetch_array($buscar)) {
    		
    		$id_contato = $array['id_contato'];
        	$mci = $array['mci'];
    		$nome = $array['nome'];
    		$email = $array['email'];
    		$telefone = $array['telefone'];
    	?>


	  <div class="form-group">
	    <label>MCI</label>
	    <input type="number" class="form-control" name="mci" value="<?php echo $mci ?>" disabled>
	    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
	  </div>
	  <div class="form-group">
	    <label>Nome</label>
	    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
	  </div>
	  <div class="form-group">
	    <label>E-mail</label>
	    <input type="email" class="form-control" name="email" value="<?php echo $email ?>" >
	  </div>
	  <div class="form-group">
	    <label>Telefone</label>
	    <input type="text" class="form-control" name="telefone" value="<?php echo $telefone ?>" >
	  </div>
	  <div style="text-align: right;">
	  <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
	  </div>
	<?php } ?>
	</form>
</div>

<script type="text/javascript" src = "js/bootstrap.js"></script>
</body>
</html>