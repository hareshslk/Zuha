
<?php echo $this->Html->script('https://www.google.com/jsapi', array('inline' => false)); ?>
<?php echo $this->Html->script('plugins/jquery.masonry.min', array('inline' => false)); ?>
<div class="masonry contacts dashboard">
	<div class="masonryBox dashboardBox tagLeads">
    	<h3><span class="label label-important">Attention!</span> New Leads </h3>
        <?php 
		if (!empty($leads)) {
			echo '<p>The latest incoming contacts, that have not been claimed yet.<p>';
			foreach ($leads as $lead) {
				echo '<p>' . $this->Html->link('Assign', array('plugin' => 'contacts', 'controller' => 'contacts', 'action' => 'edit', $lead['Contact']['id']), array('class' => 'btn btn-mini btn-primary')) . ' ' . $this->Html->link($lead['Contact']['name'], array('plugin' => 'contacts', 'controller' => 'contacts', 'action' => 'view', $lead['Contact']['id'])) . ' ' . date('M d, Y', strtotime($lead['Contact']['created'])) . '</p>';
			}
		} 
		
		if (!empty($leadActivities)) { 
        	echo '<h4>Leads over time</h4>'; ?>
            
			<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawLeadsChart);
				 
			function drawLeadsChart() {
				// Create and populate the data table.
				var data = google.visualization.arrayToDataTable([
				['x', 'Date'],
				<?php 
				foreach ($leadActivities as $leadGroup) { ?>
					['<?php echo date('M d, Y', strtotime($leadGroup['Activity']['created'])); ?>',   <?php echo $leadGroup['Activity']['COUNT(`Activity`.`created`)']; ?>],
				<?php } ?>
				]);
						
				// Create and draw the visualization.
				new google.visualization.LineChart(document.getElementById('leads_over_time')).
					draw(data, {
						curveType: "function",
						width: 290, height: 200,
						legend: {position: 'none'},
						chartArea: {width: '80%', height: '80%'}
						}
					);
				$(".masonry").masonry("reload"); // reload the layout
			}
			</script>
            
 			<div id="leads_over_time"></div>
		<?php
        } ?>
	</div>
    
    
	<div class="masonryBox dashboardBox tagOpportunities">
    	<h3><i class="icon-th-large"></i> Open Opportunities </h3>
        <?php 
		if (!empty($estimates)) {
			echo '<div class="alert alert-success"><h1> $'. $estimates['_total'] . '</h1></div>';
			echo '<p> Calculated by taking the total, <strong> $'. $estimates['_subTotal'] . '</strong> and multiplying by the average likelihood of closing, <strong> ' . $estimates['_multiplier'] . '%</strong></p>';
			unset($estimates['_subTotal']);
			unset($estimates['_multiplier']);
			unset($estimates['_total']);
			foreach ($estimates as $estimate) {
				echo '<p>' . $this->Html->link('Close', array('plugin' => 'estimates', 'controller' => 'estimates', 'action' => 'edit', $estimate['Estimate']['id']), array('class' => 'btn btn-mini btn-primary')) . ' ' . $this->Html->link($estimate['Estimate']['name'], array('plugin' => 'estimates', 'controller' => 'estimates', 'action' => 'view', $estimate['Estimate']['id'])) . '</p>';
			}
		} 
		
		if (!empty($estimateActivities)) { 
        	echo '<h4>Opportunities over time</h4>'; ?>
            
			<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawLeadsChart);
				 
			function drawLeadsChart() {
				// Create and populate the data table.
				var data = google.visualization.arrayToDataTable([
				['x', 'Date'],
				<?php 
				foreach ($estimateActivities as $estimateGroup) { ?>
					['<?php echo date('M d, Y', strtotime($estimateGroup['Activity']['created'])); ?>',   <?php echo $estimateGroup['Activity']['COUNT(`Activity`.`created`)']; ?>],
				<?php } ?>
				]);
						
				// Create and draw the visualization.
				new google.visualization.LineChart(document.getElementById('estimates_over_time')).
					draw(data, {
						curveType: "function",
						width: 290, height: 200,
						legend: {position: 'none'},
						chartArea: {width: '80%', height: '80%'}
						}
					);
				$(".masonry").masonry("reload"); // reload the layout
			}
			</script>
            
 			<div id="estimates_over_time"></div>
		<?php
        } ?>
	</div>
    
    
	<div class="masonryBox dashboardBox tagActivities">
    	<h3><i class="icon-th-large"></i> Search Contacts </h3>
		<?php 	
		echo $this->Element('forms/search', array(
		'url' => '/contacts/contacts/index/', 
		'inputs' => array(
			array(
				'name' => 'contains:name', 
				'options' => array(
					'label' => '', 
					'placeholder' => 'Type Your Search and Hit Enter'
					)
				),
			)
		)); ?>
	</div>
    
    
    <?php 
	if (!empty($tasks)) { ?>
	<div class="masonryBox dashboardBox tagTasks">
    	<h3><i class="icon-th-large"></i> Upcoming Tasks </h3>
    		<?php
			echo '<p>A list of scheduled follow ups.</p>';
			foreach ($tasks as $task) {
				echo '<p>' . $this->Html->link('Complete', array('plugin' => 'tasks', 'controller' => 'tasks', 'action' => 'completed', $task['Task']['id']), array('class' => 'btn btn-mini btn-primary')) . ' ' . $this->Html->link($task['Task']['name'], array('plugin' => 'tasks', 'controller' => 'tasks', 'action' => 'view', $task['Task']['id'])) . ', due ' . date('M d, Y', strtotime($task['Task']['due_date'])) . '</p>';
			} ?>
	</div>
	
	<?php
	} ?>
    
    
    <?php 
	if (!empty($myContacts)) { ?>
	<div class="masonryBox dashboardBox tagMyContacts">
    	<h3><i class="icon-th-large"></i> My Contacts </h3>
    	<p>The last five contacts assigned to you.</p>
		<?php
		foreach ($myContacts as $contact) {
			echo '<p>' . $this->Html->link($contact['Contact']['name'], array('action' => 'view', $contact['Contact']['id'])) . '</p>';
		} ?>
		<p class="pull-right"><?php echo $this->Html->link('View all of your contacts here', array('action' => 'index', 'filter' => 'assignee_id:' . $this->Session->read('Auth.User.id'))); ?></p>
	</div>
	<?php
	} ?>
    
    
    <?php 		
	if (!empty($activities)) { ?>
	<div class="masonryBox dashboardBox tagActivities">
    	<h3><i class="icon-th-large"></i> Activity </h3>
    	<?php
    	$rActivities = array_reverse($activities);
    	for ($i = 0; $i <= 4; $i++) {
    		echo '<p>' . $this->Html->link($rActivities[$i]['Activity']['name'], array('plugin' => 'contacts', 'controller' => 'contacts', 'action' => 'view', $rActivities[$i]['Activity']['foreign_key'])) . '</p>';
    	} ?> 
		<h4>Activities over time</h4>
        
		<script type="text/javascript">
		google.load("visualization", "1", {packages:["corechart"]});
		google.setOnLoadCallback(drawLeadsChart);
			 
		function drawLeadsChart() {
			// Create and populate the data table.
			var data = google.visualization.arrayToDataTable([
			['x', 'Date'],
			<?php 
			foreach ($activities as $activity) { ?>
				['<?php echo date('M d, Y', strtotime($activity['Activity']['created'])); ?>',   <?php echo $activity['Activity']['COUNT(Activity.created)']; ?>],
			<?php } ?>
			]);
					
			// Create and draw the visualization.
			new google.visualization.LineChart(document.getElementById('activities_over_time')).
				draw(data, {
					curveType: "function",
					width: 290, height: 200,
					legend: {position: 'none'},
					chartArea: {width: '80%', height: '80%'}
					}
				);
			$(".masonry").masonry("reload"); // reload the layout
		}
		</script>
        
		<div id="activities_over_time"></div>
	<?php
    } ?>
	</div>
    
</div>

<?php
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => '',
		'items' => array(
			$this->Html->link(__('Leads'), array('plugin' => 'contacts', 'controller'=> 'contacts', 'action' => 'index', 'filter' => 'contact_type:lead')),
			$this->Html->link(__('Companies'), '/contacts/contacts/index/filter:is_company:1/filter:contact_type:customer'),
			$this->Html->link(__('People'), '/contacts/contacts/index/filter:is_company:0/filter:contact_type:customer'),
			),
		),
	array(
		'heading' => '',
		'items' => array(
			$this->Html->link(__('Add'), array('plugin' => 'contacts', 'controller'=> 'contacts', 'action' => 'add')),
			),
		),
	))); ?>
	

