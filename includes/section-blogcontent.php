<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>


	<strong><p><?php echo get_the_date('jS F Y h:i');?></p></strong>

	<?php the_content();?>

	<?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>

	<strong><p>Posted By:  <?php echo $fname;?> <?php echo $lname;?></p></strong>


<!-- For showing Tags

	<?php 
	$tags = get_the_tags();
	foreach($tags as $tag):?>

				<a href="<?php echo get_the_link($tag->term_id);?>" class = "badge badge-success">
				<?php echo $tag->name;?>
				</a>
	<?php endforeach;?>

For Showing Categories

	<?php 
	$categories = get_the_category();
	foreach($categories as $cat):?>

				<a href="<?php echo get_the_link($cat->term_id);?>" class = "badge badge-success">
				<?php echo $cat->name;?>
				</a>
	<?php endforeach;?>



For Comment Section

	<?php comments_template();?>

-->



<?php endwhile; else: endif; ?>