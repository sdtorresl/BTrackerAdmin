<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customers Product'), ['action' => 'edit', $customersProduct->customer_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customers Product'), ['action' => 'delete', $customersProduct->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersProduct->customer_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customers Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customersProducts view large-9 medium-8 columns content">
    <h3><?= h($customersProduct->customer_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Customer') ?></th>
            <td><?= $customersProduct->has('customer') ? $this->Html->link($customersProduct->customer->id, ['controller' => 'Customers', 'action' => 'view', $customersProduct->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $customersProduct->has('product') ? $this->Html->link($customersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $customersProduct->product->id]) : '' ?></td>
        </tr>
    </table>
</div>
