<?php
/*
	Template Name: Política de Qualidade
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>
	
	<div class="palco colunas-09">
		<article>
			<?php
				echo '<h1>política de <strong>qualidade</strong></h1>';
			?>

			<nav class="submenu_empresa">
				<?php if ( is_page( '67' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/selo_iso.jpg" />
				<?php else : ?>
					<?php dynamic_sidebar('quem somos'); ?>
				<?php endif; ?>	

			</nav>	

			<div class="content_title">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/politica_qualidade_topo.jpg" />
				
				<div class="subtitle">
					<h4>ISO 9001, ISO 14001 e ISO 18001: <strong>conquista única no setor</strong></h4>

				</div>
			</div>

			<div class="content">
				<?php  while ( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>

				<!-- mostra galeria página: estrtutura -->
				<?php if ( is_page( 'estrutura' ) ) : ?>
					<?php listar_galeria(13); ?>
				<?php endif; ?>	

			</div>

		</article>
	</div>

	<div class="palco colunas-03 sidebar_page">
		<section id="contato" class="sidebar_interna palco colunas-12">
			<h3 class="fontSize20">qualidade atestada</h3>
			<figure></figure><hr>
			<div class="grid colunas-12">
				<div class="content_phone">
					<div class="box box_phone">
						<div class="center_div">
							<span class="icon icon_phone" title="+55 11 4509-6008"><div class="position_text">Conheça abaixo o resultado de nossa última pesquisa de satisfação:</div></span>
						</div>
					</div>
					
					<div class="box box_email">
						<div class="center_div">
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/grafico.jpg" />
							<p>A cada pedido, os clientes da Mazurky avaliam o atendimento recebido. Qualquer comentário que mereça ação corretiva é imediatamente tratado, e o cliente é devidamente informado sobre as providências tomadas.</p>
							<a href="<?php bloginfo( 'template_directory' ); ?>/downloads/certificados/certificado-iso-9001.pdf" target="_blank">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/certificados/thumb-certificado-iso-9001.jpg" alt="Certificado ISO 9001" /><br/>
								Certificado 9001
							</a>
							<a href="<?php bloginfo( 'template_directory' ); ?>/downloads/certificados/certificado-iso-14001.pdf" target="_blank">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/certificados/thumb-certificado-iso-14001.jpg" alt="Certificado ISO 14001" /><br/>
								Certificado 14001
							</a>
							<a href="<?php bloginfo( 'template_directory' ); ?>/downloads/certificados/certificado-iso-18001.pdf" target="_blank">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/certificados/thumb-certificado-iso-18001.jpg" alt="Certificado ISO 18001" /><br/>
								Certificado 18001
							</a>														
						</div>							
					</div>
				</div>
			</div>
		</section>
	</div>
	
</section>
<?php get_footer(); ?>