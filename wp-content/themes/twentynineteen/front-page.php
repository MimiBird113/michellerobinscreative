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
				<p class="line-1">Are you a web designer ready to hand off your development?</p>
			</div>
			<div class="rectangle-2">
				<p class="line-2">I specialize in bridging the gap between design and code, and help bring your beautiful sites to life for your clients!
</p>
			</div>

				<div class="sales-button-1">
					<a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Ready to chat through how this can work for your business?
 <br>Book a call now!</a>
				</div>

	</div> <!-- headliner -->
	</div><!-- .main-content -->
</div><!-- #primary -->
</div> <!-- .home-page -->
</div>

	<div class="section-1 the-thoughts">
		<h3>Does this sound like you?</h3>
		<ul>
			<li>You’re wasting time developing your client’s wordpress websites, instead of focusing on what you love to do — the design.</li>
			<li>Developing your websites on your own is holding you back from taking on more projects — you’re booked out and at max capacity.
</li>
			<li>You’re worried about handing off development because you’re not sure they will get you as a designer. Will they know about colors, typefaces, and get those design details you took so much time and attention to create?</li>
		</ul>

		<p>I’ve got you! I care about getting you an amazing result for your clients, and customizing wordpress websites down to all the little details. Are you ready to partner with someone so you can get back to focusing on your love of design?</p>
		<div class="sales-button-2"><a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Book a call to get started!</a>
		</div>
	</div>

	<div class="section-3">
		<div class="top-half">
			<h3>Have you ever felt . . .</h3>
			<div class="thoughts">
				<div class="thought-1">
					<img src="http://mimirobins.wpengine.com/wp-content/uploads/2019/02/pillow-icon.png" alt="pillow icon">
					<p>That coding is boooorrring. You want your clients to get a custom website experience, but you’re over the code.</p>
				</div>
				<div class="thought-2">
					<img src="http://mimirobins.wpengine.com/wp-content/uploads/2019/02/gear-icon.png" alt="gear icon">
					<p>That you can do it yourself….even though it doesn’t bring you joy. Do I need to bring Marie Kondo over here?</p>
				</div>
				<div class="thought-3">
					<img src="http://mimirobins.wpengine.com/wp-content/uploads/2019/02/lightbulb-icon.png" alt="lightbulb icon">
					<p>Developers think in a different way….and they aren’t going to do this right. I need careful attention to the design details, and it’s scary to hand this off.</p>
				</div>
			</div>
		</div>

		<div class="bottom-half">
			<h3> Listen, you’re doing great, but there’s a better way!</h3>
			<p class="divide">I get it. You already have a good thing going: your design strategy is rock solid and well-implemented, and you know how to make everything you create fit well together into a cohesive product that clients love. At your best, you rock at creating powerful online presences tailor-made to your clients so they can use their beautiful new online space to foster the life and business or blog they’ve been dreaming of.</p>
			<p class="divide">I’m here to be the savvy front-end developer by your side - taking your beautiful designs and turning them into functional custom-coded wordpress sites that wow your clients. Together, we can wow your clients and get those raving testimonials. I understand the nuances of design and how to bring concepts to life in pixel-perfect conditions, so I can jive with your workflow without impeding it, solve your tech problems, and know that keeping your clients happy with an amazing website is what keeps your business growing.<br> I've got you!</p>
			<div class="sales-button-2"><a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Ready to talk about what this could look like for your biz? <br>Book a call today!</a>
			</div>
		</div>
	</div>

	<div class="work" id="services">
		<div class="work-box">
		<h3>Here's how I help you help your clients</h3>
		<div class="development">
			<h4>WordPress Development</h4>
			<p>You create the designs, I develop the site. You can send me your development-ready design files, and I’ll custom code your client’s site to design-perfection!</p>
		</div>
		<div class="partial">
			<h4>Partial Development</h4>
			<p>You’re halfway through and realize this is going to be tougher than you thought. I can come in and help bring your design to the finish line with savvy development skills. We’ll have you up and going in a flash!</p>
		</div>
		<div class="retainer">
			<h4>Development Retainer</h4>
			<p>Needing ongoing development help for your clients? We can work together on an ongoing basis to keep your clients happy and taken care of! Let’s partner together to bring their website dreams to life.</p>
		</div>
		<div class="sales-button-3">
			<a class="button" href="https://calendly.com/michellerobinscreative" target="_blank">Are you ready to take the next step in your design business?<br>Get in touch about partnering together!</a>
		</div>
	</div>
	</div>

	<div class="about-me" id="about">
		<div class="words half-width">
			<h3>Meet Michelle</h3>
			<p>Consider me your website-building partner in crime! As a designer-turned-developer, I work with professionals like you to help take the confusion and dread out of making a functional website that reflects your business at its best. With your design expertise - gorgeous mockups and flawless brand building, paired  with my code wrangling - custom WordPress themes and solutions, together we can come up with a solution that will allow you to stop worrying about your next website and instead focus your valuable time and energy on what you do best: creating breathtaking designs!</p>
		</div>
		<div class="photo half-width">
			<img src="http://mimirobins.wpengine.com/wp-content/uploads/2019/02/IMG_4153a.jpg" alt="photo of me"></div>
		</div>

		<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>

<?php get_footer();
