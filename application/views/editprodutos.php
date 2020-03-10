<?php
defined('BASEPATH') or exit('No Direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT - Editar Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="<?php echo base_url('application/views/js/pace/pace.min.js') ?>"></script>

    <style>
        body {
            background-color: #F8F8FF;
        }

        .margem {
            margin-bottom: 25px;
            margin-top: 25px;
        }

        .formu {
            background-color: white;
            border-radius: 15px;
            height: 350px;
            position: absolute;
        }


        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;

            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .pace-inactive {
            display: none;
        }

        .pace .pace-progress {
            background: red;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 5px;
        }
    </style>


</head>

<body>

    <div class="container ">

        <div>

            <div class="margem breadcrumb col-2">
                <a href="/" class="">> Home-Page</a>
            </div>

            <h1 class="margem">Editar Produto - <?php echo $produto->nome ?></h1>

            <form class="col-10 formu" name="form_add" action="/products/salvar" method="POST">
                <div class="margem">
                    <div class="col-12 margem">
                        <label for="Nome do produto">Nome do produto</label>
                        <input type="text" class="form-control" value="<?php echo $produto->nome ?>" name="nome" required>
                    </div>
                    <div class="col-12 margem">
                        <label for="Preço do produto">Preço do produto</label>
                        <input type="text" class="form-control" value="<?php echo $produto->preco ?>" name="valor" required>
                    </div>
                    <div class="col-4 margem">
                        <label for="">Produto ativo?</label>
                        <select name="ativo" class="form-control form-control-sm">
                            <?php
                            if ($produto->ativo == 1) {
                                echo "<option value='1' selected>sim</option>";
                                echo "<option value='2'>não</option>";
                            } else {
                                echo "<option value='1'>sim</option>";
                                echo "<option value='2' selected>não</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $produto->id ?>">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary margem">Salvar</button>
                    </div>
                </div>
            </form>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>