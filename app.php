<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Game Mata Mosquito</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="jogo.js"></script>
</head>
<body onresize="ajustarTamanhoPalcojogo()">
	
	<div class="painel">
		<div class="vida">	
			<img id='v1' src="imagens/coracao_cheio.png">
			<img id='v2' src="imagens/coracao_cheio.png">
			<img id='v3' src="imagens/coracao_cheio.png">

		</div>
		<div class="cronometro">Tempo restante: <span id="cronometro"></span></div>
		
	</div>


	<script >
		document.getElementById('cronometro').innerHTML = tempo

		var criarmosca = setInterval(function() {
			posicaoRandomica()
		}, criarmoscaTempo)
	</script>

</body>
</html>