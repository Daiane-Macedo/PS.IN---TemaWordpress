<?php /* Template name: sobre*/?>
 <?php include 'header.php';
?>
<!-- Aqui comecam os posts -->
			<!---query para pegaar os posts
            ?php query_posts("showposts=3&paged=$paged"); ?> -->
		    	<?php if(have_posts()): ?>
			    	<?php while(have_posts()): ?>
			    		<?php the_post();?>
							<p><?php echo the_content();?></p>

		        <?php endwhile ?>
	        <?php endif ?> 
	   <?include 'footer.php';
?>
