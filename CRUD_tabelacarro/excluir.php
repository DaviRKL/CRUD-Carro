<?php 
	include("./inc/header.php")
?>
	
	<h3 align = center> Tabela CRUD sobre Carros - Exclusão - Consulta do Produto</h3>
<?php
	include_once('conexao.php');
	// recuperando 
	$codigo = $_POST['id'];

	// criando a linha do  DELETE
	$sqldelete =  "delete from  tabelacarro where id = '$codigo'";
	
    		
	// executando instru��o SQL
	$resultado = @mysqli_query($conexao, $sqldelete);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		echo "Registro Excluído com Sucesso";
		
	} 
	mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='exclusao.php';" value="Voltar">
</body>
</html>
