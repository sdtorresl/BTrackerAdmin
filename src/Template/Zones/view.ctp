<div class="zones view white-bg z-depth-3">
    <div class="card-panel grey darken-4">
        <h1><?= h($zone->name) ?></h1>
    </div>
    <div class="wrapper">
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
                <td><?= $zone->has('beacon') ? $this->Html->link($zone->beacon->name, ['controller' => 'Beacons', 'action' => 'view', $zone->beacon->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($zone->id) ?></td>
            </tr>
                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($zone->created) ?></td>
            </tr>
                <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($zone->modified) ?></td>
            </tr>
                            <tr>
                <th><?= __('Entrance') ?></th>
                <td><?= $zone->entrance ? __('Yes') : __('No'); ?></td>
            </tr>
                <tr>
                <th><?= __('Status') ?></th>
                <td><?= $zone->status ? __('Yes') : __('No'); ?></td>
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
                    <th><?= __('Viewed') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($zone->visits as $visits): ?>
                <tr>
                    <td><?= h($visits->id) ?></td>
                    <td><?= h($visits->trigger_time) ?></td>
                    <td><?= h($visits->leave_time) ?></td>
                    <td><?= h($visits->customer_id) ?></td>
                    <td><?= h($visits->zone_id) ?></td>
                    <td><?= h($visits->viewed) ?></td>
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
                    <th><?= __('Name') ?></th>
                    <th><?= __('Description') ?></th>
                    <th><?= __('Price') ?></th>
                    <th class="center-align"><?= __('Discount') ?></th>
                    <th class="center-align"><?= __('Status') ?></th>
                    <th class="center-align"><?= __('Type') ?></th>
                    <th class="actions right-align"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($zone->products as $products): ?>
                <tr>
                    <td><?= $this->Html->link(h($products->name), ['controller' => 'Products', 'action' => 'view', $products->id]) ?></td>
                    <td><?= h($products->description) ?></td>
                    <td><?= $this->Number->currency($products->price) ?></td>
                    <td class="center-align"><?= $this->Number->toPercentage($products->discount,0) ?></td>
                    <td class="center-align"><?= $products->status ? __('Active') : __('Inactive') ?></td>
                    <td class="center-align"><?= h($products->type) ?></td>
                    <td class="actions right-align">
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
