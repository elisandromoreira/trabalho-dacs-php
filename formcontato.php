<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CRUD - AGENDA DE CONTATOS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Agenda de Contatos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.faltoupontoevirgula.com.br/">Walter Coan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://univille.br">Univille</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>


  <?php
      $id=0;
      $name="";
      $company="";
      $phone="";
      
      $con = mysqli_connect("localhost","bob","bob","univille");
      if(isset($_GET['id'])){
          $select = "select * from contatos where id = ?";
          $stmt = mysqli_prepare($con, $select);
          mysqli_stmt_bind_param($stmt, "i", $_GET['id']);
          mysqli_stmt_execute($stmt);
          @mysqli_stmt_bind_result($stmt, $result);
          $result = mysqli_stmt_get_result($stmt);
          $row = $result->fetch_assoc();
          $id = $row['id'];
          $name = $row['name'];
          $company = $row['company'];
          $phone = $row['phone'];
      }
      
  ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">
          <h3>Contato</h3>
          <form method="post" action="savecontato.php">
            
            <input type="hidden" name="txtId" value="<?=$id?>">
            
            <div class="form-group">
                <label for="txtNome">Nome</label>
                <input type="text" class="form-control" id="txtNome" 
                  name="txtNome" value="<?=$name?>">
            </div>
            <div class="form-group">
                <label for="txtEndereco">Empresa</label>
                <input type="text" class="form-control" id="txtEmpresa" 
                  name="txtEmpresa" value="<?=$company?>">
            </div>
            <div class="form-group">
                <label for="txtEstado">Telefone</label>
                <input type="tel" class="form-control" id="txtTelefone" 
                  name="txtTelefone" value="<?=$phone?>">
                
            </div>
            
            
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
      </p>
    </header>


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Univille 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
