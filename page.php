<?php get_header(); ?>


<div class="container idiot">
<div class="row">
  <div class="span9">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>

  <div class="span3 centrice">

    <?php
    $args = array( 'numberposts' => 2, 'category' => 4, 'order'=> 'DESC', 'orderby' => 'date', 'post_type' => 'nyheder', 'post_status' => 'publish' );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?> 
      <?php { ?>

<a href="<?php the_field('front_link'); ?>">
<div class="rightcontainer">

      <?php if(has_post_thumbnail()) {
        the_post_thumbnail( 'right-forside', array('class' => 'sidebarimgs', 'alt' => 'no alt', 'title' => ''.get_the_title().'' ));
      } else { echo ''; } ?>


<?php
$indhold = get_field('knap');
if ($indhold)
  {
  echo '<a href="';
  the_field('front_link');
  echo '" class="btn btn-success rightho">';
  echo the_field('knap');
  echo '</a>';
  }
else
  {
  echo "";
  }
?>
</div>
</a>
    <?php } endforeach; ?>


</div>

</div>

<?php get_footer(); ?>