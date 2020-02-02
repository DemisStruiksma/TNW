<?php get_header();?>

<!DOCTYPE html>
<html lang="en-us" prefix="fb:http://ogp.me/ns/fb# og:http://ogp.me/ns#">
    <body class="p-channel p-channel--hardfork" data-modules="channel">


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script data-src="//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;appId=378011798897423&amp;version=v2.6" id="socialSrcFacebook" type="text/template"></script>
<script data-src="//platform.twitter.com/widgets.js" id="socialSrcTwitter" type="text/template"></script>
<script src="//cdn0.tnwcdn.com/sub-brand//js/app.js?id=fed0916e7cffde7d43e0"></script>

<div class="container front-page-container">
  <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <div class="c-posts-post-text card mb-8">
      <div class="card-body">
        <div class="post-image"><?php the_post_thumbnail();?></div>
        <h3><a class="p-channel-underline post-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

        <?php the_author();?>

        <?php the_date();?>

        <?php the_time();?>

      </div>
</div>
    <?php endwhile; endif;?>
  </div>




<?php get_footer();?>
