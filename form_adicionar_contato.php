<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Contato</title>
	<link rel="stylesheet" href="css/bootstrap.css">

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
	<h3><b>&nbsp;&nbsp;Adicionar Contato</b></h3>
</div>

<div class="container" id="tamanhoContainer"style="margin-top: 40px">
	
	<form action="bd_inserir_contatos.php" method="post" style="margin-top: 20px">
	  <div class="form-group" style="font-weight: bold;">
	    <label>MCI</label>
	    <input type="number" class="form-control" name="mci" placeholder="Insira o MCI do Cliente" autocomplete="off" required>
	  </div>
	  <div class="form-group" style="font-weight: bold;">
	    <label>Nome</label>
	    <input type="text" class="form-control" name="nome" placeholder="Insira o nome do Cliente" autocomplete="off" required>
	  </div>
	  <div class="form-group" style="font-weight: bold;">
	    <label>E-mail</label>
	    <input type="email" class="form-control" name="email" placeholder="Insira o e-mail do cliente" autocomplete="off" required>
	  </div>
	  <div class="form-group" style="font-weight: bold;">
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