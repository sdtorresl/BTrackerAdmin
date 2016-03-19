<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visit'), ['action' => 'edit', $visit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visit'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visits view large-9 medium-8 columns content">
    <h3><?= h($visit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Leave Time') ?></th>
            <td><?= h($visit->leave_time) ?></td>
        </tr>
        <tr>
            <th><?= __('Customer') ?></th>
            <td><?= $visit->has('customer') ? $this->Html->link($visit->customer->id, ['controller' => 'Customers', 'action' => 'view', $visit->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $visit->has('region') ? $this->Html->link($visit->region->name, ['controller' => 'Regions', 'action' => 'view', $visit->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($visit->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Trigger Time') ?></th>
            <td><?= h($visit->trigger_time) ?></td>
        </tr>
    </table>
</div>
