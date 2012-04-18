<?php
	
	function group_admin_transfer_init(){
		$transferrights = get_plugin_setting("transferrights");
		if($transferrights == "all"){
			// everyone can transfer (admin and group admin)			
			extend_view("forms/groups/edit", "group_admin_transfer/transfer",499);
		} elseif(isadminloggedin()){
			// only admin may transfer
			extend_view("forms/groups/edit", "group_admin_transfer/transfer",499);
		}	
	}
	

	// Default event handlers for plugin functionality
	register_elgg_event_handler('init', 'system', 'group_admin_transfer_init');
	
	// actions
	register_action('group_admin_transfer/transfer', false, $CONFIG->pluginspath . 'group_admin_transfer/actions/transfer.php');
?>
