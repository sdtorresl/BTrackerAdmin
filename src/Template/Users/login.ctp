<?php $this->layout = 'login'; ?>

<div class="users form">
	<div class="row">
		<div class="col l6 s12 m8 offset-l3 offset-m2 white-bg z-depth-5" style="margin-top: 2.5%">
			<div class="row">
				<div class="card-panel grey darken-4" style="margin-top: 0">
					<h1><?= __('Login') ?></h1>
				</div>
				<div class="wrapper">
					
					<div class="flash">
						<?= $this->Flash->render() ?>
					</div>
					
					<?= $this->Form->create() ?>
					<legend><?= __('Please enter your username and password') ?></legend>
					
					<?= $this->Form->input('username') ?>
					<?= $this->Form->input('password') ?>

					<div style="color: orange">
						<?= $this->Flash->render() ?>
					</div>

					<?= $this->Form->button(__('Login'), ['class' => 'btn grey darken-4 waves-effect waves-light right']); ?>
					<?= $this->Form->end() ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
