<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ALF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mx-auto">     
                <li class="nav-item">
                    <a class="nav-link active" href="PrincipalAluno.php">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="CursosUtilizador.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre nós</a>
                </li>
        </ul>
     </div>
    </div>
</nav>
<div>
    </br>
    <form method="POST" action="ReceberInscricaoDocente.php">
        <div class="form-group">
            <label for="idCursoSelecionado">Curso Selecionado:</label>
            <?php
            if (isset($_GET['IdCurso'])) {
                $idCursoSelecionado = $_GET['IdCurso'];
                echo '<input type="text" class="form-control" id="IdCurso" name="idCursoSelecionado" value="' . $idCursoSelecionado . '" readonly>';
            } else {
                echo '<input type="text" class="form-control" id="IdCurso" name="idCursoSelecionado" value="Nenhum curso selecionado" readonly>';
            }
            ?>
        </div> 
        </br>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemplo@exemplo.com">
        </div>
        <div class="">
            <label for="exampleTextarea" class="form-label mt-4">Informações Adicionais:</label>
            <textarea class="form-control" name="informacao" id="exampleTextarea" rows="3" placeholder="Nota de Curso, idade, etc..."></textarea>
        </div>
    </br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>

</body>
</html>