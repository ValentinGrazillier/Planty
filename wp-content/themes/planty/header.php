<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
		<?php get_template_part( 'template-parts/header/site-header' ); ?>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'liste-nav') ); ?>
			<ul class="liste-nav">
				<!-- Reprise de l'URL de page d'accueil et personnalisation du chemin pour chaque page -->
				<li><a href="<?php echo esc_url( home_url( '/index.php/nous-rencontrer/' ) ); ?>">Nous rencontrer</a></li>
				<!-- Ajout d'un hook permettant de rendre ce lien visible seulement si la personne est connectée à WordPress -->
				<?php if ( is_user_logged_in() ) { ?>
					<!-- Reprise de l'URL Admin de WordPress -->
					<li><a href="<?php echo esc_url( admin_url() ); ?>">Admin</a></li>
				<?php } ?>
				<!-- Attribution d'un ID pour faciliter le CSS -->
				<li id="commander"><a href="<?php echo esc_url( home_url( '/index.php/commander/' ) ); ?>">Commander</a></li>
			</ul>
		</nav>
	</header>
	
	<a class="skip-link screen-reader-text" href="#content"></a>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
