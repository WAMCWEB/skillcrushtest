<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="blog-page">		
	<div class="container wrap">
	<div class="main-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h3>Hello, Skillcrushers!</h3>
				<p>This is your main index page.</p>
				<p>The file that creates this default page is index.php.</p>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
	<section class="blog-page">
		<div class="container wrap">

			<div class="main-content">

				<article class="post-entry">
					<div class="entry-wrap">
						<header class="entry-header">
							<div class="entry-meta">
								<time class="entry-time" datetime="2014-09-29T04:33:51+00:00" itemprop="datePublished" title="Monday, September 29, 2014, 4:33 am">September 29, 2014</time>
							</div>
							<h2 class="entry-title"><a href="">This is a blog post. Here’s what a really long title looks like if you need it.</a></h2>
						</header>
						<div class="entry-summary">
							<p>Bacon ipsum dolor sit amet strip steak jowl pancetta, cow turkey salami sausage fatback boudin biltong frankfurter shoulder pork turducken spare ribs. Ground round t-bone swine shoulder, cow bacon sausage turkey meatloaf. Tongue ball tip corned beef turkey. Leberkas shoulder pork chop doner venison meatball pig chicken spare ribs brisket kielbasa corned beef landjaeger prosciutto pork loin. Capicola shankle ham, sirloin biltong pork chop ribeye brisket shank chuck. Turducken bresaola ball tip pork loin. Rump kevin porchetta, brisket pork tri-tip shank ribeye chicken chuck andouille bacon bresaola jowl.</p>
						</div>
						<footer class="entry-footer">
							<div class="entry-meta">
								<span class="entry-terms author">Written by <a href="">Emily Davis</a></span>
								<span class="entry-terms category">Posted in <a href="">Books</a></span>
								<span class="entry-terms commets"><a href="">2 Comments</a></span>
							</div>
						</footer>
					</div>
				</article>
			</div>
	
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
