<?php
/*
	Template Name: Empresa
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section>
	
	<div class="palco colunas-09">
		<article>
			<?php
				echo '<h1>A <strong>empresa</strong></h1>';
			?>

			<nav class="submenu_empresa">
				<?php if ( is_page( 'clientes-e-parceiros' ) ) : ?>

				<?php elseif ( is_page( 'cases' ) ) : ?>
					<?php dynamic_sidebar('cases'); ?>
				<?php elseif ( is_page( 'qualidade' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/selo_iso.jpg" />
				<?php else : ?>
					<?php dynamic_sidebar('quem somos'); ?>
				<?php endif; ?>	

			</nav>	

			<div class="content_title">
				<?php if ( is_page( 'clientes-e-parceiros' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/clientes_e_parceiros_topo.jpg" />
				<?php elseif ( is_page( 'cases' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/cases_topo.jpg" />
				<?php elseif ( is_page( 'politica-qualidade' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/politica_qualidade_topo.jpg" />
				<?php elseif ( is_page( 'projetos' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/projetos_topo.jpg" />
				<?php elseif ( is_page( 'segmentos' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/segmentos_topo.jpg" />
				<?php elseif ( is_page( 'nosso-negocio' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/nosso_negocio_topo.jpg" />
				<?php elseif ( is_page( 'estrutura' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/nossa_estrutura_topo.jpg" />
				<?php elseif ( is_page( 'historia' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/historia_topo.jpg" />
				<?php elseif ( is_page( 'quem-somos' ) ) : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/missao_topo.jpg" />
				<?php else : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/empresa/quem_somos_topo.jpg" />
				<?php endif; ?>
				
				<div class="subtitle">
					<?php if ( is_page( 'clientes-e-parceiros' ) ) : ?>
						<h4>parceria e <strong>credibilidade</strong></h4>
					<?php elseif ( is_page( 'cases' ) ) : ?>
						<h4><strong>inovação</strong> com o programa eficiência energética</h4>
					<?php elseif ( is_page( 'politica-qualidade' ) ) : ?>
						<h4>ISO 9001, ISO 14001 e ISO 18001: <strong>conquista única no setor</strong></h4>
					<?php elseif ( is_page( 'projetos' ) ) : ?>
						<h4>nossa qualidade é o desenvolvimento de <strong>projetos</strong></h4>
					<?php elseif ( is_page( 'segmentos' ) ) : ?>
						<h4>nossa qualidade são <strong>nossos segmentos</strong></h4>
					<?php elseif ( is_page( 'nosso-negocio' ) ) : ?>
						<h4>nossa qualidade é <strong>nosso negócio</strong></h4>
					<?php elseif ( is_page( 'estrutura' ) ) : ?>
						<h4>nossa qualidade é <strong>nossa estrtutura</strong></h4>
					<?php elseif ( is_page( 'historia' ) ) : ?>
						<!-- no content -->
					<?php elseif ( is_page( 'missao' ) ) : ?>
						<h4>nossa qualidade é <strong>nossa missão</strong></h4>
					<?php else : ?>
						<h4>nossa qualidade é <strong>quem somos</strong></h4>
					<?php endif; ?>

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

					<?php if ( is_page( 'clientes-e-parceiros' ) or is_page( 'cases' ) ) : ?>
						<!-- remove arvore sidebar -->
					<?php else : ?>
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/arvore.png">
					<?php endif; ?>	

				</div>
			</div>
		</section>
	</div>
	
</section>
<?php get_footer(); ?>