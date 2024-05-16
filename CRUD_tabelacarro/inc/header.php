
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link href="./vendor/components/font-awesome/css/all.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<title> CRUD - PHP com mysqli </title>
</head>

<body>
    <div class="topnav">
    <div class="navbar d-flex">
  <!-- Use Bootstrap's built-in utility classes to align the icon to the left -->
  <i class="fa-solid fa-bars fa-lg text-white me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
  <!-- Use Bootstrap's text-center class to center the title -->
  <div class="flex-grow-1 text-center">
    <h2 class="titulo-navbar">CRUD PHP Carros</h2>
  </div>
</div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="flex-column linha-sidebar">
                    <a class="active" href="index.php">Início</a>
                </div>
                <div class="flex-column linha-sidebar">
                    <a href='inclusao.php'>Incluir</a>
                </div>
                <div class="flex-column linha-sidebar">
                    <a href='consulta.php'>Consultar</a>
                </div>

                <div class="flex-column">
                    <a href='geral.php'>Consulta Geral</a>
                </div>

                <div class="flex-column">
                    <a href='alteracao.php'>Alterar</a>
                </div>

                <div class="flex-column">
                    <a href='exclusao.php'>Excluir</a>
                </div>

            </div>
        </div>
    </div>