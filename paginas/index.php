<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
<?php
include("../paginas/NavBar.html");
?>
</br></br>
<ul class="mx-auto">
<style>
        .mensagem {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    // Verifique se existe uma mensagem na URL
    if (isset($_GET['mensagem'])) {
        $mensagem = urldecode($_GET['mensagem']);
        echo '<p class="mensagem">' . $mensagem . '</p>';
    }
    ?>
    <!-- Restante do conteúdo da página de index -->
</body>
<h3>Escola Alfredo</h3>

<div class="card mb-3">

  <h2 class="card-header">Junte-se a nós</h2>

  <div class="card-body">
  </div>
  <svg xmlns="C:\xampp\htdocs\cursos\img/curso.jpg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
    <image xlink:href="C:\xampp\htdocs\cursos\img/curso.jpg" width="100%" height="100%" />
  </svg>

  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
