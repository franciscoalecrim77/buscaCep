<?php
include('./api/viaCep.php');
$retorno = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $cep = (isset($_POST['cep']) && $_POST['cep'] != '') ? $_POST['cep'] : "Sem dados";
  $cepNovo = str_replace('-', '', $cep);
  $viaCep = new viaCep();
  $retorno = $viaCep->buscaCep($cepNovo);
  // print_r($retorno);
}

?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Busca Cep</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- jQuery Validate -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <!-- jQuery Mask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script src="./js/index.js"></script>
</head>

<body>
  <header class="container">
    <div class="row text-center mt-2">
      <div class="col ">
        <h1>Sistema buscador de Ceps.</h1>
      </div>
    </div>
    <form action="" method="post" id="buscaCep">

      <div class="container border mt-3 p-2">
        <div class="row ">
          <div class="col-md-1 col-1 text-center ">
            CEP:
          </div>
          <div class="col-md-3 col-3">
            <input type="text" name="cep" id="cep">
          </div>
          <div class="col-md-4 col-4">
            <!-- <input type="text" name="cep" id="cep"> -->
            <input type="submit" class="btn btn-success" value="Buscar">
          </div>
        </div>
      </div>
    </form>
    <?php
    if (isset($retorno) && $retorno != null) {
      echo $viaCep->retorno($retorno);
    } else {
    }
    ?>

  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>