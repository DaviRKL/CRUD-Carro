<?php 
	include("./inc/header.php")
?>

<?php

	function convertedata($data){
		
		$novadata = new DateTime($data);
		return $novadata->format("d/m/Y");
	}

	include_once('conexao.php');
	// recuperando a informa��o da URL
	// verifica se par�metro est� correto e dento da normalidade 
	if(isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))){
			$id = base64_decode($_GET['id']);
	} else {
		header('Location: index.php');
	}
	// realizando a pesquisa com o id recebido
	$query = mysqli_query($conexao,"select * from tabelacarro where id = $id");

	if (!$query) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	}

	$dados=mysqli_fetch_array($query);
	
	echo "<table border='1px' align=center><td width='250px'>";
	if (empty($dados['foto'])){
			$imagem = 'SemImagem.png';
		}else{
			$imagem = $dados['foto'];
		}
	
	echo "<img src='imagens/$imagem'>";
	echo "<td width='500px' align= center>";
	
	//echo "<b>Data: </b>".convertedata($dados['data'])."<br><br>";	
	echo "<b>Id: </b>".$dados['id']."<br>";
	echo "<b>Marca: </b>".$dados['modelo']."<br>";
	echo "<b>Modelo: </b>".$dados['marca']."<br>";	
	echo "<b>Ano: </b>".$dados['ano']."<br>";	
	echo "<b>Data de cadastro: </b>".convertedata($dados['datacad'])."<br>";
	echo "</td></tr></table>";
	
	mysqli_close($conexao);
?>
<br>
<input type='button' onclick="window.location='geral.php';" value="Voltar">
</body>
</html>
