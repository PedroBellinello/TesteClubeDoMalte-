<?php

use App\Models\Produto;
use App\routes\web;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Minha página</title>
	<!-- Incluir os arquivos CSS do Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
	<div class="container">
		<h1>Minha página</h1>
		<a href="<?php echo e(url('/produtos/create')); ?>" class="btn btn-primary">Criar Produto</a>

		<!-- Exemplo de botão que leva para a rota de edição de um produto, substitua o ID pelo ID do produto que deseja editar -->
		<a href="<?php echo e(url('/produtos/ID/edit')); ?>" class="btn btn-warning">Editar</a>

		<!-- Exemplo de botão que leva para a rota de visualização de um produto, substitua o ID pelo ID do produto que deseja ver -->
		<a href="<?php echo e(url('/produtos/ID')); ?>" class="btn btn-info">Ver</a>

		<!-- Exemplo de botão que leva para a rota de exclusão de um produto, substitua o ID pelo ID do produto que deseja excluir -->
		<form action="<?php echo e(url('/produtos/ID')); ?>" method="POST" style="display:inline">
		    <?php echo e(csrf_field()); ?>

		    <?php echo e(method_field('DELETE')); ?>

		    <button type="submit" class="btn btn-danger">Excluir</button>
		</form>
	</div>

	<!-- Incluir os arquivos JS do Bootstrap -->
	<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html>


<?php /**PATH E:\CursosProgramação\Estudojs\teste php\teste_crud\resources\views/inicio.blade.php ENDPATH**/ ?>