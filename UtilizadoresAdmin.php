<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">EAF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
             <ul class="navbar-nav mx-auto">     
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Página Principal
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cursos.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre nós</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</br></br>
<ul class="mx-auto">
<h3>Cursos de Formação</h3>

<?php
include 'conexao.php';?>

<button type="button" class="btn btn-primary">Adicionar Novo</button>

<script>
    function filterTable(tipo) {
        if (tipo === 'aluno' || tipo === 'docente' || tipo === 'administrador') {
            window.location.href = 'filtrar_tabela.php?tipo=' + tipo;
        } else if (tipo === 'todos') {
            window.location.href = 'filtrar_tabela.php';
        }
    }
</script>

<section class="intro mt-5">
    <div class="mask d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="rectangular-bg"> 
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filtrar por
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" onclick="filterTable('todos')">Todos</a>
                                <a class="dropdown-item" href="#" onclick="filterTable(1)">Aluno</a>
                                <a class="dropdown-item" href="#" onclick="filterTable(2)">Docente</a>
                    <a class="dropdown-item" href="#" onclick="filterTable(3)">Administrador</a>
                                <!-- Adicione mais opções de filtro conforme necessário -->
                            </div>
                        </div>
                        <section class="intro mt-3">
                            <div class="table-responsive bg-white">
                                <table id="tabela-cursos" class="table mb-0" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                        <tr style="border-bottom: 1px solid #ccc;">
                                            <th scope="col" style="border-right: 1px solid #ccc;">Id</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Nome</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Morada</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Email</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Editar</th>
                                            <th scope="col" style="border-right: 1px solid #ccc;">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Os resultados serão carregados por meio de uma página PHP separada -->
                                    </tbody>
                                </table>
                            </div>
                            <section class="intro mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function filterTable(category) {
        var rows = document.querySelectorAll("tbody tr");
        rows.forEach(function(row) {
            var course = row.querySelector("td:nth-child(2)").innerText; // assuming course name is in the second column
            if (category === 'todos' || course === category) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
</script>

<?php 
$conn = null;
?>
</ul>

</body>
</html>