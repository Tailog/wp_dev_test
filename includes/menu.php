<?php
  /**
   * Create a dynamic nav-menu, the user will customize it in the back office.
   * 
   */
  function register_main_menu(){
    //https://developer.wordpress.org/reference/functions/register_nav_menu/
    /**
     * register_nav_menu create a custom location in the menu panel.
     */
    register_nav_menu('main-menu', 'Principal Navbar');
  }
  // https://developer.wordpress.org/reference/functions/add_action/
  add_action('after_setup_theme','register_main_menu');

  /**
   * Customize <a> tags of our menus, the parameters come from the 'nav_menu_link_attributes' hook
   * 
   * https://developer.wordpress.org/reference/hooks/nav_menu_link_attributes/
   * @param $atts array containing attributes of the <a>
   * @param $item the current menu item
   * @param $args the array that we got in parameters when we use wp_nav_menu
   */
  function modify_link($atts,$item,$args){
    // We modify the <a> tags of main-menu only
    if($args->theme_location == 'main-menu'){
      $atts['class'] = 'nav-link';
    }
    //Add class attribute to our tag
    return $atts;
  }
  // https://developer.wordpress.org/reference/functions/add_filter/
  add_filter('nav_menu_link_attributes','modify_link',10,3);

  /**
   * Customize <li> tags of our menus, the parameter come from the 'nav_menu_css_class'
   * 
   * https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
   * 
   * @param $atts array containing attributes of the <li>, the array is empty as default
   * @param $item the current menu item
   * @param $args the array that we got in parameters when we use wp_nav_menu
   */
  function modify_li($classes,$item,$args){
    // We modify the <li> tags of main-menu only
    if($args->theme_location == 'main-menu'){
      $classes[] = 'nav-item';
    }
    //Add 'active' class to the curent link, corresponding to the page.
    if(in_array('current-menu-item',$classes)){
      $classes[] = 'active';
    }
    //Add class attribute to our tag
    return $classes;
  }
  // https://developer.wordpress.org/reference/functions/add_filter/
  add_filter('nav_menu_css_class','modify_li',10,3);



