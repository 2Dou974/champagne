<?php get_header(); ?>
<div class='single'>
<?php
// Start the loop.
while ( have_posts() ) : the_post();

/*
 * Include the post format-specific template for the content. If you want to
 * use this in a child theme, then include a file called content-___.php
 * (where ___ is the post format) and that will be used instead.
 */
$footerName=null;

if(is_woocommerce())
{
    get_template_part( 'content', 'shop' );
}
else{
    //category
    $catId=get_the_category()[0]->term_id;
  
    switch($catId)
    {
        case 4:case 5:
        get_template_part( 'contentChampagne', get_post_format() );
        $footerName="champagne";
        break;
        default:
        get_template_part( 'contentActu', get_post_format() );
    }
}




endwhile;
?>

</div>


<?php get_footer($footerName); ?>