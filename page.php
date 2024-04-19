<?php get_header(); ?>

<main>

<div class="wrapper">
	<div class="column flex-between flex">
		<div class="w100 flex-start flex column">

			<div class="w100 title-pages">
				<h1><?php echo get_the_title(); ?></h1>
			</div>

			<div class="w100 single-content">
				<?php the_content(); ?>
			</div>

		</div>	
	</div>	
</div>	

<?php get_footer(); ?>