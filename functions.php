<?php



function loadstylesheets(){
  
    wp_register_style('robotolight',get_template_directory_uri() .'/fonts/roboto_light/stylesheet.css',array(),1,all);
    wp_enqueue_style('robotolight');
    
    wp_register_style('robotothin',get_template_directory_uri() .'/fonts/roboto_thin/stylesheet.css',array(),1,all);
    wp_enqueue_style('robotothin');

    wp_register_style('resetsheet',get_template_directory_uri() .'/css/reset.css',array(),1,all);
    wp_enqueue_style('resetsheet');

    wp_register_style('bodysheet',get_template_directory_uri() .'/css/bodysheet.css',array(),1,all);
    wp_enqueue_style('bodysheet');

    wp_register_style('main_containersheet',get_template_directory_uri() .'/css/main_containersheet.css',array(),1,all);
    wp_enqueue_style('main_containersheet');

    wp_register_style('main_gallerysheet',get_template_directory_uri() .'/css/main_gallerysheet.css',array(),1,all);
    wp_enqueue_style('main_gallerysheet');

    wp_register_style('mediasheet',get_template_directory_uri() .'/css/mediasheet.css',array(),1,all);
    wp_enqueue_style('mediasheet');

    wp_register_style('navsheet',get_template_directory_uri() .'/css/navsheet.css',array(),1,all);
    wp_enqueue_style('navsheet');

    wp_register_style('stylesheet1',get_template_directory_uri() .'/svg/stylesheet.css',array(),1,all);
    wp_enqueue_style('stylesheet1');

    wp_register_style('stylesheet2',get_template_directory_uri() .'/png/stylesheet.css',array(),1,all);
    wp_enqueue_style('stylesheet2');
   
    wp_enqueue_script('lazyload2.js',get_template_directory_uri() .'/js/lazyload2.js',NULL,1.0,false);


}

add_action('wp_enqueue_scripts','loadstylesheets');



