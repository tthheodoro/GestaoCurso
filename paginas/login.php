<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .inputBox {
            margin-bottom: 10px; /* Adiciona uma margem na parte inferior */
        }
        .error-box {
            background-color: #ffcccc;
            border: 1px solid #ff0000;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px; /* Ajuste a largura conforme necessário */
            border-radius: 5px;
        }

        .error-message {
            color: #ff0000;
            font-weight: bold;
        }


    </style>
</head>

<body>
    <section>
        <div class="signin">
            <div class="content">
                <h2>Login</h2>
                <div class="form">
                    <?php if (!empty($mensagem_erro)) : ?>
                        <div class="error-box">
                            <p class="error-message"><?php echo $mensagem_erro; ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- Adicionando o formulário -->
                    <form action="autenticacao.php" method="POST">
                        <!-- Campo de entrada para o nome de usuário -->
                        <div class="inputBox">
                            <input type="text" name="Nome" required> <i>Utilizador</i>
                        </div>
                        <!-- Campo de entrada para a senha -->
                        <div class="inputBox">
                            <input type="password" name="Password" required> <i>Password</i>
                        </div>
                        <!-- Botão de envio do formulário -->
                        <div class="inputBox">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Utilizador:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" class="btn btn-outline-dark" value="Login">Submit</button>
    </form>
</body>
</html>

