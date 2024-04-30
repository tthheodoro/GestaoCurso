<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script>
        // Função para ler parâmetros da URL
        function obterParametroUrl(nome) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(nome);
        }

        // Função para preencher a label com o idCurso da URL
        function preencherIdCurso() {
            const idCurso = obterParametroUrl('idCurso');
            document.getElementById('idCursoSelecionado').innerText = idCurso;
        }
    </script>
</head>
<body onload="preencherIdCurso()">
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ALF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarColor02">

        <ul class="navbar-nav mx-auto">     
                <li class="nav-item">
                    <a class="nav-link active" href="PrincipalAluno.php">Página Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="CursosUtilizador.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre nós</a>
                </li>
        </ul>
     </div>
    </div>
</nav>
<div>
    <!-- Formulário Editar -->
    </br>
    <form>
        <div class="form-group">
            <label for="idCursoSelecionado">Curso Selecionado:</label>
            <label id="idCursoSelecionado"></label>
        </div> 
        </br>
        <div>
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="">
            <label for="exampleTextarea" class="form-label mt-4">Comentário:</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>
    </br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>

</body>
</html>