<?php
/*
	* @package WordPress
	* @subpackage Coletiva_Theme
*/

get_header(); ?>
<section id="produtos">
	<div class="topo palco colunas-12">
		<div class="grid colunas-06" style="">
			<h1>nossos <strong>produtos</strong></h1>
		</div>
		<div class="grid colunas-06" style="">
			<a href="#" class="atendimento_produto">atendimento e vendas</a>
		</div>
	</div>


	<div class="palco colunas-12">
		<article>
			<div class="sidebar_left grid colunas-03" style="">
				<ul class="submenu_produtos">
					<li>
						<a href="#">Caixa de Papelão Modelo Maleta</a>
					</li>																																								
				</ul>

				<img src="<?php bloginfo( 'template_directory' ); ?>/images/icons/produtos_topo_form.jpg" alt="Vendas">
			
				<form name="contato" id="contato" method="post" action="<?php bloginfo( 'template_directory' ); ?>/includes/send-contato.php">

					<div class="bloco">
						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="nome">Nome:</label>
								<div class="campo"><input type="text" name="nome" id="nome" placeholder="" /></div>
							</div>
						</div>
						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="nome">Empresa:</label>
								<div class="campo"><input type="text" name="empresa" id="empresa" placeholder="" /></div>
							</div>
						</div>
						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="nome">CNPJ:</label>
								<div class="campo"><input type="text" name="cnpj" id="cnpj" placeholder="" /></div>
							</div>
						</div>
						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="nome">E-mail*:</label>
								<div class="campo"><input type="text" name="email" id="email" placeholder="" /></div>
							</div>
						</div>
						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="nome">Telefone:</label>
								<div class="campo"><input type="text" name="telefone" id="telefone" placeholder="" /></div>
							</div>
						</div>
						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="nome">Cidade:</label>
								<div class="campo"><input type="text" name="cidade" id="cidade" placeholder="" /></div>
							</div>
						</div>																														

						<div class="linha">
							<div class="dado grid colunas-12">
								<label for="mensagem">Mensagem ou Solicitação:</label>
								<div class="campo"><textarea name="mensagem" id="mensagem" placeholder=""></textarea></div>
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
			</div>

			<div class="grid colunas-09">
				<ul class="thumbs">
					<?php  while ( have_posts() ) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail() ?>
							</a>
						</li>
					<?php endwhile; ?>																																							
				</ul>
			</div>			
		</article>
	</div>

	<figure></figure>

</section>
<?php get_footer(); ?>