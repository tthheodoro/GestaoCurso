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
include ("../paginas/NavBarAdmin.html");
$IdUtilizador = $_GET['IdUtilizador'];
$sql = "SELECT * FROM utilizadores WHERE IdUtilizador=$IdUtilizador";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<div>
    </br>
    <form action="AdminApagarUtilizador.php" method="GET">
        </br>
        <div class="form-group">
            <label for="IdUtilizador">Seu id:</label>
            <?php
                echo '<input type="text" class="form-control" id="IdUtilizador" name="IdUtilizador" value="' . $row['IdUtilizador'] . '" readonly>';      
            ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>

</body>
</html>