<div class="visits view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($visit->id) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Leave Time') ?></th>
                <td><?= h($visit->leave_time) ?></td>
            </tr>
                        <tr>
                <th><?= __('Customer') ?></th>
                <td><?= $visit->has('customer') ? $this->Html->link($visit->customer->id, ['controller' => 'Customers', 'action' => 'view', $visit->customer->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('Region') ?></th>
                <td><?= $visit->has('region') ? $this->Html->link($visit->region->name, ['controller' => 'Regions', 'action' => 'view', $visit->region->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($visit->id) ?></td>
            </tr>
                            <tr>
                <th><?= __('Trigger Time') ?></th>
                <td><?= h($visit->trigger_time) ?></td>
            </tr>
                    </table>
            </div>
</div>
