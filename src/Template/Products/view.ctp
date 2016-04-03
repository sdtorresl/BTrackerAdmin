<div class="products view white-bg z-depth-3">
    <div class="card-panel grey darken-4">
        <h1><?= h($product->name) ?></h1>
    </div>
    <div class="wrapper">
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($product->name) ?></td>
            </tr>
                        <tr>
                <th><?= __('Local Uri') ?></th>
                <td><?= h($product->local_uri) ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($product->id) ?></td>
            </tr>
                <tr>
                <th><?= __('Price') ?></th>
                <td><?= $this->Number->format($product->price) ?></td>
            </tr>
                <tr>
                <th><?= __('Discount') ?></th>
                <td><?= $this->Number->format($product->discount) ?></td>
            </tr>
                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($product->created) ?></td>
            </tr>
                <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($product->modified) ?></td>
            </tr>
                    </table>
                <div>
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($product->description)); ?>
        </div>
                    <div class="related">
            <h4><?= __('Related Purchases') ?></h4>
            <?php if (!empty($product->purchases)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->purchases as $purchases): ?>
                <tr>
                    <td><?= h($purchases->id) ?></td>
                    <td><?= h($purchases->product_id) ?></td>
                    <td><?= h($purchases->customer_id) ?></td>
                    <td><?= h($purchases->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Purchases', 'action' => 'view', $purchases->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Purchases', 'action' => 'edit', $purchases->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Purchases', 'action' => 'delete', $purchases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchases->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
            <div class="related">
            <h4><?= __('Related Customers') ?></h4>
            <?php if (!empty($product->customers)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Mac') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->customers as $customers): ?>
                <tr>
                    <td><?= h($customers->id) ?></td>
                    <td><?= h($customers->mac) ?></td>
                    <td><?= h($customers->created) ?></td>
                    <td><?= h($customers->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
            <div class="related">
            <h4><?= __('Related Zones') ?></h4>
            <?php if (!empty($product->zones)): ?>
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
                <?php foreach ($product->zones as $zones): ?>
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
