<?php 
	include "header.php";
?> 
<?php query_posts("showposts=3&paged=$paged"); ?>
<?php $i=1; $aux=0; ?> 
   	<?php if(have_posts()): ?>
			    	<?php while(have_posts()): ?>
			    		
				    	<?php the_post(); ?>
			    	<a href="<?php the_permalink();?>">
			    	
<?php if (($i % 2) == 1):  ?>
    <?php if (($aux%2)== 0):?> <!--to setando pra toda publicação impar para que seja publicacao1 a classe -->
    <div class="container-fluid">

       <section id="publicacao1">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h2 style="color:#1abc9c"><?php the_title();?></h2> 
                <p><?php echo the_content();?></p>

             </div>
           <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 minhaimagem" style="background-image: url(<?php echo $image[0]; ?>)">
            </div>
        </section>
     </div>
    <div class="linha"></div>

    <?php else: ?>
        <div class="container-fluid">

        <section id="publicacao1">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h2 style="color:purple"><?php the_title();?></h2> 
                <p><?php echo the_content();?></p>
             </div>
           <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 minhaimagem" style="background-image: url(<?php echo $image[0]; ?>)">
            </div>
    </section>
                       
         </div>
    <?php endif ?> 
    <?php $aux++; ?> 
    <?php else: ?>
 <!--to setando pra toda publicação para para que seja publicacao2 a classe -->
        <div class="container-fluid">

            <section id="publicacao2">
               <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
                <div class="col-md-6 col-sm-6 col-xs-12 minhaimagem" style="background-image: url(<?php echo $image[0]; ?>)">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <h2><?php the_title();?></h2> 
                    <p><?php echo the_content();?></p>
                 </div>
            </section>
        </div>
<?php endif ?> 
<?php $i++ ?>
<?php endwhile ?>
<?php endif ?> 
<?php 
    include 'footer.php';
?>