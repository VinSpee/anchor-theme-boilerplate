<?php theme_include('header'); ?>

		<div class="site__page--layout">
			<section class="site__page">
				<h1 class="page__headline"><?php echo page_title(); ?></h1>

				<div class="they--layout">
					<?php echo page_custom_field('they'); ?>
				</div>

				<div class="we--layout">
					<?php echo page_custom_field('we'); ?>
				</div>

				<div class="they-feel--layout">
					<?php echo page_custom_field('user-feelings'); ?>
				</div>

				<div class="tips--layout">
					<?php echo page_custom_field('tips'); ?>
				</div>

				<?php echo page_content(); ?>
			</section>
		</div>

<?php theme_include('footer'); ?>
