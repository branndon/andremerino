<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>
	<?php //query_posts('posts_per_page=4'); //The Query ?>

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

			<div class="content_posts palco colunas-12">
				<?php listar_galeria_banco_imagens(237); ?>
			</div>
			
			<p>As imagens de produtos, de estrutura da fábrica e diretores Mazurky são de divulgação exclusiva da Mazurky e os créditos dos fotógrafos devem ser respeitados. Faça contato para obter orientação para uso das imagens.</p>

			<p>Fotógrafos Mazurky:<br/>
			Roberto Konda<br/>
			Haroldo Nogueira<br/>
			Patrícia Soares Lamelza</p>


		</article>
	</div>

	<div class="palco colunas-4">
		
	</div>

	<figure></figure>

</section>
<?php get_footer(); ?>