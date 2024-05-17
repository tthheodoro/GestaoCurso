<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php

include("../paginas/NavBarAluno.html");
?>
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