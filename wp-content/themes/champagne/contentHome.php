
 <?php $imageUrl=get_the_post_thumbnail_url( $post->ID); ?>
<div class="card col-md-4 actuCard">
<?php 
                if($imageUrl)
                {
                    ?>               
               <img  class="card-img-top"   alt="<?php the_title();?>" 
                src="<?php echo $imageUrl?>"
                 data-holder-rendered="true">
                <?php
                }
                ?>
            <div class="card-body">             
              <h3  class="card-title">
                <a class="text-dark" href="<?php echo esc_url( get_the_permalink($post->ID) ); ?>"><?php the_title();?></a>
              </h3>
              <div class="mb-1 text-muted"><?php the_date();?></div>
              <div class="card-text mb-auto"><?php the_excerpt();?></div>
              <a href="<?php echo esc_url( get_the_permalink($post->ID) ); ?>">Lire la suite </a>
            </div>
           
           
          </div>