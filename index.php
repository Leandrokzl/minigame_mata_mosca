<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Game Mata Mosquito</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript">
		function iniciarJogo() {
			var nivel = document.getElementById('nivel').value
			if (nivel =='') {
				alert('Selecione um nível para iniciar o jogo')
				return false
			}
			window.location.href = 'app.php?' + nivel
		}
	</script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="d-flex justify-content-center">
					<img src="imagens/game.png">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="d-flex justify-content-center">
					<div class="mb-2">
						<select class="form-control" id="nivel">
							<option value="">--Selecionar o Nivel--</option>
							<option value="normal">Natan</option>
							<option value="dificil">Leandro</option>
							<option value="chucknorris">Iuri</option>
						</select>
					</div>		
				</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col">
				<div class="d-flex justify-content-center">
					<button type="button" class="btn btn-danger btn-lg" onclick="iniciarJogo()">Iniciar Jogo</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>