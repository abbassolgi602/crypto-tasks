<?php

// Follow or Unfollow
$user = wp_get_current_user();
$user_id = 'user_' . $user->ID;
$project_id = get_the_ID();

$follow_class = 'active';
$follow_text = 'follow';
$follow_name = 'follow_project';

$follow_state = false;
$followers = get_post_meta( get_the_ID(), 'add_meta_boxes', true );

if(array_key_exists('follow_project', $_POST)) {
	$value = array('followed_project_id' => $project_id);
	add_row('followed_by_user_projects', $value, $user_id);
	$followers++;
	update_post_meta($project_id, 'add_meta_boxes', $followers);
}

if(array_key_exists('un_follow_project', $_POST)) {
	$i = 1;
	while( have_rows('followed_by_user_projects',$user_id) ) { the_row();
		if(get_sub_field('followed_project_id') == $project_id) {
			delete_row('followed_by_user_projects', $i, $user_id);
			$followers--;
			update_post_meta($project_id, 'add_meta_boxes', $followers);
			break;
		}
		$i++;
	}
}

if( have_rows('followed_by_user_projects',$user_id) ){
	while( have_rows('followed_by_user_projects',$user_id) ) { the_row();
		if(get_sub_field('followed_project_id') == $project_id) {
			$follow_state = true;
		}
	}
}

if($follow_state == true) {
	$follow_class = 'deactive';
	$follow_text = 'Followed';
	$follow_name = 'un_follow_project';
}
// FIXME: dobble follow by refresh

// unset($_POST['follow_project']);
// unset($_POST['un_follow_project']);

acf_form_head();
get_header();

?>

<div class="wrapper">
	<div class="column flex-between flex">
		<div class="w100 flex-start flex backpage">
			<a class="flex" href="<?php echo get_home_url();?>">
				<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				Back projects
			</a>
		</div>
		<div class="w100 d-inline-block project-detail">
			<div class="w100 flex-between flex">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('medium');
					}
				?>
				<h1 class="h1"><?php the_title();?></h1>
				<form action="" method="post">
					<input type="submit" name="<?php echo $follow_name; ?>" class="<?php echo $follow_class; ?>-btn btn" value="<?php echo $follow_text; ?>" />
				</form>
				<div class="socials-project">
					<div class="followers">
						<?php echo $followers; ?>
						Followers
					</div>
					<?php social_media(); ?>
				</div>
			</div>
			<div class="w100 flex-between flex project-content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="w100 d-inline-block tasks-list">
			<?php 
				$ids = get_field('related_tasks', false, false);
				if($ids) {
					$query = new WP_Query(array(
						'post_type'     => 'task',
						'post__in'			=> $ids,
						'orderby'        	=> 'post__in',
						'posts_per_page'    => -1,
						'orderby'=> 'post_date',
						'order' => 'DESC'
						
					));
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) { $query->the_post();
							get_template_part('template-part/task-content-list');
						}
					}
				}
			?>
		</div>
	</div>
</div>
	
 
<?php get_footer(); ?>