<!-- 
    Arquivo para o código do footer da página,
    footer = rodapé da página
-->
<footer class="page-footer">
			<div class="footer">
				<div class="esquerda_footer">
					<div class="fale-conosco"><u> <?php the_field('fale_conosco'); ?> </u></div>
					<div class="padfoter"><p class="contato_footer"><i class="fas fa-phone"></i><?php the_field('telefone'); ?></p></div>			
					<div class="padfoter"><p class="contato_footer"><i class="fas fa-envelope-square"></i><?php the_field('email'); ?> </p></div>			
					<div class="padfoter"><p class="contato_footer"><i class="fas fa-map-marker-alt"> </i> <?php the_field('endereco'); ?></p></div>
				</div>

				<div class="direita_footer">
					<div><img class="logo_footer" src="<?php echo get_template_directory_uri(); ?>/img/logo_footer_wz.png"></div>
					<div><i class="icon fab fa-facebook-f"></i><i class="icon fab fa-instagram"></i><i class="icon fab fa-linkedin-in"></i></div>

				</div>            
		</footer>			
		
	



	<footer>

		<div class="footer-copyright">
			<div class="desenvolvido">
				<p> Desenvolvido por: </p>
				<a href="https://byronsolutions.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_byron.png"></a>
			</div>
		</div>

	</footer>

<?php wp_footer() ?>
</body>
</html>