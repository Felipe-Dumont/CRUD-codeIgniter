<?php
defined('BASEPATH') or exit('No Direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>README - CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="<?php echo base_url('application/views/js/pace/pace.min.js') ?>"></script>

	<style>
		body {
			background-color: #F8F8FF;
		}

		.margem {
			margin-bottom: 5px;
		}

		.teste {
			width: 100%;
		}

		.msg {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.center {
			justify-content: center;
			margin-top: 20px;
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

	<div class="container">
		<div class="row">
			<div class="margem teste">
				<div class="margem">
					<h1>Listagem de Produtos</h1>
				</div>

				<div class="msg">

					<div class="margem">
						<a href="/products/add" class="btn btn-success bot">Novo produto</a>
					</div>

				</div>

			</div>

			<table class="table">
				<thead class="thead-dark text-center">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Produto</th>
						<th scope="col">Preço</th>
						<th scope="col">Status</th>
						<th scope="col">Funções</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$contador = 0;

					foreach ($produtos as $produto) {

						echo 	"<tr class='text-center'>";
						echo	"<th scope='row'> $produto->id </th>";
						echo	"<td class='text-center'> $produto->nome </td>";
						echo	"<td class='text-center'> $produto->preco </td>";

						echo "<td class='text-center'>";

						if ($produto->ativo == 1) {
							echo "<span ><a class='badge badge-pill badge-success' href='/products/status/$produto->id' title='Desativar'> Ativo </a></span>";
						} else {
							echo "<span ><a class='badge badge-pill badge-warning' href='/products/status/$produto->id' title='Ativar'> Inativo </a></span>";
						}

						echo "</td>";

						echo 	'<td class="text-center"> <a style="margin: 2px" href="/products/editar/' . $produto->id . '" type="button" class="btn btn-primary bot">editar </a><a href="/products/detalhe/' . $produto->id . '" type="button" class="btn btn-info bot">detalhe</a><a onclick="return confirm(\'Deseja realmente excluir o produto ' . $produto->nome . ' ?\')" style="margin: 2px" href="/products/apagar/' . $produto->id . '" type="button" class="btn btn-danger"> apagar</a> </td>';
						echo	"</tr>";

						$contador++;
					}

					?>
				</tbody>

			</table>
			<div class=" teste msg center">
				<?= $pagination; ?>
			</div>

		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>