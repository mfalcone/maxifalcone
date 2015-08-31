<?php
function register_my_menus() {
  register_nav_menus(
	array(
	  'home-menu' => __( 'Menu principal' ),
	)
  );
}
add_action( 'init', 'register_my_menus' );

?>