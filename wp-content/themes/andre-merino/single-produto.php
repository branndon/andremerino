<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); 
$pageID = get_the_ID(); // getting page id

?>

<section>

	<div class="palco colunas-09">
		<article class="single_post grid colunas-12">
			<div class="back grid colunas-02">
				<a href="javascript:javascript:history.go(-1)" class="back_button">voltar</a>
			</div>
			
			<div class="title_page grid colunas-10">
				<?php echo '<h1><strong>' . get_the_title() . '</strong></h1>'; ?>
			</div>

			<div class="title_post grid colunas-12">
				<?php echo '<h2></h2>'; ?>
			</div>

			<div class="image_principal grid colunas-04">
				<?php  while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail() ?>
					</a>
				<?php endwhile; ?>

				<a href="#" class="atendimento_produto">atendimento e vendas</a>
			</div>

			<div class="content_produto grid colunas-08">
				<?php  while ( have_posts() ) : the_post(); ?>
					<p><?php the_content() ?></p>
					<?php listar_galeria_produto($pageID); ?>
				<?php endwhile; ?>
			</div>

		</article>
	</div>

	<div class="content_posts palco colunas-03">
		<div class="title_page grid colunas-10">
			<h1>outros <strong>produtos</strong></h1>
		</div>

		<ul class="single_page">
			<?php query_posts( 'posts_per_page=3&cat=$pageID' ); ?>
			<?php  while ( have_posts() ) : the_post(); ?>
				<li class="post grid colunas-12">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail() ?>
					</a>										
				</li>
			<?php endwhile; ?>
		</ul>		
	</div>

</section>
<?php get_footer(); ?>