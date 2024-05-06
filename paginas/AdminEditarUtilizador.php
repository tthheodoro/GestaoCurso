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
            <input type="Nome" name="Nome" class="form-control" id="example" <?php echo "value = \"". $row ['Nome']."\"";?> aria-describedby="emailHelp" placeholder="Nome">
        </div>
        <div>
            <label for="example" class="form-label mt-4">Morada</label>
            <input type="Morada" name="Morada" class="form-control" id="example" <?php echo "value = \"". $row ['Morada']."\"";?> aria-describedby="emailHelp" placeholder="Morada">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
            <input type="Email" name="Email" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['Email']."\"";?> aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
            <input type="Password" name="Password" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['Password']."\"";?> aria-describedby="emailHelp" placeholder="Password">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Tipo de Utilizador</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Aluno / 2-Docente / 3-Admin</label>
            <input type="tipoUtilizador" name="tipoUtilizador" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['tipoUtilizador']."\"";?> aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Conta Aprovada</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Sim / 0-Não</label>
            <input type="Aprovado" name="Aprovado" class="form-control" id="exampleInputEmail1" <?php echo "value = \"". $row ['Aprovado']."\"";?> aria-describedby="emailHelp" placeholder="Email">
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