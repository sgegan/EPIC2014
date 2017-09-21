<?php

function register_my_menu() {
  register_nav_menu('schedule-nav',__( 'Schedule Nav' ));
}
add_action( 'init', 'register_my_menu' );

?>