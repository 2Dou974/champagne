
 <?php $imageUrl=get_the_post_thumbnail_url( $post->ID); ?>
<div class="col-md-6 home-art">
          <div class="card flex-md-row">
            <div class="card-body">             
              <h3 class="mb-0">
                <a class="text-dark" href="<?php echo esc_url( get_the_permalink($post->ID) ); ?>"><?php the_title();?></a>
              </h3>
              <div class="mb-1 text-muted"><?php the_date();?></div>
              <p class="card-text mb-auto"><?php the_excerpt();?></p>
              <a href="<?php echo esc_url( get_the_permalink($post->ID) ); ?>">Lire la suite </a>
            </div>
            <?php 
                if($imageUrl)
                {
                    ?>               
                <div class="card-img-right" ><img  alt="<?php the_title();?>" 
                src="<?php echo $imageUrl?>"
                 data-holder-rendered="true">
                 </div>
                <?php
                }
                ?>
           
          </div>
        </div>