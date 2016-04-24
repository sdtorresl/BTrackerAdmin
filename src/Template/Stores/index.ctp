
<div class="stores index white-bg z-depth-3">
	<div class="card-panel black grey darken-4">
		<h1><?= __('Stores') ?></h1>
	</div>
	<div class="wrapper">
		<div class="search">
			<?php echo $this->Form->create('search'); ?>
			<div class="row">
				<div class="col l10">
					<?php echo $this->Form->input('search', array('placeholder' => 'Stores', 'label' => false)); ?>
				</div>
				<div class="col l2 right">
					<?php echo $this->Form->button(__('Search'), array('class' => 'waves-effect waves-light btn')); ?>
				</div>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>

		<table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('user_id') ?></th>
					<th><?= $this->Paginator->sort('name') ?></th>
					<th><?= $this->Paginator->sort('status') ?></th>
					<th><?= $this->Paginator->sort('created') ?></th>
					<th><?= $this->Paginator->sort('modified') ?></th>
					<th class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($stores as $store): ?>
				<tr>
						<td><?= $this->Number->format($store->id) ?></td>
						<td><?= $store->has('user') ? $this->Html->link($store->user->username, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
						<td><?= h($store->name) ?></td>
						<td><?= h($store->status ? __('Active') : __('Inactive')) ?></td>
						<td><?= h($store->created) ?></td>
						<td><?= h($store->modified) ?></td>
						<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $store->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $store->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="paginator">
			<ul class="pagination">
				<?= $this->Paginator->prev("") ?>
				<?= $this->Paginator->numbers() ?>
				<?= $this->Paginator->next("") ?>
			</ul>
			<!-- <p><?= $this->Paginator->counter() ?></p> -->
		</div>

		<div class="fixed-action-btn" style="bottom: 25px; right: 25px;">
			<a class="btn-floating btn-large orange" href="/stores/add" alt="Add promotion">
				<i class="large material-icons">add</i>
			</a>
		</div>
	</div>
</div>
