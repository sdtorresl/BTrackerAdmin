
<div class="beacons index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Beacons') ?></h1>
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('major') ?></th>
                    <th><?= $this->Paginator->sort('minor') ?></th>
                    <th><?= $this->Paginator->sort('detection_range') ?></th>
                    <th><?= $this->Paginator->sort('zone_id') ?></th>
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
                        <td><?= $beacon->has('zone') ? $this->Html->link($beacon->zone->name, ['controller' => 'Zones', 'action' => 'view', $beacon->zone->id]) : '' ?></td>
                        <td><?= $beacon->has('user') ? $this->Html->link($beacon->user->id, ['controller' => 'Users', 'action' => 'view', $beacon->user->id]) : '' ?></td>
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
                <?= $this->Paginator->prev("") ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next("") ?>
            </ul>
            <!-- <p><?= $this->Paginator->counter() ?></p> -->
        </div>
    </div>
</div>
