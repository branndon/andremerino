<?php
/*
	Template Name: Atendimento
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section class="atendimento">
	
	<div class="palco colunas-09">
		<article>
			<?php
				echo '<h1><strong>fornecedores</strong></h1>';
			?>

			<nav class="submenu_empresa">
					<?php dynamic_sidebar('atendimento'); ?>
			</nav>

			<div class="content">
				<?php  while ( have_posts() ) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
				<i>*campos obrigatórios</i>
			</div>

			<form name="contato" id="contato" method="post" action="<?php bloginfo( 'template_directory' ); ?>/includes/send-contato.php">

				<div class="bloco">
					<div class="linha">
						<div class="dado palco colunas-12">
							<div class="grid colunas-03">
								<label for="nome">Nome e/ou Empresa*:</label>
							</div>
							<div class="grid colunas-07">
								<div class="campo">
									<input type="text" name="nome" id="nome" placeholder="" />
								</div>
							</div>
						</div>
						<div class="dado palco colunas-12">
							<div class="grid colunas-03">
								<label for="email">E-mail*:</label>
							</div>
							<div class="grid colunas-07">
								<div class="campo">
									<input type="text" name="email" id="email" placeholder="" />
								</div>
							</div>
						</div>
						<div class="dado palco colunas-12">
							<div class="grid colunas-03">
								<label for="telefone">Telefone:</label>
							</div>
							<div class="grid colunas-07">
								<div class="campo small">
									<input type="text" name="telefone" id="telefone" placeholder="" />
								</div>
							</div>
						</div>
						<div class="dado palco colunas-12">
							<div class="grid colunas-03">
								<label for="cidade">Cidade:</label>
							</div>
							<div class="grid colunas-07">
								<div class="campo small">
									<input type="text" name="cidade" id="cidade" placeholder="" />
								</div>
							</div>
						</div>
						<div class="dado palco colunas-12">
							<div class="grid colunas-03">
								<label for="assunto">Assunto:</label>
							</div>
							<div class="grid colunas-07">
								<div class="campo">
									<input type="text" name="assunto" id="assunto" placeholder="" />
								</div>
							</div>
						</div>																								
					</div>
					
					<div class="linha">
						<div class="dado grid colunas-12">
							<div class="grid colunas-03">
								<label for="mensagem">Mensagem*:</label>
							</div>	
							<div class="grid colunas-07">
								<div class="campo mensagem">
									<textarea name="mensagem" id="mensagem" placeholder=""></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="bloco">
					<div class="linha">
						<div class="dado">
							<input type="submit" id="btn-contato" name="btn-contato" value="Enviar" />
						</div>
					</div>
				</div>

			</form>
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
				</div>
			</div>
		</section>
	</div>
	
</section>
<?php get_footer(); ?>