<div class="wrapper">
	<div class="column flex-between flex">
		<?php 
		$query = new WP_Query(array(
			'post_type'     => 'project',
		));
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) { $query->the_post();
				get_template_part('template-part/project-content-list');
			}
		}
		?>
	</div>
</div>