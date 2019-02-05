<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>


<div class="home-page">
<div id="primary" class="hero-content">
	<div class="main-content" role="main">
			<div class="headliner">
			<div class="rectangle-1">
				<p class="line-1">Are you ready to hand your designs off</p>
			</div>
			<div class="rectangle-2">
				<p class="line-2">to a custom WordPress developer who gets you?</p>
			</div>
		<div class="sales-button-1">
			<a class="button" href="#">Book A Call to Get Started!</a>
		</div>
	</div> <!-- headliner -->
	</div><!-- .main-content -->
</div><!-- #primary -->
</div> <!-- .home-page -->

<div class="section-1">
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
</div>









<?php get_footer();
