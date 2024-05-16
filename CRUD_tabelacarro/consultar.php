<?php 
	include("./inc/header.php")
?>
	<h3 align = center> Tabela CRUD sobre Carros - Consulta</h3>
<?php
function convertedata($data){
		
		$novadata = new DateTime($data);
		return $novadata->format("d/m/Y");
	}
	include_once('conexao.php');
	// recuperando 
	$codigo = $_POST['id'];

	// criando a linha do  SELECT
	$sqlconsulta =  "select * from tabelacarro where id = $codigo";
	
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlconsulta);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		$num = @mysqli_num_rows($resultado);
		if ($num==0){
		echo "<b>Id: </b>não localizado !!!!<br><br>";
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		exit;		
		}else{
			$dados=mysqli_fetch_array($resultado);
		}
	} 
	if (empty($dados['foto'])){
			$imagem = 'SemImagem.png';
		}else{
			$imagem = $dados['foto'];
		}
$id = base64_encode($dados['id']);
?>
<form name="produto" enctype="multipart/form-data" action="alterar.php" method="post" align = center>
<b>Id:</b><br> <input type="number"  style="width:500px "   value="<?php echo $dados['id']; ?>" readonly required="required" ><br><br>
<b>Modelo:</b><br><input type="text"   style="width:500px" value="<?php echo $dados['modelo']; ?>" readonly ><br><br>
<b>Marca: </b><br><input type="text"   style="width:500px" value="<?php echo $dados['marca']; ?>" readonly ><br><br>
<b>Ano: </b><br> <input type="text" style="width:500px" value="<?php echo $dados['ano']; ?>" readonly ><br><br>
<b>DataCad:</b><br><input type="text" style="width:500px" value="<?php echo convertedata($dados['datacad']) ?>" readonly > <br><br>
<b>Foto:</b><br><?php echo "<img src='imagens/$imagem'  >";?><br><br>
</form>		
<input type='button' onclick="window.location='index.php';" value="Voltar">
</body>
</html>
