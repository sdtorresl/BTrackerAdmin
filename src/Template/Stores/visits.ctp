<?= $this->Html->script('Chart.min'); ?>

<div class="stores visits white-bg z-depth-3">
	<div class="card-panel grey darken-4">
		<a href="/stats" class="left">
			<i class="material-icons back">keyboard_backspace</i>
		</a>
		<h1><?= __('Total visits by store') ?></h1>
	</div>
	<div class="wrapper">
		<!-- <p><?= __('The rate of the customers that were in your store and went into other zones.') ?></p> -->
		
		<?php foreach ($stores as $store): ?>
			<div class="col l3 m3 s2">
				<div class="card z-depth-2 blue-grey">
		    		<div class="wrapper">
			    		<div class="title"><?= $store['store']?></div>
			    		<div class="counter">
			    			<dif class="left">
								<i class="material-icons large left">person_pin</i>
			    			</dif>
			    			<div class="right">
			    				<div><?= $store['visits']?></div>
			    				<div class="counter-title"><?= __('Total') ?></div>
			    			</div>
			    		</div>
			    		<div class="clear"></div>
		    		</div>
				</div>
  			</div>
		<?php endforeach; ?>
		
		<div class="clear"></div>    
	</div>
</div>
