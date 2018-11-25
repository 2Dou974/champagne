<div class="row">
  <div class="col-md-4">
    <div class="menu-bottle">
      <?php
      function detail($cat)
      {

        $args = array( 'category' => $cat,
        'post_type' =>  'post',
       'orderby' => 'date',
       'order' => 'ASC' ); 
       $postslist = get_posts( $args );    
       foreach ($postslist as $post) {       
         if($post->ID==get_post()->ID)  {
           echo "<li class='active list-group-item'>";
         }  
         else{
          echo "<li class='list-group-item'>"; 
        }
           ?>   
             <a href="<?php echo esc_url( get_the_permalink($post->ID) ); ?> " title="<?php echo $post->post_title ?>">           
          <?php echo $post->post_title ?></a></li>
           <?php 
       }  
       ?>   
       
       <?php 
   }
        //currentcat
        
        $currentcat=get_the_category()[0]->term_id;
        echo "<ul class='list-group'>";
        if($currentcat==4){
        echo "<li class='active list-group-item title'>";}
        else{
          echo "<li class='list-group-item title'>"; 
        }
        echo"<a href='/nos-champagnes/'>".get_the_category_by_ID(4)."</a></li>";
        if($currentcat==4)
        detail($currentcat);
        if($currentcat==5){
          echo "<li class='active list-group-item title'>";}
          else{
            echo "<li class='list-group-item title'>"; 
          }
        echo "<a href='/nos-champagnes/'>". get_the_category_by_ID(5)."</a></li>";
        if($currentcat==5)
        detail($currentcat);
      ?>
    </div>
  </div>
  <div class="col-md-8 bottle-desc">
        <?php $imageUrl = get_the_post_thumbnail_url($post->ID);?>       
           
        <h1 class="mb-0">
          <?php the_title();?>
        </h1>
       
        <?php
        if ($imageUrl) {
          ?>
            <div class="bottle-img"> <img alt="<?php the_title();?>" src="<?php echo $imageUrl ?>" data-holder-rendered="true"></div>
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

