<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>
<body>
	<?php get_template_part('menu'); ?>


<div class="container">

	<div class="row">
		<div class="col-md-8" >
		  	<h1>"<?php echo esc_attr(get_search_query()); ?>"<span> için arama sonuçları:</span> </h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				<header>

					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				</header> <!-- end article header -->

				<section class="post_content">
					<?php the_excerpt('<span class="read-more">' . __("Read more on","wpbootstrap") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>

				</section> <!-- end article section -->

			</article> <!-- end article -->

			<?php endwhile; ?>

			<nav aria-label="sıradaki yazılar">
				<ul class="pager">
					<li class="previous"><?php previous_posts_link( '&laquo; Önceki sayfa' ); ?></li>
					<li class="next"><?php next_posts_link( 'Sonraki sayfa &raquo;', '' ); ?></li>
				</ul>
			</nav>

			<?php else : ?>

			<!-- this area shows up if there are no results -->

			<article id="post-not-found">
				<header>
					<h2>Üzgünüz</h2>
				</header>
				<section class="post_content">
					<p>Bu konuda içerik bulunamadı.</p>
				</section>
				<footer>
				</footer>
			</article>

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