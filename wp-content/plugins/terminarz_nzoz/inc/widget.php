<?php

class Terminarz_widget extends Wp_Widget {
    
    function __construct() {
        parent::__construct(
             'terminarz_widget' ,
             'Terminarz przyjęć',
             array('description'=>'pokaż terminarz przyjęć na stronie')
        );
    }
    
    function widget( $args, $instance ){
        $args['before_widget'];
        echo "to jest widget";
        $args['after_widget'];
    }
    
}
function terminarz_load_widget(){
    register_widget('terminarz_widget');

}

add_action('widgets_init', 'terminarz_load_widget');