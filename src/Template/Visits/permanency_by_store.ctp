<?= $this->Html->script('Chart.min'); ?>

<script>

	var pieData = [
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

		foreach ($permanency_store as $key => $visit): ?>
		<?=
			"{" .
			'label: "' . h($visit['store']) . '",' .
			'value: ' . h($visit['permanency']) . ',' . 
			'color: "' . $colors[$key][0] . '",' .
			'highlight: "' . $colors[$key][1] . '"' .
			"}," 
		?>

		<?php endforeach; ?> 
	];

	var options = {
	    segmentShowStroke: false,
	    animateRotate: true,
	    responsive: true,
	    legendTemplate : '<ul class="legend">'
				+'<% for (var i=0; i<pieData.length; i++) { %>'
            	+'<li>'
            		+'<span style=\"background-color:<%=pieData[i].color%>\"></span>'
                	+ ' '
                	+'<% if (pieData[i].label) { %><%= pieData[i].label + ": " + Math.round(pieData[i].value/60,2) + " min" %><% } %>'
            	+'</li>'
            	+'<% } %>'
            +'</ul>'
	}

	window.onload = function (){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myPie = new Chart(ctx).Pie(pieData, options);
		document.getElementById('js-legend').innerHTML = myPie.generateLegend();
	}
</script>

<div class="visits index white-bg z-depth-3">
	<div class="card-panel grey darken-4">
		<a href="/stats" class="left">
			<i class="material-icons back">keyboard_backspace</i>
		</a>
		<h1><?= __('Permanency by store') ?></h1>
	</div>
	<div class="wrapper">
		<p><?= __('Analize the average permanency of your customers in all zones by store (seconds)') ?></p>
		
		<div class="chart-container col l6 m8 s12 offset-l3">
			<canvas id="canvas" height="80px" width="100px"></canvas>
		</div>
		<div class="col l3 m4 s12">
			<div id="js-legend" class="chart-legend"></div>
		</div>

		<div class="clear"></div>    
	</div>
</div>
