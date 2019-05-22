<?php get_header();?>
<h1>Nos actualités</h1>
<div class="row">
<div class="col-md-8">
<!-- <div class="row mb-2 equal"> -->
        <?php
if (have_posts()) {
    // $i = 0;
    while (have_posts()) {
        the_post();
        // if ($i % 2==0 && $i != 0) {
        //     ?>
        <!--     </div>
            <div class="row mb-2 equal"> -->
             <?php 
// }
        get_template_part('contentHome', get_post_format());
        // $i++;
    }}
?>
      

<!-- </div> -->
</div> <!– /.col –>
<div class="col-md-4 widget-actu" >
<?php dynamic_sidebar('Actu');?>
</div> <!– /.col –>
</div> <!– /.row –>
<!– /.container –>
<?php get_footer();?>


