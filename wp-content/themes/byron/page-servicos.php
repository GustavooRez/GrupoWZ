<?php get_header(); ?>
<head>
  <div class="parallax_servicos" style="background-image: linear-gradient(to top,rgba(14,14,14,0.5) 1%,rgba(8,129,210,0.4) 6%), url(<?php the_field("imagem_header"); ?>);?>);">
  	<p class="servicos_titulo"> <?php the_field('frase_header');?></p>

  </div>
</head>

<section>
	<h3 class="titulo_servicos"> <?php the_field('titulo_da_pagina');?> </h3>

	<div class="grid_servicos">
			<div class=""><img class="imagem_servicos" src="<?php the_field("image_topografia"); ?>"></div>

			<div><img class="imagem_topografia" src="<?php the_field("logo_topografia"); ?>"><p class="servicos_texto1"><?php the_field("descricao_topografia"); ?></p></div>
	</div>	


	<div class="grid_servicos">	
		<div><img class="imagem_tecnologia" src="<?php the_field("logo_tecnologia"); ?>"><p class="servicos_texto2"><?php the_field("descricao_tecnologia"); ?></p></div> 

		<div class=""><img class="imagem_servicos" src="<?php the_field("imagem_tecnologia"); ?>"></div>
	</div>		

	<div class="grid_servicos">
		<div class=""><img class="imagem_servicos" src="<?php the_field("imagem_imobiliaria"); ?>"></div>

		<div><img class="imagem_imobiliaria" src="<?php the_field("logo_imobiliaria"); ?>"><p class="servicos_texto3"><?php the_field("descricao_imobiliaria"); ?></p></div>

	</div>




<?php get_footer(); ?>