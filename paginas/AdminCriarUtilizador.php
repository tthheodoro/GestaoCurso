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
    ?>
    <div>
    </br>
    <form method="POST" action="AdminAtualizarUtilizador.php">
        <div class="form-group" hidden>
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="IdUtilizador" name="id">
        </div>
        </br>
        <div>
            <label for="example" class="form-label mt-4">Nome</label>
            <input type="text" name="Nome" class="form-control" id="example" placeholder="Nome" required>
        </div>
        <div>
            <label for="example" class="form-label mt-4">Morada</label>
            <input type="text" name="Morada" class="form-control" id="example" placeholder="Morada" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
            <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputEmail1" placeholder="Password" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Tipo de Utilizador</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Aluno / 2-Docente / 3-Admin</label>
            <input type="number" name="tipoUtilizador" class="form-control" id="exampleInputEmail1" placeholder="Tipo de Utilizador" required>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label mt-4">Conta Aprovada</label>
            <label for="exampleInputEmail1" class="form-label mt-4">1-Sim / 0-Não</label>
            <input type="number" name="Aprovado" class="form-control" id="exampleInputEmail1" placeholder="Conta Aprovada" required>
        </div>
    </br>

    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>
</body>
</html>
