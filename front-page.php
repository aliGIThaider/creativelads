<?php get_header();?>

<section class="page-wrap">
<div class="container">



		<h1><?php the_title();?></h1>

		<?php get_template_part('includes/section', 'content'); ?>

</div>
</section>


<div class="row">
			

			<div class="col-lg-6">
				
				<?php get_template_part('includes/section', 'content'); ?>

			</div>


			<div class="col-lg-6">
				
					<?php get_template_part('includes/section', 'content'); ?>

			</div>			

			<div class="col-lg-12">
				
					<?php get_template_part('includes/section', 'content'); ?>

			</div>


		</div>


<?php get_sidebar(); ?>
<?php get_footer();?>
