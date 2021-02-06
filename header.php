<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astrid
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	
	<link rel="stylesheet" href="https://dext.com.co/wp-content/themes/astrid/header.css">
	<link rel="stylesheet" href="https://dext.com.co/wp-content/themes/astrid/footer.css">
	<link rel="stylesheet" href="https://dext.com.co/wp-content/themes/astrid/menu-mobile.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161850572-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-161850572-1');
	</script>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '788055082022526');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=788055082022526&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
	<aside id="mobile-menu">
        <a href="#" id="a-mobile"></a>
        <a href="#" id="a-mobile-close"></a>
		
        <nav id="links-mobile">
			<a href="https://dext.com.co/" lang="es" title="Inicio">Inicio</a>
			<a href="https://dext.com.co/nuestra-escuela/" lang="es" title="Nuestra Escuela">Nuestra Escuela</a>
			<a href="https://dext.com.co/liveonline/" lang="es" title="LIVEONLINE">LIVEONLINE 🔴</a>
			<a href="https://dext.com.co/cursos/" lang="es" title="Cursos Especializados">Cursos Especializados</a>
			<a href="https://dext.com.co/rutas-aprendizaje/" lang="es" title="Rutas de Aprendizaje">Rutas de Aprendizaje</a>
			<a href="https://dext.com.co/dextblog/" lang="es" title="DEXT Blog">DEXT Blog</a>
		</nav>
		
		<hr>
		
		<nav id="block-datos-mobile">
			<a href="https://goo.gl/maps/TPvz4eN6oN82" target="_blank" rel="external">
				<i class="fas fa-map-marker-alt"></i>
				<span>Cra. 59 # 66-86 - Barranquilla.</span>
			</a>
			<a href="tel:+573113969862">
				<i class="fas fa-phone"></i>
				<span>Llámanos al 311 396 9862</span>
			</a>
			<a href="tel:+573146089813">
				<i class="fas fa-phone"></i>
				<span>Llámanos al 314 608 9813</span>
			</a>
			<a href="mailto:hola@dext.com.co" title="Escríbenos a hola@dext.com.co">
				<i class="fas fa-envelope"></i>
				<span>hola@dext.com.co</span>
			</a>
		</nav>
		
		<hr>
		
		<nav id="block-social">
			<a href="https://www.facebook.com/dextco/" title="DEXT en Facebook" target="_blank" rel="external">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a href="https://www.instagram.com/dextco/" title="DEXT en Instagram" target="_blank" rel="external">
				<i class="fab fa-instagram"></i>
			</a>
			<a href="https://www.linkedin.com/company/dextco" title="DEXT en LinkedIn" target="_blank" rel="external">
				<i class="fab fa-linkedin-in"></i>
			</a>
			<a href="https://twitter.com/dextco" title="DEXT en Twitter" target="_blank" rel="external">
				<i class="fab fa-twitter"></i>
			</a>
			<a href="https://api.whatsapp.com/send?phone=573113969862" target="_blank" lang="es" title="¡Hablemos por WhatsApp!">
				<i class="fab fa-whatsapp"></i>
			</a>
		</nav>
    </aside>
    
    <header id="masthead">
        <a href="https://dext.com.co/" lang="es" title="" id="logo" title="DEXT | Escuela de Tecnologías Digitales en Barranquilla y la Costa Caribe">
            <img src="https://dext.com.co/wp-content/themes/astrid/escuela-dext.svg" width="291" height="200" alt="DEXT | Escuela de Tecnologías para la Transformación Digital en Barranquilla y la Costa Caribe">
        </a>
        
        <article id="block-header">
            <nav id="mainnav">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav>
        </article>
    </header>
    
	<main id="content" class="site-content">