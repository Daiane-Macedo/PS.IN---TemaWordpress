<?php get_header();?>
<?php if(have_posts()): ?>
			    	<?php while(have_posts()): ?>
			    		
				    	<?php the_post(); ?>
				    	
 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
		                    <?php if ($image):?>
		                    <div class="minhaImagemfundo" style="background-image: url(<?php echo $image[0]; ?>)">
		                        
		                        <h2><?php the_title();?></h2>
		                        
		                    </div>
		                    <?php else: ?>
		                    
		                    <div class="minhaImagemfundo" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/imagemCritica.png)">
		                       
		                        <h2><?php the_title();?></h2> <?php echo the_content();?>
		                        <p><?php echo the_content();?><p>
		                    </div>
		                    <?php endif ?>

					
							<p><?php echo the_content();?></p>

						</div>

		        <?php endwhile ?>
	        <?php endif ?> 

<?php get_footer();?>