<?php /* template Name: template-home */?>
<?php get_header();?>
<script src="<?php bloginfo('template_directory');?>/js/home.js"></script>
<div class="row ">
<?php dynamic_sidebar('Homepage');?>
</div>
</div>
<!– /.container –>
<?php get_footer();?>
