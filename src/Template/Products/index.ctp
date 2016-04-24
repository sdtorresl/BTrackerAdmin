
<div class="products index white-bg z-depth-3">
	<div class="card-panel black grey darken-4">
		<h1><?= __('Offers') ?></h1>
	</div>
	<div class="wrapper">
		<table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('name') ?></th>
					<th><?= $this->Paginator->sort('status') ?></th>
					<th><?= $this->Paginator->sort('normal price') ?></th>
					<th><?= $this->Paginator->sort('discount') ?></th>
					<th><?= $this->Paginator->sort('final price') ?></th>
					<th><?= $this->Paginator->sort('created') ?></th>
					<th><?= $this->Paginator->sort('modified') ?></th>
					<th class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $product): ?>
				<tr>
						<td><?= $this->Number->format($product->id) ?></td>
						<td><?= h($product->name) ?></td>
						<td><?= h($product->status) ? __('Active') : __('Inactive') ?></td>
						<td><?= $this->Number->currency($product->price, 0) ?></td>
						<td><?= $this->Number->toPercentage($product->discount, 1) ?></td>
						<td><?= $this->Number->currency($product->price - ($product->price * $product->discount/100), 0) ?></td>
						<td><?= h($product->created) ?></td>
						<td><?= h($product->modified) ?></td>
						<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
			<a class="btn-floating btn-large orange" href="/products/add" alt="Add promotion">
				<i class="large material-icons">add</i>
			</a>
		</div>
	</div>
</div>
