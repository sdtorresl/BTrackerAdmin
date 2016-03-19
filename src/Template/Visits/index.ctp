
<div class="visits index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Visits') ?></h1>
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('trigger_time') ?></th>
                    <th><?= $this->Paginator->sort('leave_time') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('region_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visits as $visit): ?>
                <tr>
                        <td><?= $this->Number->format($visit->id) ?></td>
                        <td><?= h($visit->trigger_time) ?></td>
                        <td><?= h($visit->leave_time) ?></td>
                        <td><?= $visit->has('customer') ? $this->Html->link($visit->customer->id, ['controller' => 'Customers', 'action' => 'view', $visit->customer->id]) : '' ?></td>
                        <td><?= $visit->has('region') ? $this->Html->link($visit->region->name, ['controller' => 'Regions', 'action' => 'view', $visit->region->id]) : '' ?></td>
                        <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
