<?php require_once("cabecalho.php");?>
<?php require_once("banco-produto.php");?>
<?php require_once("logica-usuario.php");
	verificaUsuario();
?>
<?php
$produtos = listaProdutos($conexao);
?>
<table class="table table-striped table-bordered">
<?php
foreach($produtos as $produto) :
?>
	<tr>
		<td><?= $produto['nome'] ?></td>
		<td><?= $produto['preco'] ?></td>
		<td><?= substr($produto['descricao'], 0, 40)  ?></td>
		<td><?= $produto['categoria_nome'] ?></td>
		<td><a class="btn btn-primary" href ="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a>
		<td>
			<form action="remove-produto.php?id=<?=$produto['id']?>" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>" />
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
<?php
	endforeach
?>

<?php include("rodape.php")?>