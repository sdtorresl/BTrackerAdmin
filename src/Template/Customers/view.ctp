<div class="customers view white-bg z-depth-3">
    <div class="wrapper">
        <div class="card-panel orange accent-3">
            <h1><?= h($customer->mac) ?></h1>
        </div>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Mac') ?></th>
                <td><?= h($customer->mac) ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($customer->id) ?></td>
            </tr>
                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($customer->created) ?></td>
            </tr>
                <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($customer->modified) ?></td>
            </tr>
                    </table>
                <div class="related">
            <h4><?= __('Related Purchases') ?></h4>
            <?php if (!empty($customer->purchases)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($customer->purchases as $purchases): ?>
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
            <h4><?= __('Related Visits') ?></h4>
            <?php if (!empty($customer->visits)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Trigger Time') ?></th>
                            <th><?= __('Leave Time') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Zone Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($customer->visits as $visits): ?>
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
            <?php if (!empty($customer->products)): ?>
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
                <?php foreach ($customer->products as $products): ?>
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
