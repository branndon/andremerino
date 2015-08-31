<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>

	<div class="palco colunas-09">
		<article class="single_post grid colunas-12">
			<div class="back grid colunas-02">
				<a href="#" class="back_button">voltar</a>
			</div>
			
			<div class="title_page grid colunas-10">
				<h1>sala de imprensa: <strong>notícias</strong></h1>
			</div>

			<div class="title_post grid colunas-12">
				<?php echo '<h2>' . get_the_title() . '</h2>'; ?>
			</div>

			<?php  while ( have_posts() ) : the_post(); ?>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>

			<p class="date"><em>Publicado em <?php the_date('d/m/Y'); ?></em></p>

			<div class="share">
				Compartilhar:
			</div>
		</article>
	</div>

	<div class="content_posts palco colunas-03">
		<div class="title_page grid colunas-10">
			<h1>outras <strong>notícias</strong></h1>
		</div>

		<ul class="single_page">
			<?php query_posts('posts_per_page=3'); while ( have_posts() ) : the_post(); ?>
				<li class="post grid colunas-12">
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
						<p><?php echo wp_html_excerpt( wp_strip_all_tags( get_the_content() ), 120, '...' ); ?></p>
					</a>										
				</li>
			<?php endwhile; ?>
		</ul>		
	</div>

</section>
<?php get_footer(); ?>