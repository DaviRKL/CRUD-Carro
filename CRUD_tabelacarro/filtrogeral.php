<?php 
	include("./inc/header.php")
?>
	<h3 align = center> Tabela CRUD sobre Carros - Consulta</h3>
<?php
	include_once('conexao.php');
	
	$sqlmarca =$_POST['cars'];
	$sqlordem = "select * from tabelacarro where marca like '$sqlmarca'";
	
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlordem);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		$num = @mysqli_num_rows($resultado);
		if ($num==0){
		echo "<b>Marca: </b>não localizado !!!!<br><br>";
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		exit;
		}
		
        else{
echo "<table border='1px' align= center>";
	echo "<tr>
	<th width='30px' align='center'>Id</th>
	<th width='100px'>Modelo</th>
	<th width='250px'>Marca</th>
	<th width='100px'>Ano</th>
	<th width='100px'>DataCad</th>
	<th width='100px'>Foto</th>
	<tr>";			
		while($dados=mysqli_fetch_array($resultado)) 
		{
		echo "<tr>";
		echo "<td align='center'>". $dados['id']."</td>";
		echo "<td>". $dados['modelo']."</td>";
		echo "<td>". $dados['marca']."</td>";
		echo "<td>". $dados['ano']."</td>";
		echo "<td align='center'>". $dados['datacad']."</td>";		
		// buscando a na pasta imagem
		if (empty($dados['foto'])){
			$foto = 'SemImagem.png';
		}else{
			$foto = $dados['foto'];
		}
		$id = base64_encode($dados['id']);

		echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$foto' width='50px' heigth='50px'></a>";
		echo "</tr>";
		}
	}}
	echo "</table>";
	
	mysqli_close($conexao);
?>

		
<input type='button' onclick="window.location='index.php';" value="Voltar" style= "color: #106A72 ">
</body>
</html>
