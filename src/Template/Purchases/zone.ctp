<?= json_encode($purchase) ?>
<div class="purchases index white-bg z-depth-3">
	<div class="card-panel grey darken-4">
		<a href="/stats" class="left">
			<i class="material-icons back">keyboard_backspace</i>
		</a>
		<h1><?= __('Purchases') ?></h1>
	</div>

	<div class="wrapper">
		<?php
		$total = 0;
		foreach ($purchases as $key => $purchase) {
			$total = $total + $purchase->price;
		}
		?>

		<div class="card z-depth-1 blue total wrapper">
			<div class="valign-wrapper title">
				<i class="material-icons left small">monetization_on</i>
			Total purchases: <?= $this->Number->Currency($total) ?></div>
		</div>

		<table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('product_id') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('customer_id') ?></th>
					<th class="center-align"><?= $this->Paginator->sort('date') ?></th>
					<th class="right-align"><?= $this->Paginator->sort('price') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($purchases as $purchase): ?>
				<tr>
					<td><?= $this->Number->format($purchase->id) ?></td>
					<td><?= $purchase->has('product') ? $this->Html->link($purchase->product->name, ['controller' => 'Products', 'action' => 'view', $purchase->product->id]) : '' ?></td>
					<td class="center-align"><?= $purchase->has('customer') ? $this->Html->link($purchase->customer->mac, ['controller' => 'Customers', 'action' => 'view', $purchase->customer->id]) : '' ?></td>
					<td class="center-align"><?= h($purchase->date) ?></td>
					<td class="right-align"><?= h($this->Number->Currency($purchase->price)) ?></td>
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
