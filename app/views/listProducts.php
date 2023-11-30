<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="list-products">
        <header>
        <h1>LISTA DE PRODUTOS</h1>
        <a href="http://localhost/testedevsoft/product/create">Novo Produto </a>
        </header>
       
        <?php foreach($this->data as $product) { ?>
                <div class="product">
                    <h2>ID <span><?= $product['id'] ?></span></h2>
                    <h3><?= $product['name'] ?></h3>
                    <small><?= $product['date'] ?></small>
                </div>
        <?php } ?>
    </div>
</body>
</html>