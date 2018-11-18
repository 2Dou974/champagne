<?php get_header();?>
<div class="row mb-2 equal">
        <?php
if (have_posts()) {
    $i = 0;
    while (have_posts()) {
        the_post();
        if ($i % 2==0 && $i != 0) {
            ?>
            </div>
            <div class="row mb-2 equal">
            <?php
}
        get_template_part('contentHome', get_post_format());
        $i++;
    }}
?>
      

</div>
<!– /.container –>
<?php get_footer();?>


