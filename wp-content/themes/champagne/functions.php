<?php
require get_template_directory() . '/metas/functions.php';
/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts()
{
    wp_register_style("main-style", get_template_directory_uri() . "/css/blog.css", array(), true);
    wp_enqueue_style("main-style");
    wp_register_style("bootstrap-style", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", array(), true);  
    wp_enqueue_style("bootstrap-style");
    wp_register_style("bootstrap-style-theme", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css", array(), true);
    wp_enqueue_style("bootstrap-style-theme");
    wp_register_style("family-raleway", "https://fonts.googleapis.com/css?family=Raleway:400,700", array(), true);
    wp_enqueue_style("family-raleway");
}
add_action("wp_enqueue_scripts", "wpdocs_theme_name_scripts");


register_nav_menus( array(
'menu-principal' => 'Menu principal'
) );

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function champagne_widgets_init() {
    register_sidebar( array(
        'id'            => 'sidebar-home',
        'name'          => 'Homepage',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'id'            => 'sidebar-exploitation',
        'name'          => 'Exploitation',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'id'            => 'sidebar-come',
        'name'          => 'Come',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    
}
add_action( 'widgets_init', 'champagne_widgets_init' );

/* Personnaliser le texte "Mettre une image à la Une" dans l'administration */

add_theme_support( 'post-thumbnails' );

function only_actu_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '3' );
    }
}
add_action( 'pre_get_posts', 'only_actu_category' );


add_action('edit_category_form_fields', 'add_form_fields_example', 10, 2);

function add_form_fields_example($term){
    ?>
    <tr valign="top">
        <th scope="row">Description</th>
        <td>
            <?php wp_editor(html_entity_decode($term->description), 'description', array('media_buttons' => false)); ?>
            <script>
                jQuery(window).ready(function(){
                    jQuery('label[for=description]').parent().parent().remove();
                });
            </script>
        </td>
    </tr>
    <?php
} 