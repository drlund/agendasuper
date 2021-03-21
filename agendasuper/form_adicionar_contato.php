<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Contato</title>
	<link rel="stylesheet" href="css/bootstrap.css">

<style>
  #menu-responsivo {
    position: right;
    width: 100%;
    font-family: 'Open Sans', sans-serif;
    margin-top: 1%;
    margin-right: 2%;

  }
</style>

	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #FF1168; /*cor de fundo*/
			color: #ffffff; /*cor da letra*/
			font-weight: bold;
		}
	</style>

</head>

<body>

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
	<h3>&nbsp;&nbsp;Adicionar Contato</h3>
</div>

<div class="container" id="tamanhoContainer"style="margin-top: 40px">
	
	<form action="bd_inserir_contatos.php" method="post" style="margin-top: 20px">
	  <div class="form-group">
	    <label>MCI</label>
	    <input type="number" class="form-control" name="mci" placeholder="Insira o MCI do Cliente" autocomplete="off" required>
	  </div>
	  <div class="form-group">
	    <label>Nome</label>
	    <input type="text" class="form-control" name="nome" placeholder="Insira o nome do Cliente" autocomplete="off" required>
	  </div>
	  <div class="form-group">
	    <label>E-mail</label>
	    <input type="email" class="form-control" name="email" placeholder="Insira o e-mail do cliente" autocomplete="off" required>
	  </div>
	  <div class="form-group">
	    <label>Telefone</label>
	    <input type="text" class="form-control" name="telefone" placeholder="Insira um número de telefone" autocomplete="off" required>
	  </div>
	  <div style="text-align: right;">
	  <button type="submit" id="botao" class="btn btn-sm">Adicionar</button>
	  </div>
	</form>
</div>

<script type="text/javascript" src = "js/bootstrap.js"></script>
</body>
</html>