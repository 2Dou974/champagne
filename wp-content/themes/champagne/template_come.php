<?php /* template Name: come */ ?>
<?php get_header(); ?>
<div class="row">
<div class="col-md-8">
<?php
if ( have_posts() ) {
    the_post();
// get_template_part('contentSimple', get_post_format() );

the_content();
}
?>
</div> <!– /.col –>
<div class="col-md-4 widget-come" >
<?php dynamic_sidebar('Come');?>
</div> <!– /.col –>
</div> <!– /.row –>
<?php get_footer(); ?>