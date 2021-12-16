<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<img 
  style="width:300px"
  src="<?php the_field( 'img' ); ?>"
/>
<h2>
  <?php the_field( 'title' ); ?>
</h2>
<p>
  <?php the_field( '説明文' ); ?>
</p>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</main>
<?php get_footer(); ?>