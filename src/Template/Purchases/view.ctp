<div class="purchases view white-bg z-depth-3">
    <div class="wrapper">
        <div class="card-panel orange accent-3">
            <h1><?= h($purchase->id) ?></h1>
        </div>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Product') ?></th>
                <td><?= $purchase->has('product') ? $this->Html->link($purchase->product->name, ['controller' => 'Products', 'action' => 'view', $purchase->product->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Customer') ?></th>
                <td><?= $purchase->has('customer') ? $this->Html->link($purchase->customer->mac, ['controller' => 'Customers', 'action' => 'view', $purchase->customer->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($purchase->id) ?></td>
            </tr>
                            <tr>
                <th><?= __('Date') ?></th>
                <td><?= h($purchase->date) ?></td>
            </tr>
                    </table>
            </div>
</div>
