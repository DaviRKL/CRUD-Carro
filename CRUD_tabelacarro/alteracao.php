<?php
	include ("./inc/header.php")
?>

<h3 align=center> Tabela CRUD sobre Carros - Alteração</h3>
<form name="produto" action="veralteracao.php" method="post" align=center>
	<b>Insira o Id do carro que deseja alterar:</b><br> <input type="number" name="id" style="width:500px"
		required="required"><br><br>
	<input type="submit" value="Ok">
	<input type="reset" value="Limpar">
	<input type='button' onclick="window.location='index.php';" value="Voltar">
</form>
</body>

</html>