<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
  <h3 id="id-<?php the_ID(); ?>"><?php the_title(); ?></h3>
  <date><?php echo get_the_date(); ?></date>
  <p><?php the_content(); ?></p>
  <?php the_post_thumbnail("thumbnail"); ?>
</article>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</main>
<?php get_footer(); ?>