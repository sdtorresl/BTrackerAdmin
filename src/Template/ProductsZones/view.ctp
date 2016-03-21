<div class="productsZones view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($productsZone->zone_id) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Zone') ?></th>
                <td><?= $productsZone->has('zone') ? $this->Html->link($productsZone->zone->name, ['controller' => 'Zones', 'action' => 'view', $productsZone->zone->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Product') ?></th>
                <td><?= $productsZone->has('product') ? $this->Html->link($productsZone->product->name, ['controller' => 'Products', 'action' => 'view', $productsZone->product->id]) : '' ?></td>
            </tr>
                                    </table>
            </div>
</div>
