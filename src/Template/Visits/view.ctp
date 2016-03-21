<div class="visits view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($visit->id) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Customer') ?></th>
                <td><?= $visit->has('customer') ? $this->Html->link($visit->customer->mac, ['controller' => 'Customers', 'action' => 'view', $visit->customer->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Zone') ?></th>
                <td><?= $visit->has('zone') ? $this->Html->link($visit->zone->name, ['controller' => 'Zones', 'action' => 'view', $visit->zone->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($visit->id) ?></td>
            </tr>
                            <tr>
                <th><?= __('Trigger Time') ?></th>
                <td><?= h($visit->trigger_time) ?></td>
            </tr>
                <tr>
                <th><?= __('Leave Time') ?></th>
                <td><?= h($visit->leave_time) ?></td>
            </tr>
                    </table>
            </div>
</div>
