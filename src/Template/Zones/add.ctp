
<div class="zones form white-bg z-depth-3">
	<div class="card-panel  grey darken-4">
		<h1><?= __('Add Zone') ?></h1>
	</div>
	<div class="wrapper">
		<div class="flash">
            <?= $this->Flash->render() ?>
        </div>

		<?= $this->Form->create($zone) ?>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('description', ['class' => 'materialize-textarea']);
			echo $this->Form->input('store_id', ['options' => $stores]);
			echo $this->Form->input('beacon_id', ['options' => $beacons]);
			echo $this->Form->input('entrance', [
				'options' => array(
					false => __('No'),
					true => __('Yes') 
				)
			]);
			echo $this->Form->input('status', [
				'options' => array(
					true => __('Active'), 
					false => __('Inactive')
				)
			]);
			echo $this->Form->input('products._ids', ['options' => $products]);
		?>
 
		<?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
		<?= $this->Form->end() ?>
		<div class="clear"></div>
	</div>
</div>
