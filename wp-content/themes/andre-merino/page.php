<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>
	
	<div class="palco colunas-09">
		<article>
			<?php
				echo '<h1>A <strong>empresa</strong></h1>';

				// echo '<p>' . the_content() . '</p>' ;

				// if( get_post_meta( get_the_ID(), '_galeria', true ) == 'on' )
				// 	listar_galeria( get_the_ID() );

				// if( get_post_meta( get_the_ID(), '_comentario', true ) == 'on' )
				// 	echo '
				// 		<div class="comentarios">
				// 			<div class="fb-comments" data-width="610" data-href="' . get_bloginfo( 'url' ) . '" data-numposts="5" data-colorscheme="light"></div>
				// 		</div>
				// 	';
			?>

			<nav class="submenu_empresa">
				<ul>
					<li><a href="#" class="icon quem_somos" title="Quem Somos">quem somos</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/empresa/missao/" class="icon missao" title="missão">missão</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/#" class="icon historia" title="História">história</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/#" class="icon estrutura" title="Estrutura">estrutura</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/#" class="icon nosso_negocio" title="Nosso Negócio">nosso negócio</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/#" class="icon segmentos" title="Segmentos">segmentos</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/#" class="icon projetos" title="Projetos">projetos</a></li>
				</ul>
			</nav>
			<div class="content_title">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/quem_somos_topo.jpg" />
				<div class="subtitle">
					<h4>nossa qualidade é <strong>quem somos</strong></h4>
				</div>
			</div>

			<div class="content">
				<?php  while ( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
			</div>

		</article>
	</div>

	<div class="palco colunas-03 sidebar_page">
		<section id="contato" class="sidebar_interna palco colunas-12">
			<h3 class="fontSize20">contato e localização</h3>
			<figure></figure><hr>
			<div class="grid colunas-12">
				<div class="content_phone">
					<div class="box box_phone">
						<div class="center_div">
							<a href="http://www.mazurky.com.br/atendimento/vendas/" target="_self" class="icon icon_phone" title="+55 11 4509-6008">+55 11 4509-6008</a>
						</div>
					</div>
					
					<div class="box box_email">
						<div class="center_div">
							<a href="mailto:mazurky@mazurky.com.br" target="_self" class="icon icon_email" title="mazurky@mazurky.com.br">mazurky@mazurky.com.br</a>
							<a href="http://www.mazurky.com.br/atendimento/vendas/" target="_self" class="icon icon_fax" title="+55 11 4509-6015 (fax)">+55 11 4509-6015 (fax)</a>
						</div>							
					</div>
					
					<div class="box_google_maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1826.3511760769074!2d-46.559461999999996!3d-23.722320999999596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4177542b2b99%3A0x3fc6659940d709d6!2sRua+das+Orquideas%2C+485+-+Vila+Marchi!5e0!3m2!1spt-BR!2sus!4v1403013927513" width="245" height="190" frameborder="0" style="border:0"></iframe>
					</div>

					<img src="<?php bloginfo( 'template_directory' ); ?>/images/arvore.png">

				</div>
			</div>
		</section>
	</div>
	
</section>
<?php get_footer(); ?>