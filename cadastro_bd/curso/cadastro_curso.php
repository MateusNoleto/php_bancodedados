<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" 
		      method="GET">
			<label for="id_novocurso">
			Nome do curso:
			</label>
			<input type="text" name="novocurso" id="id_novocurso">
			<br>
            <label for="id_carga">
            Carga horária:
            </label>
            <input type="number" name="carga" id="id_carga">
            <br>
            <label for="id_data">
			Data de início:
			</label>
            <input type="date" name="data" id="id_data">
			<?php 
            
            
            ?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>