<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['tipoUtilizador'] == 2) {
?>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<?php

include ("../basedados/basedados.h");
include ("../paginas/NavBarAluno.html");
$IdUtilizador= $_GET['IdUtilizador'];
$sql = "SELECT * FROM utilizadores WHERE IdUtilizador=$IdUtilizador";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<div>
    </br>
    <form action="DocenteEliminarDados.php" method="POST">
        </br>
        <div class="form-group">
            <label for="IdIdUtilizador">Seu id:</label>
            <?php
                echo '<input type="text" class="form-control" id="IdUtilizador" name="IdUtilizador" value="' . $row['IdUtilizador'] . '" readonly>';      
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
<?php
} else { 
    header("Location: index.php");
        }  
?>
