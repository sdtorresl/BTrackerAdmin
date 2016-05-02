<div class="products index white-bg z-depth-3">
	<div class="card-panel black grey darken-4">
		<h1><?= __('Offers') ?></h1>
	</div>
	<div class="wrapper">
		<div class="flash">
            <?= $this->Flash->render() ?>
        </div>

		<div class="search">
			<?php echo $this->Form->create('search'); ?>
			<div class="row">
				<div class="col l10">
					<?php echo $this->Form->input('search', array('placeholder' => __('Search by offer name'), 'label' => false)); ?>
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
					<th><?= $this->Paginator->sort('name') ?></th>
					<th><?= $this->Paginator->sort('type') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('normal price') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('discount') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('final price') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('status') ?></th>
					<th class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $product): ?>
				<tr>
					<td><?= $this->Number->format($product->id) ?></td>
					<td><?= $this->Html->link(h($product->name), ['action' => 'view', $product->id]) ?></td>
					<td><?= h($product->type) ?></td>
					<td class="center-align"><?= $this->Number->currency($product->price, 0) ?></td>
					<td class="center-align"><?= $this->Number->toPercentage($product->discount, 1) ?></td>
					<td class="center-align"><?= $this->Number->currency($product->price - ($product->price * $product->discount/100), 0) ?></td>
					<td class="center-align"><?= h($product->status) ? __('Active') : __('Inactive') ?></td>
					<td class="actions">
					
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
