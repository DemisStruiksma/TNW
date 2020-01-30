<?php get_header();?>


<div class="container pt-5 pb-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <h1><?php the_title(); ?></h1>
   <?php the_content(); ?>
   <?php echo get_the_date(); ?>
   <?php echo get_the_time(); ?>



  <?php endwhile; ?>
  <?php endif; ?>

</div>



<?php get_footer();?>
