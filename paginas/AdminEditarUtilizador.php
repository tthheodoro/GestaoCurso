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
<?php


    include ("../basedados/basedados.h");
    include ("../paginas/NavBarAdmin.html");
    $IdUtilizador = $_GET['IdUtilizador'];
    $sql = "SELECT * FROM utilizadores WHERE IdUtilizador=$IdUtilizador";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
    <div>
    </br>
    <form method="POST" action="AdminRecebeDadosUtilizador.php">
        <div class="form-group">
            <label for="id">Id:</label>
            <?php
                $id = $row ['IdUtilizador'];
                echo '<input type="text" class="form-control" id="IdUtilizador" name="id" value="' . $id . '" readonly>';      
            ?>
        </div> 
        </br>
        <div>
            <label for="example" class="form-label mt-4">Nome</label>
            <input type="Nome" name="Nome" class="form-control" id="example" <?php echo "value = \"". $row ['Nome']."\"";?> placeholder="Nome" required>
        </div>
        <div>
            <label for="example" class="form-label mt-4">Morada</label>
            <input type="Morada" name="Morada" class="form-control" id="example" <?php echo "value = \"". $row ['Morada']."\"";?> placeholder="Morada" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
            <input type="Email" name="Email" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['Email']."\"";?> aria-describedby="emailHelp" placeholder="Email" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
            <input type="Password" name="Password" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['Password']."\"";?> placeholder="Password" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Tipo de Utilizador</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Aluno / 2-Docente / 3-Admin</label>
            <input type="tipoUtilizador" name="tipoUtilizador" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['tipoUtilizador']."\"";?> placeholder="Email" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Conta Aprovada</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Sim / 0-Não</label>
            <input type="Aprovado" name="Aprovado" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['Aprovado']."\"";?> placeholder="1-Sim / 0-Não" required>
        </div>
        <div class="">
        <input type="hidden" name="IdUtilizador" value="<?php echo $IdUtilizador; ?>">
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
