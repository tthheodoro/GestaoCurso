<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registo</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .inputBox {
            margin-bottom: 10px;
        }
        .error-box {
            background-color: #ffcccc;
            border: 1px solid #ff0000;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
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
                <h2>Registar</h2>
                <div class="form">
                    <?php if (!empty($mensagem_erro)) : ?>
                        <div class="error-box">
                            <p class="error-message"><?php echo $mensagem_erro; ?></p>
                        </div>
                    <?php endif; ?>
                    <!-- Adicionando o formulário -->
                    <form action="registarUtilizador.php" method="POST">
                        <!-- Campo de entrada para o nome de usuário -->
                        <div class="inputBox">
                            <input type="text" name="Nome" required> <i>Utilizador</i>
                        </div>
                        <div class="inputBox">
                            <input type="Morada" name="Morada" required> <i>Morada</i>
                        </div>
                        <!-- Campo de entrada para a senha -->
                        <div class="inputBox">
                            <input type="Email" name="Email" required> <i>Email</i>
                        </div>
                        
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

