
<?php get_header(); ?>

  <div class="parallax_blog" style="background-image: linear-gradient(to top,rgba(14,14,14,0.5) 1%,rgba(8,129,210,0.4) 6%), url(<?php echo get_template_directory_uri(); ?>/img/header_blog.png)">
  	<p class="blog_titulo"> NOVIDADES</p>
  </div>

<section id="post">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="caixa_post">
    <img class="post_imagem" src="<?php the_field("imagem_post");?>">
    <br/>
    <?php the_title(); ?>
    <br/>
    <?php the_date();?>
    <br/>
    <?php the_content(); ?>
</div>
<?php endwhile;
        endif; ?>
</section>
<?php get_footer(); ?>