<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Gerenciar Postagens</title>
</head>

<body>
	
	<h2>
		Gerenciar Postagens | <a href="add-post.php" title="Adicionar">Adicionar</a>
	</h2>

	<?php for( $i = 1; $i <= 10; $i++ ): ?>
	
	<hr>
	<h2>
		<a href="#" title="#">
			Lorem ipsum dolor sit amet
		</a>
	</h2>

	<p>
		por <b>Lucas Pires</b>
		em <b>06/08/2014</b> |
		Visitas <b>130</b>
	</p>

	<p>
		<a href="#" title="Ativar">Ativar</a> |
		<a href="#" title="Desativar">Desativar</a> |
		<a href="#" title="Editar">Editar</a> |
		<a href="#" title="Deletar">Deletar</a>
	</p>

	<?php endfor; ?>

</body>
</html>