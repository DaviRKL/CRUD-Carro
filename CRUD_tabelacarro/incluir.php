<?php 
	include("./inc/header.php")
?>
	<h3 align = center> Tabela CRUD sobre Carros - Inclusão</h3>

<?php
	include_once('conexao.php');
	// recuperando 
	$modelo= $_POST['modelo'];	
	$marca = $_POST['marca'];	
	$ano = $_POST['ano'];	
	$datacad = $_POST['datacad'];

	
$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["foto"]["tmp_name"]);
if($check !== false) {
echo "O arquivo é uma imagem - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "O arquivo não é imagem.";
$uploadOk = 0;
}
}

// Check file size
if ($_FILES["foto"]["size"] > 5000000) {
echo "Desculpe, seu arquivo é muito grande.";
$uploadOk = 0;
}



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Desculpe, somente arquivos JPG, JPEG, PNG & GIF são aceitos.";
$uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "Desculpe, não foi feito o upload do seu arquivo.";
// criando a linha de INSERT
$sqlinsert = "insert into tabelacarro(modelo, marca, ano, datacad, foto)values ( '$modelo', '$marca', '$ano', '$datacad', '$foto')";
}
// if everything is ok, try to upload file
 else {
if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
echo "O upload de ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " foi concluído.<br>";
$foto = basename ( $_FILES["foto"]["name"]);
				 // criando a linha de INSERT
$sqlinsert =  "insert into tabelacarro( modelo, marca, ano, datacad, foto)values ( '$modelo', '$marca', '$ano', '$datacad', '$foto')";

} else {
echo "Desculpe, ocorreu um erro ao fazer o upload do seu arquivo.";
}
}

	
	
	// executando instru��o SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		echo "Registro Cadastrado com Sucesso";
	} 
	mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='index.php';" value="Voltar">
</body>
</html>
