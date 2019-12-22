<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>



	<div class="card mb-3">

		<h3><?php the_title();?></h3>	

			<div class="card-body d-flex justify-content-center align-items-center ">

				<?php if(has_post_thumbnail()):?>

				<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid mb-3 mr-3 img-thumbnail">

		<?php endif;?>

			
			<?php the_excerpt();?>

			
	</div>
	<a href="<?php the_permalink();?>" class="btn btn-success"> Read More</a>
			</div>




<?php endwhile; else: endif; ?>