<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regions Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regionsProducts index large-9 medium-8 columns content">
    <h3><?= __('Regions Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('region_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regionsProducts as $regionsProduct): ?>
            <tr>
                <td><?= $regionsProduct->has('region') ? $this->Html->link($regionsProduct->region->name, ['controller' => 'Regions', 'action' => 'view', $regionsProduct->region->id]) : '' ?></td>
                <td><?= $regionsProduct->has('product') ? $this->Html->link($regionsProduct->product->name, ['controller' => 'Products', 'action' => 'view', $regionsProduct->product->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regionsProduct->region_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regionsProduct->region_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regionsProduct->region_id], ['confirm' => __('Are you sure you want to delete # {0}?', $regionsProduct->region_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
