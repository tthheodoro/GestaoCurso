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
$IdCurso = $_GET['IdCurso'];
$sql = "SELECT * FROM curso WHERE IdCurso=$IdCurso";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<div>
    </br>
    <form action="AdminApagarCurso.php" method="GET">
        </br>
        <div class="form-group">
            <label for="IdCurso">Seu id:</label>
            <?php
                echo '<input type="text" class="form-control" id="IdCurso" name="IdCurso" value="' . $row['IdCurso'] . '" readonly>';      
            ?>
        </div>
    
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
