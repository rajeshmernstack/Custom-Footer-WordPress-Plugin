<?php
/*
Plugin Name: Custom Footer
Plugin URI: https://www.example.com/hello-footer
Description: This plugin helps to add custom offer in WordPress site
Version: 1.0
Author: Rajesh Kumar
Author URI: https://www.example.com/
*/

function add_hello_footer() {
  echo '<div style="display: flex !important; background-color: black;align-items: center !important; justify-content: center !important; padding: 6px 0 6px 0 !important;">
  <img src="https://cdn-icons-png.flaticon.com/512/2107/2107845.png" height="50" width="50" alt="heart">
  <h1 style="color: white !important; margin: 5px 0 5px 10px !important;">Proudly Identifies as Black - Owned</h1>
</div>';
}

add_action('wp_footer', 'add_hello_footer');
?>

