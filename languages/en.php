<?php
	$english = array(

		'group_admin_transfer:transfer' => 'Transfer ownership to',
		'group_admin_transfer:transfer:myself' => 'Myself',
		'group_admin_transfer:transfer:nofriends' => 'When you add friends, you will get the option of transferring the ownership of this group to them.',
		'group_admin_transfer:transfer_submit' => 'Transfer',
		'group_admin_transfer:confirm' => 'If you confirm the process is irreversable, please make sure your friend knows about the transfer!\n Are you sure you wish to transfer ownership of this group to',

		'group_admin_transfer:transfer:error' => 'The following error occurred',
		'group_admin_transfer:transfer:error:notowner' => 'Logged in user is not current owner of the group',
		'group_admin_transfer:transfer:error:owner' => 'Current owner equals new owner',
		'group_admin_transfer:transfer:error:input' => 'Invalid input',

		'group_admin_transfer:transfer:success' => 'Succesfully transfer ownership to %s',

		// admin settings
		'group_admin_transfer:admin:settings:transferrights' => 'Select who can transfer group ownership',
		'group_admin_transfer:admin:settings:transferrights:option:all' => 'All admins',
		'group_admin_transfer:admin:settings:transferrights:option:admin_only' => 'Site Admin only',
	
	);
					
	add_translation("en",$english);
?>