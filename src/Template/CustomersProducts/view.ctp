<div class="customersProducts view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($customersProduct->customer_id) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Customer') ?></th>
                <td><?= $customersProduct->has('customer') ? $this->Html->link($customersProduct->customer->id, ['controller' => 'Customers', 'action' => 'view', $customersProduct->customer->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Product') ?></th>
                <td><?= $customersProduct->has('product') ? $this->Html->link($customersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $customersProduct->product->id]) : '' ?></td>
            </tr>
                                    </table>
            </div>
</div>
