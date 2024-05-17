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
<?php
include ("../basedados/basedados.h");
include ("../paginas/NavBarDocente.html");
$IdInscricao = $_GET['IdInscricao'];
$sql = "SELECT * FROM inscricao WHERE IdInscricao=$IdInscricao";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
    ?>
    <div>
    </br>
    <form method="POST" action="ReceberEditarDocente.php">
        <div class="form-group">
            <label for="idCursoSelecionado">Curso Selecionado:</label>
            <?php
                $idCursoSelecionado = $row ['IdCurso'];
                echo '<input type="text" class="form-control" id="IdCurso" name="idCursoSelecionado" value="' . $idCursoSelecionado . '" readonly>';      
            ?>
        </div> 
        </br>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['email']."\"";?> aria-describedby="emailHelp" placeholder="exemplo@exemplo.com">
        </div>
        <div class="">
            <label for="exampleTextarea" class="form-label mt-4">Informações Adicionais:</label>
            <textarea class="form-control" name="informacao" id="exampleTextarea" rows="3" placeholder="Nota de Curso, idade, etc..."><?php echo $row ['informacao'];?></textarea>
        </div>
        <div class="">
        <input type="hidden" name="IdInscricao" value="<?php echo $IdInscricao; ?>">
        </div>
    </br>

    <!-- Campos para selecionar a inscrição a ser editada -->
    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    </form>
</div>
</body>
</html>

<?php
} else { 
    header("Location: index.php");
        }  
?>
