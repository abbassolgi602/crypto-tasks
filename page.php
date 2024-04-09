<?php get_header(); ?>

<main>

<div class="container-fluid px-md-5 px-2">
	<div class="col-12 px-md-5 px-0">
		<div class="box-site p-3">

			<div class="title-pages">
				<h1><?php echo get_the_title(); ?></h1>
			</div>

			<div class="single-content">
				<?php the_content(); ?>
			</div>

		</div>	
	</div>	
</div>	

<?php get_footer(); ?>