<div class="zones view white-bg z-depth-3">
    <div class="wrapper">
        <div class="card-panel orange accent-3">
            <h1><?= h($zone->name) ?></h1>
        </div>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($zone->name) ?></td>
            </tr>
                        <tr>
                <th><?= __('Store') ?></th>
                <td><?= $zone->has('store') ? $this->Html->link($zone->store->name, ['controller' => 'Stores', 'action' => 'view', $zone->store->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Beacon') ?></th>
                <td><?= $zone->has('beacon') ? $this->Html->link($zone->beacon->uuid, ['controller' => 'Beacons', 'action' => 'view', $zone->beacon->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($zone->id) ?></td>
            </tr>
                        </table>
                <div>
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($zone->description)); ?>
        </div>
                    <div class="related">
            <h4><?= __('Related Visits') ?></h4>
            <?php if (!empty($zone->visits)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Trigger Time') ?></th>
                            <th><?= __('Leave Time') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Zone Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($zone->visits as $visits): ?>
                <tr>
                    <td><?= h($visits->id) ?></td>
                    <td><?= h($visits->trigger_time) ?></td>
                    <td><?= h($visits->leave_time) ?></td>
                    <td><?= h($visits->customer_id) ?></td>
                    <td><?= h($visits->zone_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Visits', 'action' => 'view', $visits->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Visits', 'action' => 'edit', $visits->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visits', 'action' => 'delete', $visits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visits->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
            <div class="related">
            <h4><?= __('Related Products') ?></h4>
            <?php if (!empty($zone->products)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Local Uri') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($zone->products as $products): ?>
                <tr>
                    <td><?= h($products->id) ?></td>
                    <td><?= h($products->name) ?></td>
                    <td><?= h($products->description) ?></td>
                    <td><?= h($products->local_uri) ?></td>
                    <td><?= h($products->price) ?></td>
                    <td><?= h($products->created) ?></td>
                    <td><?= h($products->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>
