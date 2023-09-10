<!DOCTYPE html>
<html>
<head>
	<title>ARRANCHAMENTO ONLINE - 51º BIS</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			height: 100vh;
			background-color: #058d24;
			color: #ecf804;
		}

		.header {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			height: 1/6;
			background-color: #024505;
			margin-bottom: 50px;
		}

		.title {
			font-size: 48px;
			padding: 20px;
			text-align: center;
			text-shadow: 1px 1px #000;
		}

		.cards {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			width: 80%;
		}

		.card {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 10px;
			width: 300px;
			height: 300px;
			border-radius: 5px;
			background-color: #03631a;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			text-align: center;
			color: #fff;
			font-size: 24px;
		}

		.card-title {
			font-size: 32px;
			margin-top: 20px;
			margin-bottom: 20px;
			text-shadow: 1px 1px #000;
		}

		.button {
			background-color: #f39c12;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 18px;
			transition: background-color 0.3s ease;
		}

		.button:hover {
			background-color: #e67e22;
		}
		.user-card {
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  padding: 20px;
  background-color: #556b2f;
  color: #ffff00;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="title">ARRANCHAMENTO ONLINE - 51º BIS</h1>
		</div>
		<div class="cards">
			<div class="card">
				<h2 class="card-title">Faça seu Arranchamento aqui.</h2>
				<button class="button">Arranchar-me</button>
			</div>
			<div class="card">
				<h2 class="card-title">Consulte seu histório de Arranchamento aqui.</h2>
				<button class="button">Histórico</button onclick="location.href='file:///C:/Users/kaue_/OneDrive/%C3%81rea%20de%20Trabalho/51BIS/arranchar_me.html'">Arranchar-me</button>
			</div>
			<div class="card">
				<h2 class="card-title">Consulte o cardapio da semana aqui.</h2>
				<button class="button">Cardapio</button>
			</div>
			<div class="card">
				<h2 class="card-title">Modo Furriel - Gerar Arranchamento Diário</h2>
				<button class="button">Gerar</button>
			</div>
		</div>
	</div>
	<div class="user-card">
		<p class="user-info">NOME DE USUÁRIO - COMPANHIA</p>
	  </div>
	  <script>
		const userInfo = document.querySelector('.user-info');
		
		// Obtém as informações do usuário armazenadas na sessionStorage
		const nome = sessionStorage.getItem("nome");
		const companhia = sessionStorage.getItem("companhia");
		
		// Atualiza o texto dentro de userInfo com o nome de usuário e companhia
		userInfo.textContent = `${nome} - ${companhia}`;
	  </script>	 
</body>
</html>
