
<div class="zones index white-bg z-depth-3">
    <div class="card-panel black grey darken-4">
        <h1><?= __('Zones') ?></h1>
    </div>
    <div class="wrapper">
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('beacon_id') ?></th>
                    <th><?= $this->Paginator->sort('entrance') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zones as $zone): ?>
                <tr>
                        <td><?= $this->Number->format($zone->id) ?></td>
                        <td><?= h($zone->name) ?></td>
                        <td><?= $zone->has('store') ? $this->Html->link($zone->store->name, ['controller' => 'Stores', 'action' => 'view', $zone->store->id]) : '' ?></td>
                        <td><?= $zone->has('beacon') ? $this->Html->link($zone->beacon->uuid, ['controller' => 'Beacons', 'action' => 'view', $zone->beacon->id]) : '' ?></td>
                        <td><?= $zone->entrance ? __('Yes') : __('No'); ?></td>
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

        <div class="fixed-action-btn" style="bottom: 25px; right: 25px;">
            <a class="btn-floating btn-large orange" href="/zones/add" alt="Add promotion">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </div>
</div>
