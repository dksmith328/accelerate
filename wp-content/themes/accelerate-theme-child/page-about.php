<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="about-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->


<section class="service-info">
  <div class="our-services">
    <h6>Our Services</h6>
    <p>We take pride in our clients and the content we create for them.<br />Here’s a brief overview of our offered services.</p>
  </div>
  <div class="content-body">
    <div class="content-strategy">
      <div class="imgBx">
      <a href="http://localhost/accelerate/wp-content/uploads/2019/01/bullseye.png"><img class="alignleft size-full wp-image-47383" src="http://localhost/accelerate/wp-content/uploads/2019/01/bullseye.png" alt="" width="216" height="216" /></a>
</div>
<div>
      <h2>Content Strategy</h2>
      <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs.</p>
</div>
  </div>
  <div class="influencer-mapping">
    <div>
    <h2>Influencer Mapping</h2>
    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
</div>
    <div class="imgBx">
    <a href="http://localhost/accelerate/wp-content/uploads/2019/01/atom.png"><img class="alignright size-full wp-image-47384" src="http://localhost/accelerate/wp-content/uploads/2019/01/atom.png" alt="" width="216" height="216" /></a>
  </div>
</div>
  <div class="social-media-strategy">
    <div class="imgBx">
          <a href="http://localhost/accelerate/wp-content/uploads/2019/01/like.png"><img class="alignleft size-full wp-image-47385" src="http://localhost/accelerate/wp-content/uploads/2019/01/like.png" alt="" width="216" height="216" /></a>
</div>
<div>
    <h2>Social Media Strategy</h2>
    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami</p>
  </div>
</div>
  <div class="design-development">
    <div>
    <h2>Design and Development</h2>
    <p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare.</p>
</div>
<div class="imgBx">
      <a href="http://localhost/accelerate/wp-content/uploads/2019/01/design.png"><img class="alignright size-full wp-image-47386" src="http://localhost/accelerate/wp-content/uploads/2019/01/design.png" alt="" width="216" height="216" /></a>
</div>
</div>
</div>


<div class="employment">
	<h2>Interested in working with us?</h2>
  <a class="button contact-button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
</div>
</section>


<?php get_footer(); ?>
