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
include ("../paginas/NavBarDocente.html");
$IdUtilizador = $_GET['IdUtilizador'];
$sql = "SELECT * FROM utilizadores WHERE IdUtilizador=$IdUtilizador";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<div>
    </br>
    <form action="AdminAtualizarDadosPessoais.php" method="POST">
        </br>
        <div class="form-group" hidden>
            <label for="IdUtilizador">Seu id:</label>
            <?php
                $IdUtilizador= $row ['IdUtilizador'];
                echo '<input type="text" class="form-control" id="IdUtilizador" name="IdUtilizador" value="' . $IdUtilizador . '" readonly>';      
            ?>
        </div>
        <div>
            <label for="Nome" class="form-label mt-4">Nome:</label>
            <input type="text" name="Nome" class="form-control" id="Nome" placeholder="Nome" value="<?php echo $row['Nome']; ?>">
        </div>
        <div>
            <label for="Password" class="form-label mt-4">Password:</label>
            <input type="password" name="Password" class="form-control" id="Password" placeholder="Nova Password">
        </div>
        </br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>

</body>
</html>