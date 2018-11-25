<div class="row">
    <div class="col-sm-12">
        <?php $imageUrl = get_the_post_thumbnail_url($post->ID);?>       
           
        <h1 class="mb-0">
          <?php the_title();?>
        </h1>
        <div class="mb-1 text-muted">
          <?php the_date();?>
        </div>
        <?php
        if ($imageUrl) {
          ?>
            <div class="actu-img"> <img alt="<?php the_title();?>" src="<?php echo $imageUrl ?>" data-holder-rendered="true"></div>
            <?php
        }
        ?>
        <div class="body-actu">
            <?php the_content();?>
      </div>
               
  

  
    </div>
    <!– /.col –>
</div>
<!– /.row –>
<div class="navigation row" >
<div class="col-md-6 prev">
<?php previous_post_link( '%link','<< %title',true);?>
</div>
<div class="col-md-6 next">
<?php next_post_link('%link','%title >>',true);?>
</div>
</div>
