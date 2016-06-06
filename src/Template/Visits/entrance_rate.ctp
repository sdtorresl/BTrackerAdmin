<?= $this->Html->script('Chart.min'); ?>

<script>

	
	<?php 
	$colors = [
		["#f44336", "#e53935"],
		["#673ab7", "#5e35b1"],
		["#03a9f4", "#039be5"],
		["#4caf50", "#43a047"],
		["#ffeb3b", "#fdd835"],
		["#ff5722", "#f4511e"],
		["#607d8b", "#546e7a"],
		["#ffc107", "#ffb300"],
		["#8bc34a", "#7cb342"],
		["#00bcd4", "#00acc1"],
		["#3f51b5", "#3949ab"],
		["#e91e63", "#d81b60"]
	];

	foreach ($stores as $store): ?>
		<?= "var pieData" . $store->id . " = ["; ?>
		
		<?php foreach ($entrance_rate as $key => $visit): ?>
			<?php if ($visit['store'] == $store->name) { ?>
			<?=
				"{" .
				'label: "' . h($visit['entrance'] == 1 ? 'Entrance' : 'Others') . '",' .
				'value: ' . h($visit['visits']) . ',' . 
				'color: "' . $colors[$key][0] . '",' .
				'highlight: "' . $colors[$key][1] . '"' .
				"}," 
			?>
			<?php } ?>
		<?php endforeach; ?> 
		<?="];"	?>	
	<?php endforeach; ?>

	window.onload = function (){
		<?php foreach ($stores as $store): ?>
			<?= "var ctx" . $store->id . " = document.getElementById(\"canvas" .  $store->id . "\").getContext(\"2d\");" .
			"window.myPie = new Chart(ctx" . $store->id . ").Pie(pieData" . $store->id .", {							responsive: true
			});" ?>
		<?php endforeach; ?>
	}
</script>

<div class="visits index white-bg z-depth-3">
	<div class="card-panel grey darken-4">
		<a href="/stats" class="left">
			<i class="material-icons back">keyboard_backspace</i>
		</a>
		<h1><?= __('Rate of entrances') ?></h1>
	</div>
	<div class="wrapper">
		<p><?= __('The rate of the customers that were in your store and went into other zones.') ?></p>
		
		<?php foreach ($stores as $store): ?>
			<div class="clear"></div>    
			<h2><?= $store->name ?></h2>
			<div class="chart-container col l6 m8 s12 offset-l3">
				<canvas id="canvas<?= $store->id?>" height="80px" width="100px"></canvas>
			</div>
			
			

			<!-- Conversion rate -->
			<div class="col l3">
				<div class="card z-depth-2 blue-grey">
					<div class="wrapper">
						<div class="title"><?= __('Conversion rate') ?></div>
						<div class="price">
							<div>
								<?php 

								foreach ($entrance_rate as $key => $visit) {
									if ($visit['store'] == $store->name) { 
										$visit['entrance'] ? $entrance = $visit['visits'] : $total = $visit['visits'];
									}
								} 
								
								$conversionRate = ($entrance/$total) * 100;
								echo $this->Number->toPercentage($conversionRate, 1);
								?>
								
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		
		<div class="clear"></div>    
	</div>
</div>
