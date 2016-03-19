<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Beacon'), ['action' => 'edit', $beacon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Beacon'), ['action' => 'delete', $beacon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beacon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Beacons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beacon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="beacons view large-9 medium-8 columns content">
    <h3><?= h($beacon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Uuid') ?></th>
            <td><?= h($beacon->uuid) ?></td>
        </tr>
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $beacon->has('region') ? $this->Html->link($beacon->region->name, ['controller' => 'Regions', 'action' => 'view', $beacon->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($beacon->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Major') ?></th>
            <td><?= $this->Number->format($beacon->major) ?></td>
        </tr>
        <tr>
            <th><?= __('Minor') ?></th>
            <td><?= $this->Number->format($beacon->minor) ?></td>
        </tr>
        <tr>
            <th><?= __('Detection Range') ?></th>
            <td><?= $this->Number->format($beacon->detection_range) ?></td>
        </tr>
        <tr>
            <th><?= __('User Id') ?></th>
            <td><?= $this->Number->format($beacon->user_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($beacon->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($beacon->modified) ?></td>
        </tr>
    </table>
</div>
