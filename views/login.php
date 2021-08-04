<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSystock - Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/icon.svg">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="<?php echo BASE_URL; ?>assets/images/logo-jstocky.svg" alt="Logo-JStocky.">
            </div>
        </div>
    </header>
    <main class="container">
        <section class="login">
            <div class="content-left">
                <h1>JStocky, a solução perfeita para seu controle de estoque.</h1>
                <div class="img-controle">
                    <img src="<?php echo BASE_URL; ?>assets/images/login-controle.svg" alt="Controle">
                </div>
            </div>

            <div class="content-login">
                <h1>Faça seu login</h1>
                <form method="POST" class="form">
                    <label for="cod">CPF</label>
                    <div class="input-field">
                        <img src="<?php echo BASE_URL; ?>assets/images/input-user.svg" alt="CPF">
                        <input type="text" name="number" id="cod" placeholder="CPF" required>
                    </div>

                    <label for="pass">Senha</label>
                    <div class="input-field">
                        <img src="<?php echo BASE_URL; ?>assets/images/input-key.svg" alt="Senha">
                        <input type="password" name="password" id="pass" placeholder="Senha" required> 
                    </div>

                    <div class="input-button">
                        <input type="submit" value="Entrar">
                        <img src="<?php echo BASE_URL; ?>assets/images/input-entrar.svg" alt="Entrar">
                    </div>
                    <?php if(!empty($msg)): ?>
                <h3 class="erro-login"><?php echo $msg; ?></h2>
                <?php endif; ?>
                </form>
            </div>
        </section>
    </main>
</body>
</html>