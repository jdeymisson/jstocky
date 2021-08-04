<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSystock - Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/icon.svg">
</head>
<body class="body-home">
    <header class="header-home">
        <div class="container">
            <div class="logo">
                <img src="<?php echo BASE_URL; ?>assets/images/logo-jstocky.svg" alt="Logo-JStocky.">
            </div>
                
            <nav>
                <a href="<?php echo BASE_URL; ?>"">Home</a>
                <a href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a>
                <a href="<?php echo BASE_URL; ?>relatorio">Relatório</a>
                <a href="<?php echo BASE_URL; ?>login/sair">Sair</a>
            </nav>
        </div>
    </header>
    <main class="container">
        <section class="main-home container-add">
            <h1>Editar Produto</h1>

            <form method="POST" class="form-add">
                <label for="cod-bar">Código de Barra</label>
                <input type="text" required name="cod" value="<?php echo $info['cod']; ?>" id="cod-bar">

                <label for="desc-prod">Descrição</label>
                <input type="text" required name="name" value="<?php echo $info['name']; ?>" id="desc-prod">   

                <label for="preco">Preço do Produto</label>
                <input type="text" required name="price" value="<?php echo $info['price']; ?>" id="preco">   

                <label for="qtt">Quantidade</label>
                <input type="text" required name="quantity" value="<?php echo $info['quantity']; ?>" id="qtt"> 

                <label for="min-qtt">Quantidade Mínima</label>
                <input type="text" required name="min_quantity" value="<?php echo $info['min_quantity']; ?>" id="min-qtt">

                <input type="submit" value="Salvar">
            </form>

        </section>
    </main>    
</body>
</html>

