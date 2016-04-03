<?php $this->layout = 'login'; ?>

<div class="users form">

		<div class="col l6 s12 m8 offset-l3 offset-m2 white-bg z-depth-3" style="margin-top: 10%">
			<div class="wrapper">
				<div class="card-panel blue accent-3">
					<h1><?= __('Login') ?></h1>
				</div>
				
				<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create() ?>
				<legend><?= __('Please enter your username and password') ?></legend>
				
				<?= $this->Form->input('username') ?>
				<?= $this->Form->input('password') ?>

				<?= $this->Form->button(__('Login'), ['class' => 'btn blue accent-3 waves-effect waves-light right']); ?>
				<?= $this->Form->end() ?>
				<div class="clear"></div>
			</div>

		</div>

</div>
