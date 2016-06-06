<div class="purchases index white-bg z-depth-3">
	<div class="card-panel black grey darken-4">
		<a href="/stats" class="left">
			<i class="material-icons back">keyboard_backspace</i>
		</a>
		<h1><?= __('Redemptions') ?></h1>
	</div>
	<div class="wrapper">
		<div class="flash">
			<?= $this->Flash->render() ?>
		</div>
		
		<!-- Total purchases -->
		<div class="col l6">
			<div class="card z-depth-2 blue-grey">
				<div class="wrapper">
					<div class="title"><?= __('Total') ?></div>
					<div class="price">
						<div><?= $this->Number->currency($total); ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total purchases in last month -->
		<div class="col l6">
			<div class="card z-depth-2 blue-grey">
				<div class="wrapper">
					<div class="title"><?= __('This month') ?></div>
					<div class="price">
						<div><?= $this->Number->currency($totalMonth); ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total redemptions -->
		<div class="col l6">
			<div class="card z-depth-2 blue-grey">
				<div class="wrapper">
					<div class="title"><?= __('Redemptions') ?></div>
					<div class="price">
						<div><?= $this->Number->format($redemptions); ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total redemptions in last month -->
		<div class="col l6">
			<div class="card z-depth-2 blue-grey">
				<div class="wrapper">
					<div class="title"><?= __('Redemptions this month') ?></div>
					<div class="price">
						<div><?= $this->Number->format($redemptionsMonth); ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>


		<!-- List of all purchases -->
		<table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('product_id') ?></th>
					<th><?= $this->Paginator->sort('customer_id') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('price') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('date') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($purchases as $purchase): ?>
				<tr>
						<td><?= $this->Number->format($purchase->id) ?></td>
						<td><?= $purchase->has('product') ? $this->Html->link($purchase->product->name, ['controller' => 'Products', 'action' => 'view', $purchase->product->id]) : '' ?></td>
						<td><?= $purchase->has('customer') ? $this->Html->link($purchase->customer->mac, ['controller' => 'Customers', 'action' => 'view', $purchase->customer->id]) : '' ?></td>
						<td class="center-align"><?= $this->Number->currency($purchase->price, 0) ?></td>
						<td class="right-align"><?= h($purchase->date) ?></td>
					<!-- <td class="actions"> -->
					   <!--  <?= $this->Html->link(__('View'), ['action' => 'view', $purchase->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $purchase->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $purchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase->id)]) ?> -->
					<!-- </td> -->
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
	</div>
</div>
