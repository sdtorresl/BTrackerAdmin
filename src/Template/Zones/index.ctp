
<div class="zones index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Zones') ?></h1>
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zones as $zone): ?>
                <tr>
                        <td><?= $this->Number->format($zone->id) ?></td>
                        <td><?= h($zone->name) ?></td>
                        <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $zone->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zone->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zone->id)]) ?>
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
