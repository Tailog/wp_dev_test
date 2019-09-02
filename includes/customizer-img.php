<?php
  /**
   * 3 Steps to create a custom panel IN THIS ORDER OR IT WILL NOT WORK,
   * 1- Create panel
   * 2- Create section
   * 3- Create settings
   * 4- Create Control
   */
   function add_image_header_panel($wp_customize){
    /**
    * Adding Panel
    *https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
    */
    $wp_customize->add_panel('image_header', [
      'title' => __('Image Carousel'),
      'Description' => __('Custom Image')
    ]);
    /**
     * Adding Section
     * https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
     */
    $wp_customize->add_section('image_header_section', [
      'panel' => 'image_header',
      'title' => __('Customize Image Header'),
      'description' => __('You can choose 2 images of the header carousel')
    ]);
    /**
     * Adding Setting that contains informations about database corresponding to his id
     * https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
     */
    $wp_customize->add_setting('image_header_1', [
      'type' => 'theme_mod',
    ]);
    $wp_customize->add_setting('image_header_2', [
      'type' => 'theme_mod',
    ]);
    /**
    * Adding img control . The control has to be atttached to a section and setting
    * https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    */
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'image_header_1_control',
        array(
            'label'      => __( 'Upload Your Image 1' ),
            'section'    => 'image_header_section',
            'settings'   => 'image_header_1',
        )
        ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'image_header_2_control',
        array(
            'label'      => __( 'Upload Your Image 2' ),
            'section'    => 'image_header_section',
            'settings'   => 'image_header_2',
        )
        ));
   }
   add_action('customize_register', 'add_image_header_panel');
