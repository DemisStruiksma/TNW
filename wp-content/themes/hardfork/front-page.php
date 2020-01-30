<?php get_header();?>

<div class="container front-page-container">


<?php if (have_posts()) : while(have_posts()) : the_post();?>
  <div class="card mb-4">
    <div class="card-body">
      <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

      <?php the_date();?>

      <?php the_time();?>

       <?php the_author();?>



    </div>

  </div>

  <?php endwhile; endif;?>

</div>


<?php get_footer();?>
