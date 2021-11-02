<section class="main-bg"
	
	<?php 

		if ($url === 'sistemas') {
			echo 'style="background-image: url(assets/images/bg-sistemas.jpg);"';
		}

	?>

>
        <div class="overlay"></div>
        <div class="container">
            <h2 class="wow bounceInLeft">
            	<?php if ($url === 'home'): ?>
            		Especialista em gerar resultados<br /> para o seu negócio!</h2>
            	<?php endif; ?>
            	<?php if ($url === 'sistemas'): ?>
            		Sistemas Inteligentes para Sua Empresa</h2>
            	<?php endif; ?>
            <p class="wow bounceInLeft">
            	<?php if ($url === 'home'): ?>
            		Soluções em desenvolvimento de aplicativos, sites e sistemas. Seu negócio estará em um outro patamar e receberá destaque perante a concorrência. Atendimento qualificado e diferenciado, focado nas suas necessidades.
            	<?php endif; ?>
            	<?php if ($url === 'sistemas'): ?>
            		Desenvolvemos sistemas únicos e personalizados para automatizar sua empresa e garantir praticidade, autonomia e resultados.
            	<?php endif; ?>

                
			</p>
            <a href="https://wa.me/+5511996531308?text=Ol%C3%A1,%20estou%20entrando%20em%20contato%20atrav%C3%A9s%20do%20seu%20site" target="_blank" class="btn-contato wow bounceInLeft">
               
               <?php if ($url === 'home'): ?>
               	<i class="fab fa-whatsapp"></i> 
               		Conversar no WhatsApp
               	<?php endif; ?>
               	<?php if ($url === 'sistemas'): ?>
               		Ver Nossos Produtos
               	<?php endif; ?>
            </a>
            <!-- btn-contato -->
        </div>
        <!-- container -->
    </section>
    <!-- main-bg -->