
<div class="visits index white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Visits') ?></h1>

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1"><?= __('All Visits') ?></a></li>
                    <li class="tab col s3"><a href="#test2"><?= __('Visits by zone') ?></a></li>
                    <li class="tab col s3"><a href="#test3"><?= __('Permanence by zone') ?></a></li>
                    <li class="tab col s3"><a href="#test4"><?= __('Visits by costumers') ?></a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('trigger_time') ?></th>
                            <th><?= $this->Paginator->sort('leave_time') ?></th>
                            <th><?= $this->Paginator->sort('customer_mac') ?></th>
                            <th><?= $this->Paginator->sort('zone_id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($visits as $visit): ?>
                        <tr>
                                <td><?= $this->Number->format($visit->id) ?></td>
                                <td><?= h($visit->trigger_time) ?></td>
                                <td><?= h($visit->leave_time) ?></td>
                                <td><?= $visit->has('customer') ? $this->Html->link($visit->customer->mac, ['controller' => 'Customers', 'action' => 'view', $visit->customer->id]) : '' ?></td>
                                <td><?= $visit->has('zone') ? $this->Html->link($visit->zone->name, ['controller' => 'Zones', 'action' => 'view', $visit->zone->id]) : '' ?></td>
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
                        <?= $this->Paginator->prev("") ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next("") ?>
                    </ul>
                    <!-- <p><?= $this->Paginator->counter() ?></p> -->
                </div>
            </div>
            <div id="test2" class="col s12">
                <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('visits') ?></th>
                            <th><?= $this->Paginator->sort('zone_id') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($visits_by_zone as $visit): ?>
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
                </div>
            </div>
            <div id="test3" class="col s12">Test 3</div>
            <div id="test4" class="col s12">Test 4</div>
        </div>


        
    </div>
</div>
