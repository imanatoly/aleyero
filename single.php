<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>
<body <?php body_class(); ?>>

	<?php get_template_part('menu'); ?>

<div class="container">

	<?php get_template_part('jumbo'); ?>

	<div class="row">
		<div class="col-md-8" >
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>

			<div class="comments-template">
				<?php comments_template(); ?>
			</div>

			<nav aria-label="sıradaki yazılar">
			  <ul class="pager">
				<li class="previous"><?php previous_post_link('%link', '&larr; %title') ?></li>
				<li class="next"><?php next_post_link(' %link', ' %title  &rarr;') ?></li>
			  </ul>
			</nav>

			<?php endwhile; endif; ?>
		</article>

		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php get_template_part('contact'); ?>
<?php get_footer(); ?>

		</div> <!-- /container -->
    </body>
</html>
