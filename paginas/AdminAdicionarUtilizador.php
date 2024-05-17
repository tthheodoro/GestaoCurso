<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['tipoUtilizador'] == 1) {
?>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<?php
session_start();
include("../basedados/basedados.h");

// Verifica se o IdUtilizador está definido na URL e não está vazio
if (isset($_GET['IdUtilizador']) && !empty($_GET['IdUtilizador'])) {
    $IdUtilizador = $_GET['IdUtilizador'];

    // Prepara e executa a consulta SQL
    $sql = "SELECT * FROM utilizadores WHERE IdUtilizador=$IdUtilizador";
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta foi bem-sucedida
    if ($result) {
        $row = mysqli_fetch_array($result);
    } else {
        echo "Erro na consulta SQL: " . mysqli_error($conn);
    }
} else {
    echo "";
}
?>

<body>
<div>
    </br>
    <form method="POST" action="AdminAdicionarReceberDados.php">
        <div class="form-group" hidden>
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="IdUtilizador" name="id" value="<?php echo isset($row['IdUtilizador']) ? $row['IdUtilizador'] : ''; ?>" readonly>
        </div> 
        </br>
        <div>
            <label for="example" class="form-label mt-4">Nome</label>
            <input type="Nome" name="Nome" class="form-control" id="example" placeholder="Nome">
        </div>
        <div>
            <label for="example" class="form-label mt-4">Morada</label>
            <input type="Morada" name="Morada" class="form-control" id="example" placeholder="Morada">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
            <input type="Email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
            <input type="Password" name="Password" class="form-control" id="Password" placeholder="Password">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Tipo de Utilizador</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Aluno / 2-Docente / 3-Admin</label>
            <input type="tipoUtilizador" name="tipoUtilizador" class="form-control" id="exampleInputEmail1">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Conta Aprovada</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Sim / 0-Não</label>
            <input type="Aprovado" name="Aprovado" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="">
            <input type="hidden" name="IdUtilizador" value="">
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
