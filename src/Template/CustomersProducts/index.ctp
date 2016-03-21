
<div class="customersProducts index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Customers Products') ?></h1>
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customersProducts as $customersProduct): ?>
                <tr>
                        <td><?= $customersProduct->has('customer') ? $this->Html->link($customersProduct->customer->id, ['controller' => 'Customers', 'action' => 'view', $customersProduct->customer->id]) : '' ?></td>
                        <td><?= $customersProduct->has('product') ? $this->Html->link($customersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $customersProduct->product->id]) : '' ?></td>
                        <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customersProduct->customer_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customersProduct->customer_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customersProduct->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customersProduct->customer_id)]) ?>
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
