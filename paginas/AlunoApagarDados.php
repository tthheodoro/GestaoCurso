<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<?php
session_start();
include ("../basedados/basedados.h");
include ("../paginas/NavBarAluno.html");
$IdInscricao = $_GET['IdInscricao'];
$sql = "SELECT * FROM inscricao WHERE IdInscricao=$IdInscricao";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<div>
    </br>
    <form action="AlunoEliminarDados.php" method="POST">
        </br>
        <div class="form-group">
            <label for="IdInscricao">Seu id:</label>
            <?php
                echo '<input type="text" class="form-control" id="IdInscricao" name="IdInscricao" value="' . $row['IdInscricao'] . '" readonly>';      
            ?>
        </div>
        <div>
            <label for="Email" class="form-label mt-4">Email:</label>
            <input type="text" name="email" class="form-control" id="Email">
        </div>
        <div>
            <label for="Informacao" class="form-label mt-4">Password:</label>
            <input type="text" name="Informacao" class="form-control" id="Informacao">
        </div>
        </br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>

</body>
</html>