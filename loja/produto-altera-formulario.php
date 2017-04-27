<?php 
	require_once("cabecalho.php");
	require_once("banco-categoria.php");
	require_once("banco-produto.php");
	require_once("logica-usuario.php");

	verificaUsuario();

	$id = $_GET['id'];
	$produto = buscarProduto($conexao, $id);
	$categorias = listaCategorias($conexao);
	 ?>

	<h1>Alterando Produto</h1>
	<form action="altera-produto.php" method="post">
		<table class="table">
			<input type="hidden" name="id" value="<?=$produto['id']?>"/>
			
			<?php include ("formulario-produto-base.php");?>
			
			<tr>
				<td><input type="submit" value="Alterar!" class="btn btn-primary"/></td>
			</tr>
			</table>
	</form>
<?php include("rodape.php"); ?>