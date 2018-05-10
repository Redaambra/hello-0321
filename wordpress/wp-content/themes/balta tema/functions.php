<?php
if ( ! function_exists( 'baltabalta_setup' ) ) :
function baltabalta_setup() {
register_nav_menus( array(
'primary' => 'Pagrindinis Meniu'
) );
}
add_action( 'after_setup_theme', 'baltabalta_setup' );
endif;
?>