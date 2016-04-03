<div class="stores view white-bg z-depth-3">
    <div class="wrapper">
        <div class="card-panel orange accent-3">
            <h1><?= h($store->name) ?></h1>
        </div>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('User') ?></th>
                <td><?= $store->has('user') ? $this->Html->link($store->user->username, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($store->name) ?></td>
            </tr>
                        <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($store->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($store->modified) ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($store->id) ?></td>
            </tr>
                        </table>
                <div>
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($store->description)); ?>
        </div>
                    <div class="related">
            <h4><?= __('Related Zones') ?></h4>
            <?php if (!empty($store->zones)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Beacon Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($store->zones as $zones): ?>
                <tr>
                    <td><?= h($zones->id) ?></td>
                    <td><?= h($zones->name) ?></td>
                    <td><?= h($zones->description) ?></td>
                    <td><?= h($zones->store_id) ?></td>
                    <td><?= h($zones->beacon_id) ?></td>
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
