<?php
/*
	Template Name: Sustentabilidade
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>
	
	<div class="palco colunas-09">
		<article>
			<?php
				echo '<h1><strong>sustentabilidade</strong></h1>';
			?>

			<nav class="submenu_empresa">
				<?php if ( is_page( '73' ) ) : ?>
					<!-- no content -->
				<?php elseif ( is_page( '67' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/selo_iso.jpg" />
				<?php else : ?>
					<?php dynamic_sidebar('quem somos'); ?>
				<?php endif; ?>	

			</nav>	

			<div class="content_title">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/sustentabilidade_topo.jpg" />
				
				<div class="subtitle">
					<h4>compromisso com o <strong>meio ambiente</strong></h4>

				</div>
			</div>

			<div class="content">
				<?php  while ( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>

				<!-- mostra galeria página: estrtutura -->
				<?php if ( is_page( '13' ) ) : ?>
					<?php listar_galeria(13); ?>
				<?php endif; ?>	

			</div>

		</article>
	</div>

	<div class="palco colunas-03 sidebar_page">
		<section id="contato" class="sidebar_interna palco colunas-12">
			<h3 class="fontSize20">consciência</h3>
			<figure></figure><hr>
			<div class="grid colunas-12">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/icons/icons_sidebar_sustentabilidade.jpg" />
			</div>
		</section>
	</div>
	
</section>
<?php get_footer(); ?>