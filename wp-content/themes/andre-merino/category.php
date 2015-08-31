<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header();

?>
<section>
	<div class="palco colunas-12">
		<article class="category_default">
			<?php
				echo '<h1>sala de <strong>imprensa</strong></h1>';
			?>			
			<nav class="submenu_empresa submenu_imprensa">
				<?php dynamic_sidebar('imprensa'); ?>
			</nav>

			<div class="content">
				<?php if ( category_description() ) { ?>
					<p><?php echo category_description(); ?></p>
				<?php } ?>
			</div><br/>

			<?php if ( have_posts() ) : ?>

				<div class="content_posts palco colunas-12">
					<ul>
						<?php query_posts( 'posts_per_page=4&cat=' . $cat ); while ( have_posts() ) : the_post(); ?>
							<li class="post grid colunas-03">
								<a href="<?php the_permalink(); ?>">
									<h3><?php the_title(); ?></h3>
									<p><?php echo wp_html_excerpt( wp_strip_all_tags( get_the_content() ), 120, '...' ); ?></p>
								</a>										
							</li>
						<?php endwhile; ?>
					</ul>
				</div>

				<?php get_template_part( 'pagination' ); ?>

				<p id="quantidade">Total de posts: <span><strong><?php echo $wp_query->found_posts ?></strong></span></p>
			
			<?php else : ?>
				<p><strong>Nenhum post encontrado.</strong></p>
			<?php endif; ?>

		</article>
	</div>

	<div class="palco colunas-4">
		
	</div>

	<figure></figure>

</section>
<?php get_footer(); ?>