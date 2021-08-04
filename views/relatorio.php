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
<body>

    <main>
        <div class="container relatorioc">
        <div class="nav-top">
            <h1>Relatório</h1>
            <a href="<?php echo BASE_URL; ?>">Voltar</a>
        </div>

        <table class="table-home">
            <thead>
            <th>Descrição do Produto</th>
            <th>Qtd.</th>
            <th>Qtd. Min.</th>
            <th>Diferença</th>
        </thead>
        <?php foreach($list as $item): ?>
        <tbody>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td><?php echo $item['min_quantity']; ?></td>
            <td><?php echo (floatval($item['min_quantity']) - floatval($item['quantity'])); ?></td>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
    </main>

<script type="text/javascript">
    window.print();
</script>
</body>
</html>