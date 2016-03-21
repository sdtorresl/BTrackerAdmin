<div class="regions view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($region->name) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($region->name) ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($region->id) ?></td>
            </tr>
                        </table>
                <div>
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($region->description)); ?>
        </div>
                    <div class="related">
            <h4><?= __('Related Beacons') ?></h4>
            <?php if (!empty($region->beacons)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Major') ?></th>
                            <th><?= __('Minor') ?></th>
                            <th><?= __('Detection Range') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($region->beacons as $beacons): ?>
                <tr>
                    <td><?= h($beacons->id) ?></td>
                    <td><?= h($beacons->uuid) ?></td>
                    <td><?= h($beacons->major) ?></td>
                    <td><?= h($beacons->minor) ?></td>
                    <td><?= h($beacons->detection_range) ?></td>
                    <td><?= h($beacons->region_id) ?></td>
                    <td><?= h($beacons->user_id) ?></td>
                    <td><?= h($beacons->created) ?></td>
                    <td><?= h($beacons->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Beacons', 'action' => 'view', $beacons->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Beacons', 'action' => 'edit', $beacons->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Beacons', 'action' => 'delete', $beacons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beacons->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
            <div class="related">
            <h4><?= __('Related Visits') ?></h4>
            <?php if (!empty($region->visits)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Trigger Time') ?></th>
                            <th><?= __('Leave Time') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($region->visits as $visits): ?>
                <tr>
                    <td><?= h($visits->id) ?></td>
                    <td><?= h($visits->trigger_time) ?></td>
                    <td><?= h($visits->leave_time) ?></td>
                    <td><?= h($visits->customer_id) ?></td>
                    <td><?= h($visits->region_id) ?></td>
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
            <?php if (!empty($region->products)): ?>
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
                <?php foreach ($region->products as $products): ?>
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
