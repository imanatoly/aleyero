<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>
<body <?php body_class(); ?>>

	<?php get_template_part('menu'); ?>

<div class="container">

	<div class="row">
		<div class="col-md-8" >
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>

			<div class="comments-template">
				<?php comments_template(); ?>
			</div>

			<?php endwhile; endif; ?>
		</div>

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

