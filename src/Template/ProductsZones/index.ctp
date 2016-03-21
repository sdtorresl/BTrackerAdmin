
<div class="productsZones index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Products Zones') ?></h1>
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('zone_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productsZones as $productsZone): ?>
                <tr>
                        <td><?= $productsZone->has('zone') ? $this->Html->link($productsZone->zone->name, ['controller' => 'Zones', 'action' => 'view', $productsZone->zone->id]) : '' ?></td>
                        <td><?= $productsZone->has('product') ? $this->Html->link($productsZone->product->name, ['controller' => 'Products', 'action' => 'view', $productsZone->product->id]) : '' ?></td>
                        <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productsZone->zone_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsZone->zone_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsZone->zone_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsZone->zone_id)]) ?>
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
