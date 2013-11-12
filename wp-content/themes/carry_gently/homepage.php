<?php
/**
 * Template Name: Home
 *
 * @package Carry Gently
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="page-content">
					<?php the_content(); ?>
				</section>

			<?php endwhile; // end of the loop. ?>



			<section class="page-slider">
				<h1>How we work</h1>
				<p>Coria custibus resci cum ab il mod es solupta Coria custibus resCoria custibus resci cum ab il mod es solupta quam lauda consed qui dolor ep coria custibus.ci cum ab il mod es solupta quam lauda consed qui dolor ep coria custibus quam lauda consed qui dolor ep coria custibus.</p>
				<img src="<?php bloginfo('template_directory'); ?>/images/slide1.png">
			</section>

			<div class="clear"></div>

			<section class="page-foot-left">
				<h1>News</h1>
				<p>Posted 6/5/13<br />
				Coria custibus resci cum ab il mod es solupt quam lauda consed qui dolor epuda.<br />
				<span class="more">Read More</span></p>
			</section>

			<section class="page-foot-right">

			</section>

		</main>
	</div>

<?php get_footer(); ?>
