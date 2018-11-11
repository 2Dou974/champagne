<?php

class champagne_actualite extends WP_Widget 
{
    function __construct() {
        $widget_ops = array(
			'classname'                   => 'champagne_actualite',
			'description'                 => esc_html__( 'présentation des dernieres actu' ),
			'customize_selective_refresh' => true,
		);
        parent::__construct(
            'champagne_actualite',
            __('[champagne] présentation des dernieres actu'),
            $widget_ops 
        );
    }
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Title', 'text_domain' );
        $intro = ! empty( $instance['intro'] ) ? $instance['intro'] : '';
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_attr_e( 'Title:', 'text_domain' ); ?>
        </label> 
        
        <input 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
            type="text" 
            value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'intro' ) ); ?>">
        <?php esc_attr_e( 'Intro:', 'text_domain' ); ?>
        </label> 
        <input 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'intro' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'intro' ) ); ?>" 
            type="text" 
            value="<?php echo esc_attr( $intro ); ?>">
        </p>
        <p>
        <select id="<?php echo $this->get_field_id('Cat'); ?>" name="<?php echo $this->get_field_name('Cat'); ?>" class="widefat" style="width:100%;">
            <?php foreach(get_terms('category','hide_empty=0') as $term) { ?>
            <option <?php selected( $instance['Cat'], $term->term_id ); ?> value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
            <?php } ?>      
        </select>
    </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['intro'] = ( ! empty( $new_instance['intro'] ) ) ? strip_tags( $new_instance['intro'] ) : '';
        $instance['Cat'] = ( ! empty( $new_instance['Cat'] ) ) ? strip_tags( $new_instance['Cat'] ) : '';
            
        $selected_posts = ( ! empty ( $new_instance['selected_posts'] ) ) ? (array) $new_instance['selected_posts'] : array();
        $instance['selected_posts'] = array_map( 'sanitize_text_field', $selected_posts );
    
        return $instance;
    }
    function widget( $args, $instance ) {
       
        ?>
        <div id="activite">
        <div class="container">
        <?php
         if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        if ( ! empty( $instance['intro'] ) ) {
            ?>
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo apply_filters( 'widget_title', $instance['intro'] ); ?>
                    </div>
                </div>
            <?php
        }
        // echo  $instance['Cat'];
        
            $posts = get_posts( array("category"=>$instance['Cat']));

            foreach($posts as $post)
            {
            
                $this->actDispay($post);
            }

       
        ?>
        </div>
        </div>
		<?php 
    }

    function actDispay($post)
    {
        $image = get_the_post_thumbnail( $post->ID, $size );
        ?>
        <div class="actualityHp">
            <a href="<?php echo esc_url( get_the_permalink($post->ID) ); ?>"> -->
                   
                 <?php echo $image ?>
                 <?php echo $post->post_title; ?>
                  </a>    
            </div>
        
    <?php
    }
}