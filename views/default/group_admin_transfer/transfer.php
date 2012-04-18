<?php
	if(!empty($vars["entity"]) && ($vars["entity"] instanceof ElggGroup)){ 
		$group = $vars["entity"];
		$user = get_loggedin_user();
		
		$friends_options = array(
			"type" => "user",
			"relationship" => "friend",
			"relationship_guid" => $user->getGUID(),
			"limit" => false,
		);
		
		$member_options = array(
			"type" => "user",
			"relationship" => "member",
			"relationship_guid" => $group->getGUID(),
			"inverse_relationship" => true,
			"limit" => false,
		);
		
		$friends = elgg_get_entities_from_relationship($friends_options);
		$members = elgg_get_entities_from_relationship($member_options);
		
		if(!empty($friends) && !empty($members)){
			
	 		$result = "
	 			<script type='text/javascript'> 
	 				function transferOwner(){
	 					if(confirm('" . elgg_echo("group_admin_transfer:confirm"). " ' + $('#transfer_new_owner option:selected').html() + '?')){
	 						document.location.href = '" . elgg_add_action_tokens_to_url($vars["url"] . "action/group_admin_transfer/transfer?group_guid=" . $vars['entity']->guid) . "&new_owner_guid=' +  $('#transfer_new_owner').val();
	 					}
	 				}
	 			</script>
	 			";
	 		
	 		$result .= elgg_echo("group_admin_transfer:transfer") . ": ";
	 		$result .= "<select id='transfer_new_owner'>\n";
	 		
	 		if($group->getOwner() != $user->getGUID()){
	 			$result .= "<option value='" . $user->getGUID() . "'>" . elgg_echo("group_admin_transfer:transfer:myself") . "</option>\n";
	 		}
	 		
	 		if(!empty($friends)){
	 			$add_friends = false;
	 			$friends_block .= "<optgroup label='" . elgg_echo("friends") . "'>\n";
		 		
	 			foreach($friends as $friend){
	 				if($group->getOwner() != $friend->getGUID()){
	 					$add_friends = true;
	 					
		 				$friends_block .= "<option value='" . $friend->getGUID() . "'>" . $friend->name . "</option>\n";
	 				}
		 		}
		 		
		 		$friends_block .= "</optgroup>\n";
		 		
		 		if($add_friends){
		 			$result .= $friends_block;
		 		}
	 		}
	 		
	 		if(!empty($members)){
	 			$add_members = false;
	 			
	 			$members_block .= "<optgroup label='" . elgg_echo("groups:members") . "'>\n";
		 		
	 			foreach($members as $member){
	 				if(($group->getOwner() != $member->getGUID()) && ($user->getGUID() != $member->getGUID())){
	 					$add_members = true;
	 					
		 				$members_block .= "<option value='" . $member->getGUID() . "'>" . $member->name . "</option>\n";
	 				}
		 		}
		 		
		 		$members_block .= "</optgroup>\n";
		 		
		 		if($add_members){
		 			$result .= $members_block;
		 		}
	 		}
	 		
	 		$result .= "</select>\n";
	 		$result .= "<br />";
	 		$result .= "<input type='button' class='submit_button' value='" . elgg_echo("group_admin_transfer:transfer_submit") . "' onclick='transferOwner();'>";
	 	} else {
	 		$result = elgg_echo("group_admin_transfer:transfer:nofriends");
	 	}
	
		echo "<div class='contentWrapper'>";
		echo $result;
		echo "</div>";
	}
?>