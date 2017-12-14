<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>
<body>
	<?php get_template_part('menu'); ?>


<div class="container">

	<?php get_template_part('jumbo'); ?>

	<div class="row">
		<div class="col-md-8" >
		  	<?php if(have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

			<div class="media">
              <div class="col-xs-6 col-md-3">
				<?php if ( has_post_thumbnail()) : ?>
				   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				   <?php the_post_thumbnail('medium', ['class' => 'img-responsive', 'title' => '<?php the_title(); ?>']); ?>
				   </a>
				 <?php endif; ?>
			  </div>

              <div class="media-body">
                <h2 class="media-heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
              </div>
                          <div class="top-buffer">
              			  </div>
            </div>

			</div>
			<?php endwhile; ?>

			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>

			<?php endif; ?>

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