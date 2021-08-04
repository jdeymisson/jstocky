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
        <section class="container main-home">
            <form  method="GET" class="busca-home">
                <input id="busca"  style=" width:100%; height:40px;" type="text" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>"
                placeholder="Digite o Código de barra ou a Descrição do Produto">    
            </form>

            <table class="table-home">
                <thead>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Qtd.</th>
                    <th>Ações</th>
                </thead>
                <?php foreach($list as $item): ?>
                    <tebody>
                        <td><?php echo $item['cod']; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td>R$ <?php echo number_format($item['price'], 2, ',', ','); ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>
                            <a class="content-a" href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">
                                <span>Editar</span>
                                <div class="td-lapis">
                                    <img src="<?php echo BASE_URL; ?>assets/images/lapis.svg" alt="Editar">
                                </div>
                            </a>
                        </td>
                    </tbody>
                <?php endforeach; ?>
            </table>

            <script type="text/javascript">
                document.getElementById("busca").focus();
            </script>
        </section>

    </main> 
</body>
</html>

