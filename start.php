<?php
 
function butterfly_init() {
    // Extend system CSS with our own styles
    
	elgg_extend_view('page/elements/elgg','page/elements/header_logo');
	elgg_extend_view('page/elements/elgg','page/elements/header');

	 elgg_extend_view('css/elements/elgg','css/elements/layout');
	 elgg_extend_view('css/elements/elgg','css/elements/navigation');

	elgg_unregister_menu_item('topbar', 'elgg_logo');

	//elgg_unregister_menu_item('topbar', array(
	//		'name' => 'messages',
	//		
	//	));
   

	elgg_extend_view('page/elements/elgg','page/elements/walled_garden');
	
    // Replace the default index page
    register_plugin_hook('index','system','new_index');
	
	if (elgg_is_logged_in()){
	
			
		
	

			
	
			

	
			

		
			
			elgg_extend_view('page/elements/sidebar_alt', 'page/elements/profile','700');
			
			
			
			
			

	
	
}
	
	

	
 }
 

function new_index() {
    if (!include_once(dirname(dirname(__FILE__)) . "/butterfly/index.php"))
        return false;
 
    return true;
}
 
// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init','system','butterfly_init');

?>