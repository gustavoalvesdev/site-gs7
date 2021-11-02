<?php 

if ($url === 'home' || $url === 'sobre' || $url === 'contato'): ?>
	<nav class="menu-desktop">
            <ul>
                <li <?php echo ($url === 'home') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li <?php echo ($url === 'sobre') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li <?php echo ($url === 'contato') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <!-- menu-deskop -->
        <nav class="menu-mobile">
            <h2><i class="fa fa-bars"></i></h2>
            <ul>
                <li <?php echo ($url === 'home') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li <?php echo ($url === 'sobre') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li <?php echo ($url === 'contato') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <!-- menu-mobile -->
<?php endif; ?>

<?php if ($url === 'sistemas'): ?>
	<nav class="menu-desktop">
            <ul>
                <li <?php echo ($url === 'empresa') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>empresa">A Empresa</a></li>
                <li <?php echo ($url === 'produtos') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
                <li <?php echo ($url === 'clientes') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>clientes">Clientes</a></li>
                <li <?php echo ($url === 'sobre') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li <?php echo ($url === 'contato') ? 'class="selected"' : ''; ?>><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
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
            </ul>
        </nav>
        <!-- menu-mobile -->
<?php endif; ?>
