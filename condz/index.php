<?php require 'config.php'; ?>
<?php 
	
	if (isset($_POST['acao'])) {

		if (!empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {
			header('Location: ' . INCLUDE_PATH . '?form=success');
		} else {
			header('Location: ' . INCLUDE_PATH . '?form=error');
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Condz - Sistema Multiplataforma para Gestão de Condomínios</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">
	</head>
	<body>
		<header class="cabecalho">
			<div class="container">
				<div class="logo">
					<img src="<?php echo INCLUDE_PATH; ?>assets/images/logo.png" alt="Condz - Sistema Multiplataforma para Gestão de Condomínios">
				</div>
				<div class="clear"></div>
			</div>
		</header>
		<!-- cabecalho -->
		<section class="banner">
			<div class="overlay"></div>
			<!-- overlay -->
			<div class="container">
				<div class="banner-subtitle">
					<h2>SEU CONDOMÍNIO<br> MERECE O MELHOR<br> SISTEMA DE GESTÃO <br>DO MERCADO</h2>
				</div>
				<!-- banner-subtitle -->
				<div class="banner-form">
					<form method="POST">
						<h3>Solicite o Contato<br> de um Consultor</h3>
						<input type="text" name="nome" placeholder="Nome" required>
						<input type="tel" name="telefone" placeholder="Telefone" required>
						<input type="email" name="email" placeholder="E-mail" required>
						<textarea placeholder="Qual a sua maior dificuldade na gestão do seu condomínio?" name="mensagem" required></textarea>
						<input type="submit" name="acao" value="SOLICITAR CONTATO">
					</form>
				</div>
				<!-- banner-form -->
				<div class="clear"></div>
				<!-- clear -->
			</div>
			<!-- container -->
		</section>
		<!-- banner -->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<?php
		if (isset($_GET['form'])) {
			if ($_GET['form'] === 'success') {
		?>
			<script>
				Swal.fire({
				  title: 'Ótimo!',
				  text: 'Mensagem recebida com sucesso! Em breve um consultor entrará em contato',
				  icon: 'success',
				  confirmButtonText: 'OK'
				})
			</script>
		<?php 
				} else if ($_GET['form'] === 'error') {
		?>
			<script>
				Swal.fire({
				  title: 'Atenção!',
				  text: 'Todos os campos do formulário devem ser preenchidos!',
				  icon: 'error',
				  confirmButtonText: 'OK'
				})
			</script>
		<?php
				}
			}

		?>
	</body>
</html>