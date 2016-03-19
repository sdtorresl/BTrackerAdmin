<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regions Product'), ['action' => 'edit', $regionsProduct->region_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regions Product'), ['action' => 'delete', $regionsProduct->region_id], ['confirm' => __('Are you sure you want to delete # {0}?', $regionsProduct->region_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regions Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regions Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regionsProducts view large-9 medium-8 columns content">
    <h3><?= h($regionsProduct->region_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $regionsProduct->has('region') ? $this->Html->link($regionsProduct->region->name, ['controller' => 'Regions', 'action' => 'view', $regionsProduct->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $regionsProduct->has('product') ? $this->Html->link($regionsProduct->product->name, ['controller' => 'Products', 'action' => 'view', $regionsProduct->product->id]) : '' ?></td>
        </tr>
    </table>
</div>
