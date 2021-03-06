<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Grid Template</title>
    <?php wp_head(); ?>
</head>
<body>
<header>    
	<div class="container">
        <div class="logo" style="height: 100px; background-color: #ccc; margin-bottom: 8px;">
        Logo
        </div>
        <nav style="height: 100px; background-color: #ccc;">
        Search and Navigation
        <?php //wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
        </nav>
    </div>
</header>
<div class="wrapper">

	<div class="container">
		<div class="columns-wide" style="height: 400px; width: 100%; background-color: #ccc; margin-bottom: 8px;">
			Gallérie d’images animer
		</div>
		<div class="columns-wide" style="height: 100px; width: 100%; background-color: #ccc;">
			Annonces importants
		</div>
	</div>

	<div class="container">
		<div class="grid-left">
			<div class="box">Notre école</div>
			<div class="box">La vie à Nouvelle-Querbes</div>
			<div class="box">Calendrier et communications</div>
			<div class="box">Implication des parents</div>
			<div class="box">Le coin des enfants</div>
		</div>
		<div class="grid-right">
			<div class="box-left">Événements à venir</div>
			<div class="box-left">Courrier du jeudi</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="columns-wide" style="height: 100px; width: 100%; background-color: #ccc; margin-top: 8px;">
			Bas de page avec logo CSMB, etc. Coordonnées, Bottin du personnel
		</div>
		</div>
	</footer>
</div> <!--// end wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/js/app.js"></script>
</body>
</html>