<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container" style="margin-top: 50px;">

        <div class="breadcrumb col-2">
            <a href="/" class="">> Home-Page</a>
        </div>

        <div>

            <h3>Detalhes do produto <?php echo $produto->nome ?> </h3>

            <h4> Preço: <?php echo $produto->preco ?></h4>
            <h4> Status: <?php if ($produto->ativo == 1) {
                                echo "<span><a class='badge badge-pill badge-success' href='/products/status/$produto->id' title='Desativar'> Ativo </a></span>";
                            } else {
                                echo "<span><a class='badge badge-pill badge-warning' href='/products/status/$produto->id' title='Ativar'> Inativo </a></span>";
                            } ?> </h4>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>