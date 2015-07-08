<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Editar Postagem : Minha Postagem</title>
</head>

<body>
	
	<h2>
		Editar Postagem | <a href="index.php" title="Voltar">Voltar</a>
	</h2>
	<hr>

	<form action="" method="post">

		<p>
			<label>Titulo</label><br>
			<input type="text" name="titulo">
		</p>

		<p>
			<label>Autor</label><br>
			<input type="text" name="autor">
		</p>

		<p>
			<label>Status</label><br>
			
			<select name="status">
				<option value="1" selected>Ativo</option>
				<option value="0">Inativo</option>
			</select>
		</p>

		<p>
			<label>Conteúdo</label><br>
			<textarea name="conteudo" cols="50" rows="15"></textarea>
		</p>

		<input type="submit" name="salvar" value="Salvar">
		
	</form>

</body>
</html>