<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['tipoUtilizador'] == 3) {
?>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php
       
        include ("../basedados/basedados.h");
        include ("../paginas/NavBarAdmin.html");
    ?>
    <div>
    </br>
    <form method="POST" action="AdminAtualizarCurso.php">
        <div class="form-group" hidden>
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="IdCurso" name="id">
        </div>
        </br>
        <div>
            <label for="example" class="form-label mt-4">Nome</label>
            <input type="text" name="Nome" class="form-control" id="example" placeholder="Nome" required>
        </div>
        <div>
            <label for="example" class="form-label mt-4">Descrição</label>
            <input type="textarea" name="Descricao" class="form-control" id="example" placeholder="Descricao" required>
        </div>
        <div>
            <label for="example" class="form-label mt-4">Vagas Disponíveis</label>
            <input type="textarea" name="Vagas_disponiveis" class="form-control" id="example" placeholder="Vagas Disponíveis" required>
        </div>
    </br>

    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>
</body>
</html>
<?php
} else { 
    header("Location: index.php");
        }  
?>