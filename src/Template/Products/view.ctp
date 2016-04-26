<div class="products view white-bg z-depth-3">
    <div class="card-panel grey darken-4">
        <h1><?= h($product->name) ?></h1>
    </div>
    <div class="wrapper">
        <div class="product-image col l4 m12 s12 z-depth-1">
            <?php if($product->picture): ?>
                <?= $this->Html->image('../files/products/picture/' . $product->picture_dir . '/square_' . $product->picture); ?>
            <?php else: ?>
                <div class="no-picture valign-wrapper">
                    <i class="large material-icons">videocam_off</i>
                </div>
            <?php endif; ?>
        </div>
        <div class="col l7 m12 s12 offset-l1">
            <div class="row">
                <table class="vertical-table highlight bordered responsive-table">
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
                        <th><?= __('Status') ?></th>
                        <td><?= $product->status ? __('Active') : __('Inactive'); ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= $this->Text->autoParagraph(h($product->description)); ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Terms and Conditions') ?></th>
                        <td><?= $this->Text->autoParagraph(h($product->terms)); ?></td>
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
            </div>
        </div>
        <div class="clear" style="height: 20px"></div>
        <div class="related">
            <?php if (!empty($product->purchases)): ?>
            <h4><?= __('Related Purchases') ?></h4>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Price') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->purchases as $purchases): ?>
                <tr>
                    <td><?= h($purchases->id) ?></td>
                    <td><?= h($purchases->product_id) ?></td>
                    <td><?= h($purchases->customer_id) ?></td>
                    <td><?= h($purchases->date) ?></td>
                    <td><?= h($purchases->price) ?></td>
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
            <?php if (!empty($product->customers)): ?>
            <h4><?= __('Related Customers') ?></h4>
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
            <?php if (!empty($product->zones)): ?>
            <h4><?= __('Related Zones') ?></h4>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Name') ?></th>
                    <th><?= __('Description') ?></th>
                    <th><?= __('Store Id') ?></th>
                    <th><?= __('Beacon Id') ?></th>
                    <th><?= __('Created') ?></th>
                    <th><?= __('Modified') ?></th>
                    <th><?= __('Entrance') ?></th>
                    <th><?= __('Status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->zones as $zones): ?>
                <tr>
                    <td><?= h($zones->id) ?></td>
                    <td><?= h($zones->name) ?></td>
                    <td><?= h($zones->description) ?></td>
                    <td><?= h($zones->store_id) ?></td>
                    <td><?= h($zones->beacon_id) ?></td>
                    <td><?= h($zones->created) ?></td>
                    <td><?= h($zones->modified) ?></td>
                    <td><?= h($zones->entrance) ?></td>
                    <td><?= h($zones->status) ?></td>
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
        <div class="clear"></div>
    </div>
</div>
