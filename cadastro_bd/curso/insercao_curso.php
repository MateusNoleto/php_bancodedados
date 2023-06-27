<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>
	<head>
	  <title>Cadastro de aluno - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do aluno informado em cadastro_aluno.php

  $novocurso = $_GET["novocurso"];
  $carga = $_GET["carga"];
  $data = $_GET["data"];
  
  include_once "../inc/conectabd.inc.php";
  $query = "INSERT INTO tb_curso 
            (ds_curso, nr_carga_horaria, dt_inicio) 
	    VALUES
            ('$novocurso', $carga, '$data');";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver alunos cadastrados</a>
 
 </body>
</html>

