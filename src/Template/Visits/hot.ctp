
<div class="visits index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Visits') ?></h1>
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('visits') ?></th>
                    <th><?= $this->Paginator->sort('zone_id') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visits as $visit): ?>
                <tr>
                    <td><?= h($visit->visits) ?></td>
                    <td><?= $visit->has('zone') ? $this->Html->link($visit->zone->name, ['controller' => 'Zones', 'action' => 'view', $visit->zone->id]) : '' ?></td>
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
