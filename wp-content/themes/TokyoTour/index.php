<?php get_header(); ?>
<main id="content" role="main">

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
  <h3 id="id-<?php the_ID(); ?>"><?php the_title(); ?></h3>
  <date><?php echo get_the_date(); ?></date>
  <p><?php the_content(); ?></p>
  <?php the_post_thumbnail("thumbnail");?>
  <?php
  /*
  <img src="<?php echo get_field("img"); ?>" alt="">
  */
  ?>
</article>
<?php endwhile; endif; ?>
<!-- ループ処理をした後にしようする -->
<?php wp_reset_query(); ?>

<?php
  $event = array(
    "post_type" => "event",
    "posts_per_page" => -1,
    "orderby" => "date"
  );
  $the_query = get_posts($event);
  if($the_query):
    foreach($the_query as $post): setup_postdata($post);
?>
<article <?php post_class(); ?>>
  <h3 id="id-<?php the_ID(); ?>"><?php the_title(); ?></h3>
  <date><?php echo get_the_date(); ?></date>
  <p><?php the_content(); ?></p>
  <?php the_post_thumbnail("thumbnail");?>
</article>
<?php
    endforeach;
  endif;
?>

<?php
  echo wp_list_bookmarks();
?>

<?php
/*
<!-- header.php をとっt -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
*/
?>

</main>
<?php get_footer(); ?>