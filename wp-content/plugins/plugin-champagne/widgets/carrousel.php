<?php

class champagne_carrousel extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'champagne_carrousel',
            'description' => esc_html__('présentation du carrousel'),
            'customize_selective_refresh' => true,
        );
        parent::__construct(
            'champagne_carrousel',
            __('[champagne] présentation du carrousel'),
            $widget_ops
        );
    }
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'text_domain');
        $intro = !empty($instance['intro']) ? $instance['intro'] : esc_html__('Intro', 'text_domain');
        $img1 = (!empty($instance['img1'])) ? $instance['img1'] : '';
        $img2 = (!empty($instance['img2'])) ? $instance['img2'] : '';
        $img3 = (!empty($instance['img3'])) ? $instance['img3'] : '';
        $img4 = (!empty($instance['img4'])) ? $instance['img4'] : '';
        $img5 = (!empty($instance['img5'])) ? $instance['img5'] : '';
        $img_field_id_1 = $this->get_field_id('img1');
        $img_field_id_2 = $this->get_field_id('img2');
        $img_field_id_3 = $this->get_field_id('img3');
        $img_field_id_4 = $this->get_field_id('img4');
        $img_field_id_5 = $this->get_field_id('img5');

        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
        <?php esc_attr_e('Title:', 'text_domain');?>
        </label>

        <input
            class="widefat"
            id="<?php echo esc_attr($this->get_field_id('title')); ?>"
            name="<?php echo esc_attr($this->get_field_name('title')); ?>"
            type="text"
            value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('intro')); ?>">
        <?php esc_attr_e('Intro:', 'text_domain');?>
        </label>
        <input
            class="widefat"
            id="<?php echo esc_attr($this->get_field_id('intro')); ?>"
            name="<?php echo esc_attr($this->get_field_name('intro')); ?>"
            type="text"
            value="<?php echo esc_attr($intro); ?>">
        </p>
        <p>
            <label for="<?php echo $img_field_id_1 ?>">Image 1 :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id_1 ?>" type="hidden" name="<?php echo $this->get_field_name('img1') ?>" value="<?php echo $img1 ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id_1 ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id_1 ?>" />
            <div id="<?php echo $img_field_id_1 ?>_img" class="upload_image_wrapper">
                <?php if (!empty($img1)): ?>
                    <img width="150" src="<?php echo $img1 ?>" />
                    <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id_1 ?>">Supprimer l'image</a>
                <?php endif?>
            </div>
        </p>
        <p>
            <label for="<?php echo $img_field_id_2 ?>">Image 2 :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id_2 ?>" type="hidden" name="<?php echo $this->get_field_name('img2') ?>" value="<?php echo $img2 ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id_2 ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id_2 ?>" />
            <div id="<?php echo $img_field_id_2 ?>_img" class="upload_image_wrapper">
                <?php if (!empty($img2)): ?>
                    <img width="150" src="<?php echo $img2 ?>" />
                    <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id_2 ?>">Supprimer l'image</a>
                <?php endif?>
            </div>
        </p>
        <p>
            <label for="<?php echo $img_field_id_3 ?>">Image 3 :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id_3 ?>" type="hidden" name="<?php echo $this->get_field_name('img3') ?>" value="<?php echo $img3 ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id_3 ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id_3 ?>" />
            <div id="<?php echo $img_field_id_3 ?>_img" class="upload_image_wrapper">
                <?php if (!empty($img3)): ?>
                    <img width="150" src="<?php echo $img3 ?>" />
                    <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id_3 ?>">Supprimer l'image</a>
                <?php endif?>
            </div>
        </p>
        <p>
            <label for="<?php echo $img_field_id_4 ?>">Image 4 :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id_4 ?>" type="hidden" name="<?php echo $this->get_field_name('img4') ?>" value="<?php echo $img4 ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id_4 ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id_4 ?>" />
            <div id="<?php echo $img_field_id_4 ?>_img" class="upload_image_wrapper">
                <?php if (!empty($img4)): ?>
                    <img width="150" src="<?php echo $img4 ?>" />
                    <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id_4 ?>">Supprimer l'image</a>
                <?php endif?>
            </div>
        </p>
        <p>
            <label for="<?php echo $img_field_id_5 ?>">Image 5 :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id_5 ?>" type="hidden" name="<?php echo $this->get_field_name('img5') ?>" value="<?php echo $img5 ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id_5 ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id_5 ?>" />
            <div id="<?php echo $img_field_id_5 ?>_img" class="upload_image_wrapper">
                <?php if (!empty($img5)): ?>
                    <img width="150" src="<?php echo $img5 ?>" />
                    <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id_5 ?>">Supprimer l'image</a>
                <?php endif?>
            </div>
        </p>
        <script>



        </script>
        <?php
}

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['intro'] = (!empty($new_instance['intro'])) ? strip_tags($new_instance['intro']) : '';
        $instance['img1'] = (!empty($new_instance['img1'])) ? strip_tags($new_instance['img1']) : '';
        $instance['img2'] = (!empty($new_instance['img2'])) ? strip_tags($new_instance['img2']) : '';
        $instance['img3'] = (!empty($new_instance['img3'])) ? strip_tags($new_instance['img3']) : '';
        $instance['img4'] = (!empty($new_instance['img4'])) ? strip_tags($new_instance['img4']) : '';
        $instance['img5'] = (!empty($new_instance['img5'])) ? strip_tags($new_instance['img5']) : '';

        return $instance;
    }
    public function widget($args, $instance)
    {
        extract($args);
        ?>

        <div class="champagne-carrousel">
        <div class="inner-text">
        <h2><?php echo $instance['title'] ?></h2>
        <p>
        <?php echo $instance['intro'] ?>
        </p>
        </div>
        <?php
$nb = 0;
        if ($instance['img5'] != '') {$nb = 5;} elseif ($instance['img4'] != '') {$nb = 4;} elseif ($instance['img3'] != '') {$nb = 3;} elseif ($instance['img2'] != '') {$nb = 2;} elseif ($instance['img1'] != '') {$nb = 1;}
        if ($nb > 0) {
            ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
for ($i = 1; $i <= $nb; $i++) {
                if ($i == 1) {
                    echo "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
                } else {
                    echo "<li data-target='#myCarousel' data-slide-to='" . ($i - 1) . "'></li>";
                }
            }
            ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
for ($i = 1; $i <= $nb; $i++) {
                if ($i == 1) {
                    echo "<div class='item active'><img src='" . esc_url($instance['img1']) . "'></div>";
                } else {
                    echo "<div class='item'><img src='" . esc_url($instance[('img' . $i)]) . "'></div>";
                }
            }
            ?>


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <?php
}
    }
   
}