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
			<a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Book A Call to Get Started!</a>
		</div>
	</div> <!-- headliner -->
	</div><!-- .main-content -->
</div><!-- #primary -->
</div> <!-- .home-page -->
</div>

	<div class="section-1 the-thoughts">
		<h3>Think you don't need a developer? Think again!</h3>
		<ul>
			<li>Are you a seasoned designer in need of a website facelift?</li>
			<li>Do you worry about what you’ll do when your branding clients push for more?</li>
			<li>Do you find yourself pushing away clients if you’re afraid they want development work?</li>
			<li>Are you lacking the time or desire to try to teach yourself to put an amazing website together?</li>
			<li>Are you sick of your current website but overwhelmed by all the work that would go into making it match your expertise?</li>
		</ul>
		<div class="sales-button-2"><a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Sound like you? <br>Find out how we can work together!</a>
		</div>
	</div>

	<div class="section-3">
		<div class="top-half">
			<h3>You're in the right place if you've ever thought these things before</h3>
			<div class="thoughts">
				<div class="thought-1">
					<img src="/img/pillow-icon.png">
					<p>Coding is boring! Drag-and-drops may be limited, but they’ve been good enough for me so far.</p>
				</div>
				<div class="thought-2">
					<img src="/img/gear-icon.png">
					<p>I can make myself code, even though it takes forever and it's not my favorite part of the process.</p>
				</div>
				<div class="thought-3">
					<img src="/img/lightbulb-icon.png">
					<p>Developers just don't understand anything about design - we couldn't possibly collaborate!</p>
				</div>
			</div>
		</div>

		<div class="bottom-half">
			<p class="divide">I get it. You already have your own thing going: your design strategy is rock solid and well-implemented, and you know how to make everything you create fit well together into a cohesive product that clients love. At your best, you rock at creating powerful online presences tailor-made to your clients so they can use their beautiful new online space to foster the life and business or blog they’ve been dreaming of.</p>
			<p class="divide">I’m here to be the savvy front-end developer by your side. Together, we can take your designs and translate them to a new home on the web while remaining true to your vision. I understand the nuances of design and how to bring concepts to life in pixel-perfect conditions, so I can jive with your workflow without impeding it, solving your tech problems so you can rest easy and go back to focusing on doing the creative work you love.</p>
		</div>
	</div>

	<div class="sales-button-3">
		<a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Are you ready to take the next step in your design business?<br>Book a call now!</a>
	</div>

	<div class="about-me" id="about">
		<div class="words half-width">
			<h3>Meet Michelle</h3>
			<p>Consider me your website-building partner in crime! As a designer-turned-developer, I work with professionals like you to help take the confusion and dread out of making a functional website that reflects your business at its best. With your design expertise - gorgeous mockups and flawless brand building, paired  with my code wrangling - custom WordPress themes and solutions, together we can come up with a solution that will allow you to stop worrying about your next website and instead focus your valuable time and energy on what you do best: creating breathtaking designs!</p>
		</div>
		<div class="photo half-width">
			<img src="/img/img-me.jpg"></div>
		</div>

		<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>

<?php get_footer();
