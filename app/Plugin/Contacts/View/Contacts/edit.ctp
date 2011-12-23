<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
 		<legend><?php echo __('Edit Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('contact_type_id');
		echo $this->Form->input('contact_source_id');
		echo $this->Form->input('contact_industry_id');
		echo $this->Form->input('contact_rating_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('is_company');
		echo $this->Form->input('creator_id');
		echo $this->Form->input('modifier_id');
		echo $this->Form->input('Contact');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Projects',
		'items' => array(
			$this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Contact.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Contact.id'))),
			$this->Html->link(__('List Contacts', true), array('action' => 'index')),
			$this->Html->link(__('List Enumerations', true), array('controller' => 'enumerations', 'action' => 'index')),
			$this->Html->link(__('New Contact Type', true), array('controller' => 'enumerations', 'action' => 'add')),
			$this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')),
			$this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')),
			$this->Html->link(__('List Contact Addresses', true), array('controller' => 'contact_addresses', 'action' => 'index')),
			$this->Html->link(__('New Contact Address', true), array('controller' => 'contact_addresses', 'action' => 'add')),
			$this->Html->link(__('List Contact Details', true), array('controller' => 'contact_details', 'action' => 'index')),
			$this->Html->link(__('New Contact Detail', true), array('controller' => 'contact_details', 'action' => 'add')),
			$this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')),
			$this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')),
			)
		),
	)));
?>