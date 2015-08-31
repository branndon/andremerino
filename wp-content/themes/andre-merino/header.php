<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php
		if( $is_IE )
			echo '
				<script src="' . get_bloginfo( 'template_directory' ) . '/crossbrowser/html5.js"></script>
				<link rel="stylesheet" href="' . get_bloginfo( 'template_directory' ) . '/crossbrowser/html5.css" type="text/css" />
			';

		if( $is_gecko )
			echo '<style> body { margin-top: -32px; } </style>';
	?>

	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/custom.css" type="text/css" />
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.png" type="image/x-icon" />

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/font-awesome-4.4.0/css/font-awesome.min.css">

	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/dinamismo.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/validacoes.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/slider.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/carrossel.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/galeria.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/mascaras.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/mapa-automatico.js"></script>


		<script src = "<?php bloginfo( 'template_directory' ); ?>/js/jquery.easing-1.3.js"></script>
		
		<!-- iosSlider plugin -->
		<script src = "<?php bloginfo( 'template_directory' ); ?>/js/jquery.iosslider.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.iosSlider').iosSlider({
					desktopClickDrag: true,
					snapToChildren: true,
					infiniteSlider: true,
					snapSlideCenter: true,
					navSlideSelector: '.sliderContainer .slideSelectors .item',
					navPrevSelector: '.sliderContainer .slideSelectors .prev',
					navNextSelector: '.sliderContainer .slideSelectors .next',
					onSlideComplete: slideComplete,
					onSliderLoaded: sliderLoaded,
					onSlideChange: slideChange,
					autoSlide: true,
					scrollbar: true,
					scrollbarContainer: '.sliderContainer .scrollbarContainer',
					scrollbarMargin: '0',
					scrollbarBorderRadius: '0',
					keyboardControls: true
				});
			});
			
			function slideChange(args) {
				$('.sliderContainer .slideSelectors .item').removeClass('selected');
				$('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
			}
			
			function slideComplete(args) {
				if(!args.slideChanged) return false;
				$(args.sliderObject).find('.text1, .text2').attr('style', '');

				$(args.currentSlideObject).find('.text1').animate({
					left: '30px',
					opacity: '0.8'
				}, 700, 'easeOutQuint');

				$(args.currentSlideObject).find('.text2').delay(200).animate({
					left: '30px',
					opacity: '0.8'
				}, 600, 'easeOutQuint');				
			}
			
			function sliderLoaded(args) {					
				$(args.sliderObject).find('.text1, .text2').attr('style', '');
				
				$(args.currentSlideObject).find('.text1').animate({
					left: '30px',
					opacity: '0.8'
				}, 700, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(200).animate({
					left: '30px',
					opacity: '0.8'
				}, 600, 'easeOutQuint');
				
				slideChange(args);
			}
		</script>

	<?php wp_head(); ?>

	<!-- <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50618679-1', 'guiadapraiagrande.com');
		ga('send', 'pageview');
	</script> -->
</head>

<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=378224022305498";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<header>
		<?php
			if( is_home() || is_front_page() ) $marca = "h1";
			else $marca = "div";
		?>

		<div class="top-header">
			<section>
				<div class="palco colunas-05 content-address">
						<p>Tel.: <strong>(13) 8888-8888</strong> - Av. Brasil, <strong>600</strong> - Praia grande / SP</p>
				</div>

				<div class="palco colunas-04 content-smm right">
					<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube-play"></i></a>
					<?php get_search_form(); ?>
				</div>
			</section>
		</div>

		<div class="main-header">
			<section>
				<div class="palco colunas-03 content-logo">
					<!-- logo -->
					<div class="palco colunas-04">
						<<?php echo $marca; ?> id="logo">
							<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
						</<?php echo $marca; ?>>
					</div>
				</div>
				<div class="palco colunas-08 content-menu right">
					<!-- <ul>
						<li class="active"><a href="#">home</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Palestras</a></li>
						<li><a href="#">Fotos</a></li>
						<li><a href="#">Parceiros</a></li>
						<li><a href="#">Clientes</a></li>
						<li><a href="#">Contato</a></li>
					</ul> -->
					<?php wp_nav_menu( array( 'menu' => 'Menu principal', 'menu_class' => 'responsivo' ) ); ?>
				</div>
			</section>
		</div>
	</header>


<!-- 	<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
		echo '<div id="trilha" class="limpo">';
			echo '<section>';
				echo '<p class="titulo">Você está aqui:</p>';
				yoast_breadcrumb( '<p class="breadcrumbs">', '</p>' );
			echo '</section>';
		echo '</div>';
	} ?> -->

	<main>