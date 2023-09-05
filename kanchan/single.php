<?php 
get_header();
while(have_posts())
{
    the_post(); ?>
<h2><?php the_title() ?></h2>
<span><?php the_date(); ?></span>  <span><?php the_time(); ?></span>
<p><?php the_content() ?></p>

<?php }
get_footer();
?>