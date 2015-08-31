<form name="pesquisa" id="pesquisa" class="limpo" method="get" action="<?php echo home_url( '/' ); ?>">

	<div class="campo">
		<input type="text" name="s" placeholder="Buscar..."  value="<?php echo $_GET['s']; ?>" />
	</div>

	<!-- <button type="submit">Pesquisar</button> -->
	
</form>