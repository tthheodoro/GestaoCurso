<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<?php
session_start();


include ("../basedados/basedados.h");
include ("../paginas/NavBarAdmin.html");
$IdCurso = $_GET['IdCurso'];
$sql = "SELECT * FROM curso WHERE IdCurso=$IdCurso";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
    ?>
    <div>
    </br>
    <form method="POST" action="AdminRecebeDadosCurso.php">
        <div class="form-group">
          <label for="id">Id:</label>
          <?php
          $id = $row['IdCurso'];
           echo '<input type="text" class="form-control" id="IdCurso" name="IdCurso" value="' . $id . '" readonly>';
          ?>
        </div> 
        </br>
        <div>
            <label for="example" class="form-label mt-4">Nome</label>
            <input type="Nome" name="Nome" class="form-control" id="example" <?php echo "value = \"". $row ['Nome']."\"";?> aria-describedby="emailHelp" placeholder="Nome">
        </div>
        <div>
            <label for="example" class="form-label mt-4">Descricao</label>
            <input type="Descricao" name="Descricao" class="form-control" id="example" <?php echo "value = \"". $row ['Descricao']."\"";?> aria-describedby="emailHelp" placeholder="Morada">
        </div>
    </br>
    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    </form>
</div>
</body>
</html>
