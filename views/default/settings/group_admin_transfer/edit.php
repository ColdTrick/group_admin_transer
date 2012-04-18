<?php 

?>
<p>
	<?php echo elgg_echo('group_admin_transfer:admin:settings:transferrights'); ?>
	<select name="params[transferrights]">
		<option value="all" <?php if ($vars['entity']->transferrights == 'all') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('group_admin_transfer:admin:settings:transferrights:option:all'); ?></option>
		<option value="admin_only" <?php if ($vars['entity']->transferrights != 'all') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('group_admin_transfer:admin:settings:transferrights:option:admin_only'); ?></option>
	</select>
</p>	