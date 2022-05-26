<?php get_header();

while(have_posts()) {
    the_post(); ?>
    <h2>This is a page</h2>
    <h3><?php the_title();?></h3>
    <p><?php the_content(); ?></p>
    <hr>
<?php }

get_footer();

?>