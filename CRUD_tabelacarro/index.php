<?php
	include ("./inc/header.php")
?>
<h3 align=center>Visão geral dos carros</h3>
<form method="post" action="filtrogeral.php" class="form-inline">
  <label for="cars" class="sr-only">Escolha uma marca de carro:</label>
  <select id="cars" name="cars" class="form-select filtro mr-3">
    <option value="ford">Ford</option>
    <option value="jeep">Jeep</option>
    <option value="porsche">Porsche</option>
    <option value="toyota">Toyota</option>
    <option value="nissan">Nissan</option>
  </select>
  <input class="btn btn-primary" type="submit" value="Selecionar">
</form>

<?php
function convertedata($data)
{

	$novadata = new DateTime($data);
	return $novadata->format("d/m/Y");
}

include_once ('conexao.php');

// ajustando a instrução select para ordenar por produto
$query = mysqli_query($conexao, "select * from tabelacarro order by id");

if (!$query) {
	echo '<input type="button" class="btn btn-primary" onclick="window.location=' . "'index.php'" . ';" value="Voltar"><br><br>';
	die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
}
?>
<div class="container">
	<div class="row">
		<?php
		while ($dados = mysqli_fetch_array($query)) {
			$id = base64_encode($dados['id']);
			$foto = !empty($dados['foto']) ? $dados['foto'] : 'SemImagem.png';
			?>
			<div class="col-md-4">
				<div class="card mb-4">
					<img src="imagens/<?php echo $foto; ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo $dados['modelo']; ?></h5>
						<p class="card-text"><?php echo $dados['marca']; ?></p>
						<p class="card-text"><small class="text-muted">Ano: <?php echo $dados['ano']; ?></small></p>
						<p class="card-text"><small class="text-muted">Data de Cadastro:
								<?php echo convertedata($dados['datacad']); ?></small></p>
						<a href="verproduto.php?id=<?php echo $id; ?>" class="btn btn-ver">Ver carro</a>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>
<?php
	mysqli_close($conexao);
?>
<br>
</body>

</html>
<?php
include ("./inc/footer.php")
	?>