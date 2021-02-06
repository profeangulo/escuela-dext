<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astrid
 */

?>

		<!--</div>-->
	</main>

	<footer>	
		<article>
			<p>Contáctanos en</p>
            <nav id="social-footer">
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
		</article>
		
		<article>
			<nav>
				<a href="https://www.servirinorte.com/" lang="es" title="Inicio">Inicio</a>
                <a href="https://dext.com.co/nuestra-escuela/" lang="es" title="Nuestra Escuela">Nuestra Escuela</a>
                <a href="https://dext.com.co/cursos-especializados/" lang="es" title="Cursos">Cursos Especializados</a>
			</nav>
			
			<nav>
                <a href="https://dext.com.co/liveonline/" lang="es" title="LIVEONLINE">LIVEONLINE</a>
                <a href="https://dext.com.co/cursos-intensivos/" lang="es" title="Cursos Intensivos">Cursos Intensivos</a>
                <a href="https://dext.com.co/dextblog/" lang="es" title="DEXT Blog">DEXT Blog</a>
			</nav>
		</article>
		
		<a href="https://dext.com.co/" lang="es" title="DEXT - Escuela de Tecnologías Digitales" id="logo-foo">
			<img src="https://dext.com.co/wp-content/themes/astrid/dext-01.svg" width="500" height="100" alt="DEXT - Escuela de Tecnologías Digitales">
		</a>
		
		<a href="https://www.angulodigital.co/" id="to-angulo" title="Diseño Web por ANGULO Digital" target="_blank"></a>
	</footer>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script>
	jQuery(document).ready(function($){
		$('#box-slick-top').slick({
			slidesToShow: 1,
  			slidesToScroll: 1,
  			autoplay: true,
  			autoplaySpeed: 300,
			dots: false,
  			infinite: true,
  			speed: 500,
  			fade: true,
  			cssEase: 'linear',
			pauseOnHover: false,
			arrows: false
		});
		$('#slick-slider').slick({
			slidesToShow: 6,
  			slidesToScroll: 6,
  			autoplay: true,
  			autoplaySpeed: 1000,
			dots: false,
  			infinite: true,
  			speed: 500,
  			fade: false,
  			cssEase: 'linear',
			pauseOnHover: false,
			arrows: false
		});
		
		/**/
		
        $('#mobile-menu').css('right','-100%');
		$('#a-mobile-close').hide();
		
		$('#a-mobile').click(function(){
			$('#mobile-menu').animate({
				right: 0
			},300,'easeOutExpo');
			$('#a-mobile-es').hide();
			$('#a-mobile-close').show();
			event.preventDefault();
		});
		
		$('#a-mobile-close').click(function(){
			$('#mobile-menu').animate({
				right: '-100%'
			},300,'easeOutExpo');
			$('#a-mobile-es').show();
			$('#a-mobile-close').hide();
			event.preventDefault();
		});
	});
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

</body>
</html>