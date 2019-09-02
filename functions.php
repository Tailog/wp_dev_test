<?php
  /**
   * To make a beautiful code, refactor the functions.php into files in includes, to keep this main page clean
   */
  // define() can create a global variable, to avoid waste of time, we just have to it when we want to
  define('INCLUDE_DIR', get_template_directory() . "/includes");
  define('IMG_DIR',get_template_directory_uri().'/images');
  // require_once() import files that we need
  require_once(INCLUDE_DIR . '/enqueue_style_script.php');
  require_once(INCLUDE_DIR . '/menu.php');
  require_once(INCLUDE_DIR . '/customizer-img.php');