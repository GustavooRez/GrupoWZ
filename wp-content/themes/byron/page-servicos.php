<?php get_header(); ?>
<head>
  <div class="parallax_servicos" style="background-image: linear-gradient(to top,rgba(14,14,14,0.5) 1%,rgba(14,14,14,0.1) 6%), url(<?php the_field("imagem_header"); ?>);?>);">

  </div>
</head>

<section>
	<h3 class="titulo_servicos"> <?php the_field('titulo_da_pagina');?> </h3>

	<div class="grid_servicos">
			<div class=""><img class="imagem_servicos" src="<?php the_field("image_topografia"); ?>"></div>

			<div><img class="imagem_topografia" src="<?php echo get_template_directory_uri(); ?>/img/logo_wz_topografia.png"><p class="servicos_texto1">- LEVANTAMENTO TOPOGRÁFICO CADASTRAL<br>- PROJETO E DEMARCAÇÃO DE ESTRADAS<br>- PLANEJAMENTO DE PLANTIO E COLHEITA<br>- MANUTENÇÃO DA BASE CARTOGRÁFICA<br>- GEORREFERENCIAMENTO – SIGEF<br>- PROJETOS DE RETIFICAÇÃO DESMEMBRAMENTO<br>- PROJETO DE USUCAPIÃO<br>- PROJETOS DE TERRAPLENAGEM<br>- LOCAÇÃO DE OBRAS<br>- PROJETO E DEMARCAÇÕES DE LOTEAMENTO<br>- PROJETOS DE OUTORGA D’ÁGUA<br>- CADASTRO AMBIENTAL RURAL – CAR</p></div>
	</div>	


	<div class="grid_servicos">	
		<div><img class="imagem_tecnologia" src="<?php echo get_template_directory_uri(); ?>/img/logo_wz_tecnologia.png"><p class="servicos_texto2">- ANÁLISE DE VIABILIDADE<br>- CLASSIFICAÇÃO DO USO DO SOLO<br>- MONITORAMENTO DE PLANTIO<br>- CONTROLE DE QUALIDADE<br>- MDT - MODELO DIGITAL DO TERRENO<br>- CADASTRO URBANO<br>- VÍDEOS INSTITUCIONAIS<br>- LAUDO DE USO DO SOLO ATRAVÉS DE ANÁLISE<br>TEMPORAL DE IMAGENS</p></div> 

		<div class=""><img class="imagem_servicos" src="<?php echo get_template_directory_uri()?>/img/tecnologia.png"></div>
	</div>		

	<div class="grid_servicos">
		<div class=""><img class="imagem_servicos" src="<?php echo get_template_directory_uri()?>/img/imobiliaria.png"></div>

		<div><img class="imagem_imobiliaria" src="<?php echo get_template_directory_uri(); ?>/img/logo_wz_imobiliaria.png"><p class="servicos_texto3">- COMERCIALIZAÇÃO DE IMÓVEIS<br>- LAUDOS, AVALIAÇÕES E PERÍCIAS<br>- PROSPECÇÃO PARA AQUISIÇÃO DE NOVAS ÁREAS<br>- PROJETOS DE LOTEAMENTOS<br>- ADMINISTRAÇÃO DE EQUIPE DE VENDAS </p></div>

	</div>




<?php get_footer(); ?>