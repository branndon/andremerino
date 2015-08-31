<?php
/*
	Template Name: Imprensa
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>
	
	<div class="palco colunas-12">
		<article>
			<?php
				echo '<h1>sala de <strong>imprensa</strong></h1>';
			?>

			<nav class="submenu_empresa submenu_imprensa">
				<?php dynamic_sidebar('imprensa'); ?>
			</nav>	

			<div class="content_title">				
				<div class="subtitle"></div>
			</div>

			<div class="content">
				<?php  while ( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
			</div>

			<div class="content_posts palco colunas-12">
				<a href="#">
					<div class="post grid colunas-04">
						<div class="content_title">
							<h3>title</h3>
							<p>description</p>
						</div>
					</div>						
				</a>	
				
			</div>			

		</article>
	</div>
	
</section>
<?php get_footer(); ?>