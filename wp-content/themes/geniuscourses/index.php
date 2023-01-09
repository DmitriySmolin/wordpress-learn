<?php
get_header();
?>

<!-- <main id="primary" class="site-main"> -->

<?php
// if (have_posts()) :

// 	if (is_home() && !is_front_page()) :
//
?>
<!-- <header> -->
<!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1> -->
<!-- </header> -->
<?php
// 	endif;

// 	/* Start the Loop */
// 	while (have_posts()) :
// 		the_post();
// 		the_title();
// 		echo '<br>';
// 	// /*
// 	//  * Include the Post-Type-specific template for the content.
// 	//  * If you want to override this in a child theme, then include a file
// 	//  * called content-___.php (where ___ is the Post Type name) and that will be used instead.
// 	//  */
// 	// get_template_part( 'template-parts/content', get_post_type() );

// 	endwhile;

// 	the_posts_navigation();

// else :

// 	get_template_part('template-parts/content', 'none');

// endif;
?>

<!--</main> #main -->

<div>
	<?php
	if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('partials/content'); ?>
		<?php endwhile;
	else : ?>
		<?php get_template_part('partials/content', 'none'); ?>
	<?php endif ?>
</div>

<?php
// get_sidebar();
get_footer();
