<div class="beacons view white-bg z-depth-3">
    <div class="card-panel grey darken-4">
        <h1><?= h($beacon->uuid) ?></h1>
    </div>
    <div class="wrapper">
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Uuid') ?></th>
                <td><?= h($beacon->uuid) ?></td>
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
                <th><?= __('Created') ?></th>
                <td><?= h($beacon->created) ?></td>
            </tr>
                <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($beacon->modified) ?></td>
            </tr>
                    </table>
                <div class="related">
            <h4><?= __('Related Zones') ?></h4>
            <?php if (!empty($beacon->zones)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Beacon Id') ?></th>
                            <th><?= __('Entrance') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($beacon->zones as $zones): ?>
                <tr>
                    <td><?= h($zones->id) ?></td>
                    <td><?= h($zones->name) ?></td>
                    <td><?= h($zones->description) ?></td>
                    <td><?= h($zones->store_id) ?></td>
                    <td><?= h($zones->beacon_id) ?></td>
                    <td><?= h($zones->entrance) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Zones', 'action' => 'view', $zones->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Zones', 'action' => 'edit', $zones->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Zones', 'action' => 'delete', $zones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zones->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>
