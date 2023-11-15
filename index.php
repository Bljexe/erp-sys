<?php

// Carrega o arquivo de conexão com o banco de dados
require_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - <?php echo SISTEMA ?></title>

	<!-- JQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

	<!-- Particles.js -->
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

	<!-- FONTS -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

	<link rel="stylesheet" href="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-button.css">


	<!-- CSS -->
	<style>
		body {
			margin: 0;
			overflow: hidden;
			background-color: #000;
			font-family: 'Roboto', sans-serif;
		}

		#particles-js {
			position: absolute;
			width: 100%;
			height: 100%;
			z-index: -1;
		}

		.login-container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			color: #fff;
			z-index: 1;
		}

		.login-box {
			background-color: white;
			padding: 50px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

		.login-box h2 {
			margin-bottom: 20px;
			color: #000;
		}

		.login-form {
			max-width: 300px;
			margin: auto;
		}

		.login-form input {
			margin-bottom: 10px;
			padding: 10px;
			border-radius: 5px;
			background-color: rgba(255, 255, 255, 0.8);
			color: #000;
			width: 100%;
		}

		.login-form button {
			background-color: black;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 100%;
			transition: background-color 0.3s ease;
		}

		.login-form button:hover {
			background-color: #0056b3;
		}

		.login-header {
			margin-bottom: 20px;
			overflow: hidden;
			border-radius: 5px;
		}

		.login-header img {
			max-width: 100%;
			height: auto;
			border-radius: 5px;
		}
	</style>
</head>

<body>

	<!-- Adiciona a div para a animação de partículas -->
	<div id="particles-js"></div>

	<div class="login-container">
		<div class="login-box">
			<div class="login-header">
				<div class="bg-gradient-primary shadow-primary border-radius-lg px-3 py-3" style="width: 250px;">
					<img src="./img/logo.jpg" class="w-100 border-radius-lg">
				</div>
			</div>
			<h2>Login - <?php echo SISTEMA ?></h2>
			<div class="login-form">
				<form role="form" method="POST" action="autenticar.php">
					<div class="mb-3">
						<input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
					</div>
					<div class="mb-3">
						<input type="password" class="form-control" name="senha" placeholder="Senha" required>
					</div>
					<button type="submit" class="btn btn-login">Entrar</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Script para inicializar a animação de partículas -->
	<script>
		particlesJS('particles-js', {
			particles: {
				number: {
					value: 80,
					density: {
						enable: true,
						value_area: 800
					}
				},
				color: {
					value: '#ffffff'
				},
				shape: {
					type: 'circle',
					stroke: {
						width: 0,
						color: '#000000'
					},
					polygon: {
						nb_sides: 5
					},
					image: {
						src: 'img/github.svg',
						width: 100,
						height: 100
					}
				},
				opacity: {
					value: 0.5,
					random: false,
					anim: {
						enable: false,
						speed: 1,
						opacity_min: 0.1,
						sync: false
					}
				},
				size: {
					value: 3,
					random: true,
					anim: {
						enable: false,
						speed: 40,
						size_min: 0.1,
						sync: false
					}
				},
				line_linked: {
					enable: true,
					distance: 150,
					color: '#ffffff',
					opacity: 0.4,
					width: 1
				},
				move: {
					enable: true,
					speed: 6,
					direction: 'none',
					random: false,
					straight: false,
					out_mode: 'out',
					bounce: false,
					attract: {
						enable: false,
						rotateX: 600,
						rotateY: 1200
					}
				}
			},
			interactivity: {
				detect_on: 'canvas',
				events: {
					onhover: {
						enable: true,
						mode: 'repulse'
					},
					onclick: {
						enable: true,
						mode: 'push'
					},
					resize: true
				},
				modes: {
					grab: {
						distance: 400,
						line_linked: {
							opacity: 1
						}
					},
					bubble: {
						distance: 400,
						size: 40,
						duration: 2,
						opacity: 8,
						speed: 3
					},
					repulse: {
						distance: 200,
						duration: 0.4
					},
					push: {
						particles_nb: 4
					},
					remove: {
						particles_nb: 2
					}
				}
			},
			retina_detect: true
		});
	</script>

	<a id="robbu-whatsapp-button" class="right" target="_blank" href="https://api.whatsapp.com/send?phone=41984835936&text=Ol%C3%A1,%20gostaria%20de%20contratar%20o%20sistema!">
		<img src="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-icon.svg">
	</a>
</body>

</html>