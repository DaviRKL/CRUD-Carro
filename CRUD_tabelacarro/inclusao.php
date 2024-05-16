<?php 
	include("./inc/header.php")
?>
	<h3 align = center> Tabela CRUD sobre Carros - Inclusão</h3>

<form name="produto" action="incluir.php" enctype="multipart/form-data" method="post" align = center>
<b>Modelo: </b><br>  <input type="text" name="modelo" style="width:500px"  required="required" ><br><br>
<b>Marca: </b><br> <input type="text" name= "marca" style="width:500px"  required="required" ><br><br>
<b>Ano: </b><br>  <input type="number" name="ano" style="width:500px"  required="required" ><br><br>
<b>DataCad: </b><br> <input type="date" name="datacad" style="width:500px" value="<?php echo $dados['datacad']; ?>"  required="required" > <br><br>
<b>Foto: </b><br> <input type="file" name="foto" style="width:500px"> <br><br>

<input type="submit" value="Ok">
<input type="reset" value="Limpar">
<input type='button' onclick="window.location='index.php';" value="Voltar">
</form>
</body>
</html>
