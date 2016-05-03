<?= $this->Html->script('Chart.min'); ?>

<script>
	var barChartData = {
		labels : [ <?php foreach ($permanency as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($permanency as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]
	}

	<?php if (isset($week1)): ?>
	var barChartDataWeek1 = {
		labels : [ <?php foreach ($week1 as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($week1 as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]
	}

	var barChartDataWeek2 = {
		labels : [ <?php foreach ($week2 as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($week2 as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]
	}

	var barChartDataWeek3 = {
		labels : [ <?php foreach ($week3 as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($week3 as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]
	}

	var barChartDataWeek4 = {
		labels : [ <?php foreach ($week4 as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($week4 as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]
	}

	var barChartDataWeek5 = {
		labels : [ <?php foreach ($week5 as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($week5 as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]
	}
	<?php endif; ?>

	window.onload = function (){
		var ctx = document.getElementById("all-weeks").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});

		<?php if (isset($week1)): ?>

		var ctx1 = document.getElementById("week1").getContext("2d");
		window.myBarWeek1 = new Chart(ctx1).Bar(barChartDataWeek1, {
			responsive : true
		});

		var ctx2 = document.getElementById("week2").getContext("2d");
		window.myBarWeek2 = new Chart(ctx2).Bar(barChartDataWeek2, {
			responsive : true
		});

		var ctx3 = document.getElementById("week3").getContext("2d");
		window.myBarWeek3 = new Chart(ctx3).Bar(barChartDataWeek3, {
			responsive : true
		});

		var ctx4 = document.getElementById("week4").getContext("2d");
		window.myBarWeek4 = new Chart(ctx4).Bar(barChartDataWeek4, {
			responsive : true
		});

		var ctx5 = document.getElementById("week5").getContext("2d");
		window.myBarWeek5 = new Chart(ctx5).Bar(barChartDataWeek5, {
			responsive : true
		});
		<?php endif; ?>

	}
</script>

<div class="visits index white-bg z-depth-3">
	<div class="card-panel grey darken-4">
		<a href="/stats" class="left">
			<i class="material-icons back">keyboard_backspace</i>
		</a>
		<h1><?= __('Permanency by zone') ?></h1>
	</div>
	<div class="wrapper">
		<p><?= __('Analize the permanency of your customers by zone (seconds)') ?></p>
		
		<div class="search">
			<?php echo $this->Form->create('search'); ?>
			<div class="row">
				<div class="col l5">
					<?php echo $this->Form->select('store', $stores, ['empty' => 'All stores']); ?>
				</div>
				<div class="col l5">
					<?php echo $this->Form->select('month', $months, ['empty' => 'All months']); ?>
				</div>
				<div class="col l2 right">
					<?php echo $this->Form->button(__('Search'), array('class' => 'waves-effect waves-light btn')); ?>
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>

		<?php if (!empty($permanency->toArray())): ?>
		<div class="chart-container col l8 m10 s12 offset-l2 offset-m1">
			<canvas id="all-weeks" height="300px" width="300px"></canvas>
		</div>
		<?php endif; ?>

		<?php if (isset($week1)): ?>
		<div class="col l4 m10 s12">
			<h3><?= __('Week 1') ?></h3>
			<?php if (!empty($week1->toArray())): ?>
				<canvas id="week1" height="300px" width="300px"></canvas>
			<?php else: ?>
				<p class="center-align"><?= __('No data for this week') ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if (isset($week2)): ?>
		<div class="col l4 m10 s12">
			<h3><?= __('Week 2') ?></h3>
			<?php if (!empty($week2->toArray())): ?>
				<canvas id="week2" height="300px" width="300px"></canvas>
			<?php else: ?>
				<p class="center-align"><?= __('No data for this week') ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		
		<?php if (isset($week3)): ?>
		<div class="col l4 m10 s12">
			<h3><?= __('Week 3') ?></h3>
			<?php if (!empty($week3->toArray())): ?>
				<canvas id="week3" height="300px" width="300px"></canvas>
			<?php else: ?>
				<p class="center-align"><?= __('No data for this week') ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		
		<?php if (isset($week4)): ?>
		<div class="col l4 m10 s12">
			<h3><?= __('Week 4') ?></h3>
			<?php if (!empty($week4->toArray())): ?>
				<canvas id="week4" height="300px" width="300px"></canvas>
			<?php else: ?>
				<p class="center-align"><?= __('No data for this week') ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if (isset($week5)): ?>		
		<div class="col l4 m10 s12">
			<h3><?= __('Week 5') ?></h3>
			<?php if (!empty($week5->toArray())): ?>
				<canvas id="week5" height="300px" width="300px"></canvas>
			<?php else: ?>
				<p class="center-align"><?= __('No data for this week') ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<div class="clear"></div>  
	</div>
</div>
