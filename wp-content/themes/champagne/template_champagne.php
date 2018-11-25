<?php /* template Name: champagne */ ?>
<?php get_header(); ?>
<div class="champagne">
<div class="row">
    <div class="col-md-12">
<?php
if ( have_posts() ) {
    the_post();

the_content();
}
    function displayBtl($cat)
    {
        ?>   
        <div class="bottles"> 
         <?php 
        $args = array( 'category' => $cat,
         'post_type' =>  'post',
        'orderby' => 'date',
        'order' => 'ASC' ); 
        $postslist = get_posts( $args );    
        foreach ($postslist as $post) {
            $imageUrl=get_the_post_thumbnail_url( $post->ID); 
            ?>   
              <a href="<?php echo esc_url( get_the_permalink($post->ID) ); ?> " title="<?php echo $post->post_title ?>">           
            <img class="img-bottle"  alt="<?php echo $post->post_title ?>" 
            src="<?php echo $imageUrl?>"
             data-holder-rendered="true"></a>
            <?php 
        }  
        ?>   
        </div> 
        <?php 
    }
    ?> 
   
</div>
</div> <!– /.row –>
<div class="row">
    <div class="col-md-6 intemporels">
     
    <?php 
    echo "<h2>".get_the_category_by_ID(4)."</h2>";
    // btle
    displayBtl(4);
    echo category_description(4);
    ?> 
    </div>
    <div class="col-md-6 terroir ">
    <?php
     echo "<h2>".get_the_category_by_ID(5)."</h2>";
       // btle
    displayBtl(5);
    echo category_description(5);
    ?> 
    </div>
</div>
<?php get_footer(); ?>