<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php 
	$url = isset($_GET['url']) ? addslashes($_GET['url']) : 'home';
?>
<head>
    <meta charset="UTF-8" />
    <title>GS7 DIGITAL - Desenvolvimento de Sistemas</title>
	<meta name="title" content="GS7 Digital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="GS7 Digital" />
    <meta name="description" content="Soluções em desenvolvimento de aplicativos, sites e sistemas. Seu negócio estará em um outro patamar e receberá destaque perante a concorrência. " />
	<meta name="keywords" content="gs7 digital, gs7digital, desenvolvimento de sites, desenvolvimento de sites em ferraz de vasconcelos, criação de sites em ferraz de vasconcelos, email profissional, como criar e-mail profissional, loja virtual em ferraz de vasconcelos, e-commerce em ferraz">
	<meta property="og:locale" content="pt_BR" />
    <link rel="icon" type="image/png" href="<?php echo INCLUDE_PATH; ?>assets/images/favicon.png" />
	<meta property="og:url" content="<?php echo INCLUDE_PATH; ?>" />
	<meta property="og:image:secure_url" content="<?php echo INCLUDE_PATH; ?>og-banner.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta name="language" content="pt-br" />
	<meta name="Robots" content="Index, Follow" />
    <meta name="revisit-after" content="1 Day" />
    <meta name="rating" content="General" />
    <meta name="copyright" content="GS7 Digital" />
    <meta name="Publisher" content="GS7 Digital" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/fonts/css/all.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css" />
    <?php if ($url == 'sistemas'): ?>
    	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/sistemas.css">
    <?php endif; ?>
</head>

<body>	

    <header>
        <div class="container">
            <div class="logo">
                <a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>assets/images/logo.png" alt="Logotipo da GS7 Digital" /></a>
            </div>
            <!-- logo -->
            <nav class="menu-desktop">
            <ul>
                <li <?php echo ($url === 'empresa') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>empresa">A Empresa</a></li>
                <li <?php echo ($url === 'produtos') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
                <li <?php echo ($url === 'clientes') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>clientes">Clientes</a></li>
                <li <?php echo ($url === 'sobre') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li <?php echo ($url === 'proposta') ? 'class="selected"' : ''; ?>><a class="btn-proposta" href="<?php echo INCLUDE_PATH; ?>proposta">SOLICITAR PROPOSTA</a></li>
            </ul>
        </nav>
        <!-- menu-deskop -->
        <nav class="menu-mobile">
            <h2><i class="fa fa-bars"></i></h2>
            <ul>
                <li <?php echo ($url === 'empresa') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>empresa">A Empresa</a></li>
                <li <?php echo ($url === 'produtos') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
                <li <?php echo ($url === 'clientes') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>clientes">Clientes</a></li>
                <li <?php echo ($url === 'sobre') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li <?php echo ($url === 'contato') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                <li class=" proposta <?php echo ($url === 'empresa') ? 'selected' : ''; ?>"><a href="<?php echo INCLUDE_PATH; ?>proposta">SOLICITAR PROPOSTA</a></li>
            </ul>
        </nav>
        <!-- menu-mobile -->
            <div class="clear"></div>
        </div>
        <!-- container -->
    </header>
	
	
	<?php 
		
		if (file_exists('pages/' . $url . '.php')) {
			
			require_once 'pages/' . $url . '.php';
			
		} else {
			
			echo 'PÁGINA NÃO ENCONTRADA!';
			
		}
		
	?>
	
	
	<footer class="footer">
		<section class="footer-links">
			<div class="container">
				<div class="endereco">
					<h5>Onde Estamos</h5>
					<p>Ferraz de Vasconcelos - São Paulo - Brasil</p>
					<p><a href="https://wa.me/+5511996531308?text=Ol%C3%A1,%20estou%20entrando%20em%20contato%20atrav%C3%A9s%20do%20seu%20site" target="_blank">(11) 99653-1308</a></p>
				</div>
				<!-- endereco -->
				<div class="links">
					<h5>Links Úteis</h5>
					<p><a href="https://wa.me/+5511996531308?text=Ol%C3%A1,%20estou%20entrando%20em%20contato%20atrav%C3%A9s%20do%20seu%20site" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></p>
				</div>
				<!-- links -->
				<div class="redes">
					<h5>Conecte-se Conosco</h5>
					<p><a href="https://www.facebook.com/gs7digital"><i class="fab fa-facebook-square"></i></a><a href="https://www.instagram.com/gs7sites/" target="_blank"><i class="fab fa-instagram"></i></a></p>
				</div>
				<!-- redes -->
			</div>
			<!-- container -->
		</section>
		<!-- footer-links -->
		<section class="footer-direitos">
			<div class="container">
				<p>Todos os direitos reservados</p>
			</div>
			<!-- container -->
		</section>
		<!-- footer-direitos -->
	</footer>
	<!-- footer -->
	<script src="<?php echo INCLUDE_PATH; ?>assets/fonts/js/all.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>assets/js/menu.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>assets/js/wow.min.js"></script>
	<script>
		wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 100
		});

		wow.init();
	</script>
	<script src="<?php echo INCLUDE_PATH; ?>assets/js/scripts.js"></script>
	</body>

</html>