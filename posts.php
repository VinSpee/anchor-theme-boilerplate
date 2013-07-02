<?php theme_include('header'); ?>

		<div class="site__page--layout">

			<?php if(has_posts()): ?>
				<ul class="items">
					<?php posts(); ?>
					<li class="post--layout">
						<article class="post">
							<h1 class="post__headline">
								<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
							</h1>

							<div class="post__content">
								<?php echo article_markdown(); ?>
							</div>

							<footer class="post__meta">
								Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
							</footer>
						</article>
					</li>
					<?php $i = 0; while(posts()): ?>
					<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
					<li style="<?php echo $bg; ?>">
						<article class="wrap">
							<h2>
								<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
							</h2>
						</article>
					</li>
					<?php endwhile; ?>
				</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>