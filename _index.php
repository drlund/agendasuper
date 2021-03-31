<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/navbar.css">  
	<script src="https://kit.fontawesome.com/5ba0c75967.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 10px">
  <div class="page-header" align="left">
  <h1>Agenda de Contatos</h1>
  </div>
</div>

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
        <ul class="navbar-nav ml-auto navbar-nav active-focus">
          <li class="nav-item ml-auto">
            <a class="nav-link active" href="index.php" style="color:white; font-weight: bold; background-color">Home<span class="sr-only">(Página atual)</span></a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link active" href="form_adicionar_contato.php" style="color:white; font-weight: bold;">Incluir</a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="bd_listar_contatos.php" style="color:white; font-weight: bold;">Consultar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</div>

<div class="container" align="center" style="margin-top: 50px">
  <p><img src="imagens/agenda-contatos-logo.png"  width="400" height=341></p>
</div>

</body>
</html>