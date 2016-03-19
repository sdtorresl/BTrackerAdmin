<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Beacon'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="beacons index large-9 medium-8 columns content">
    <h3><?= __('Beacons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('uuid') ?></th>
                <th><?= $this->Paginator->sort('major') ?></th>
                <th><?= $this->Paginator->sort('minor') ?></th>
                <th><?= $this->Paginator->sort('detection_range') ?></th>
                <th><?= $this->Paginator->sort('region_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($beacons as $beacon): ?>
            <tr>
                <td><?= $this->Number->format($beacon->id) ?></td>
                <td><?= h($beacon->uuid) ?></td>
                <td><?= $this->Number->format($beacon->major) ?></td>
                <td><?= $this->Number->format($beacon->minor) ?></td>
                <td><?= $this->Number->format($beacon->detection_range) ?></td>
                <td><?= $beacon->has('region') ? $this->Html->link($beacon->region->name, ['controller' => 'Regions', 'action' => 'view', $beacon->region->id]) : '' ?></td>
                <td><?= $this->Number->format($beacon->user_id) ?></td>
                <td><?= h($beacon->created) ?></td>
                <td><?= h($beacon->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $beacon->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $beacon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $beacon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beacon->id)]) ?>
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
