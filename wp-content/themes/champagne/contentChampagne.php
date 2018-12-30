<div class="row">
  <div class="col-md-4">
    <div class="menu-bottle">
      <?php
      function detail($cat,$currentcat)
      {
        $args = array( 'category' => $cat,
        'post_type' =>  'post',
       'orderby' => 'date',
       'order' => 'ASC' ); 
       $postslist = get_posts( $args );    
       foreach ($postslist as $post) {    
        echo "<li class='list-group-item";   
         if($post->ID==get_post()->ID)  {
           echo " active";
         }  
        echo "' data-parent=".$cat;
        if($cat != $currentcat)
        {
          echo " style='display:none' ";
        }
        echo " >"; 
        
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
        echo "<li class='list-group-item title ";
        if($currentcat==4){
          $backStyle="liverty";
        echo "active";}
        
        echo "' data-id=4 >"; 
        
        echo get_the_category_by_ID(4)."</li>";
       
        detail(4,$currentcat);
        echo "<li class='list-group-item title ";
        if($currentcat==5){
          $backStyle="vigne";
        echo "active";}
        
        echo "'' data-id=5 >"; 
        echo get_the_category_by_ID(5)."</li>";
        
        detail(5,$currentcat);

      ?>
    </div>
  </div>
  <div class="col-md-8 bottle-desc">
        <div class="bkgImg <?php echo  $backStyle; ?>">&nbsp;</div>
        <?php $imageUrl = get_the_post_thumbnail_url($post->ID);?>       
           
        <h1 class="mb-0">
          <?php the_title();?>
        </h1>
       
        <?php
        if ($imageUrl) {
          ?>
            <div class="bottle-img"> 
              <div class="bottle-content">
                <div class="bottle-part">
                <?php
                  $text=get_post_meta(get_post()->ID,"arrow1",true);
                  if ($text!=''){
                  ?>
                  <div class="arrow arrow-text"> <?php echo str_replace(array("\r\n","\n"),"<br>",$text);?>
                  </div>
                  <div class=" arrow arrow-1">
                    <img src="<?php bloginfo('template_directory');?>/img/arrow1.png"" />
                  </div>
                  <?php } ?>
                </div>
                <div class="bottle-part ">
                  <div class="tag tag-1 tag-right"><?php echo get_post_meta(get_post()->ID,"tag1",true);?></div>
                  <div class="tag tag-2 tag-left"><?php echo get_post_meta(get_post()->ID,"tag2",true);?></div>
                </div>
                <div class="bottle-part">
                <?php
                  $text=get_post_meta(get_post()->ID,"arrow2",true);
                  if ($text!=''){
                  ?>
                  <div class="arrow arrow-text"> <?php echo str_replace(array("\r\n","\n"),"<br>",$text);?></div>
                  <div class=" arrow arrow-2"><img src="<?php bloginfo('template_directory');?>/img/arrow2.png"" /></div>
                  <?php } ?>
                </div>
                <div class="bottle-part">
                <?php
                  $text=get_post_meta(get_post()->ID,"arrow3",true);
                  if ($text!=''){
                  ?>
                  <div class=" arrow arrow-3"><img src="<?php bloginfo('template_directory');?>/img/arrow3.png"" />  </div>
                  <div class="arrow arrow-text"> <?php echo str_replace(array("\r\n","\n"),"<br>",$text);?></div>
                  <?php } ?>
                </div>
                <div class="bottle-part ">
                  <div class="tag tag-3 tag-left"><?php echo get_post_meta(get_post()->ID,"tag3",true);?></div>
                  <div class="tag tag-4 tag-right"><?php echo get_post_meta(get_post()->ID,"tag4",true);?></div>
                </div>
                <div class="bottle-part">
                <?php
                  $text=get_post_meta(get_post()->ID,"arrow4",true);
                  if ($text!=''){
                  ?>
                  <div class=" arrow arrow-4"><div class="bottom-text"><img src="<?php bloginfo('template_directory');?>/img/arrow4.png"" /></div></div>
                  <div class="arrow arrow-text"><div class="bottom-text"> <?php echo str_replace(array("\r\n","\n"),"<br>",$text);?></div></div>
                  <?php } ?>
                </div>
              </div>
              <img alt="<?php the_title();?>" src="<?php echo $imageUrl ?>" data-holder-rendered="true">
            </div>
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

