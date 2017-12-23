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

			<article class="post" id="post-<?php the_ID(); ?>">

			<div class="media">
              <div class="col-xs-12 col-md-3">
				<?php if ( has_post_thumbnail()) : ?>
				   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				   <?php the_post_thumbnail('medium', ['class' => 'img-responsive', 'title' => get_the_title()]); ?>
				   </a>
				 <?php endif; ?>
			  </div>

              <div class="media-body">
                <h2 class="media-heading"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
              </div>
            </div>

			</article>
			<?php endwhile; ?>

			<nav aria-label="sıradaki yazılar">
				<ul class="pager">
					<li class="previous"><?php previous_posts_link( '&laquo; Önceki sayfa' ); ?></li>
					<li class="next"><?php next_posts_link( 'Sonraki sayfa &raquo;', '' ); ?></li>
				</ul>
			</nav>

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