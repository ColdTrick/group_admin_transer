<?php
	$dutch = array(

		'group_admin_transfer:transfer' => 'Eigenaar overdragen naar',
		'group_admin_transfer:transfer:myself' => 'Mijzelf',
		'group_admin_transfer:transfer:nofriends' => 'Als je vrienden toevoegt, krijg je de optie om de eigenaar van deze groep over te dragen.',
		'group_admin_transfer:transfer_submit' => 'Overdragen',
		'group_admin_transfer:confirm' => 'Indien je dit bevestigd is het process onmkeerbaar. Controlleer dat je vriend weet van de overdracht!\n Weet je zeker dat je de eigenaar van deze groep wilt wijzigen naar',

		'group_admin_transfer:transfer:error' => 'De volgende fout is opgetreden',
		'group_admin_transfer:transfer:error:notowner' => 'Aangemelde gebruiker is niet de huidige eigenaar van de groep',
		'group_admin_transfer:transfer:error:owner' => 'Huidige eigenaar is gelijk aan nieuwe eigenaar',
		'group_admin_transfer:transfer:error:input' => 'Onjuiste invoer',

		'group_admin_transfer:transfer:success' => '%s is de nieuwe eigenaar van de groep',
	
		// 	admin settings
		'group_admin_transfer:admin:settings:transferrights' => 'Wie kan de groepseigenaar wijzigen?',
		'group_admin_transfer:admin:settings:transferrights:option:all' => 'Alle beheerders',
		'group_admin_transfer:admin:settings:transferrights:option:admin_only' => 'Alleen sitebeheerder',
	);
					
	add_translation("nl",$dutch);
?>