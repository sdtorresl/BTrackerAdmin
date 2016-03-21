<div class="beacons view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($beacon->uuid) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Uuid') ?></th>
                <td><?= h($beacon->uuid) ?></td>
            </tr>
                        <tr>
                <th><?= __('Zone') ?></th>
                <td><?= $beacon->has('zone') ? $this->Html->link($beacon->zone->name, ['controller' => 'Zones', 'action' => 'view', $beacon->zone->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('User') ?></th>
                <td><?= $beacon->has('user') ? $this->Html->link($beacon->user->username, ['controller' => 'Users', 'action' => 'view', $beacon->user->id]) : '' ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($beacon->id) ?></td>
            </tr>
                <tr>
                <th><?= __('Major') ?></th>
                <td><?= $this->Number->format($beacon->major) ?></td>
            </tr>
                <tr>
                <th><?= __('Minor') ?></th>
                <td><?= $this->Number->format($beacon->minor) ?></td>
            </tr>
                <tr>
                <th><?= __('Detection Range') ?></th>
                <td><?= $this->Number->format($beacon->detection_range) ?></td>
            </tr>
                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($beacon->created) ?></td>
            </tr>
                <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($beacon->modified) ?></td>
            </tr>
                    </table>
            </div>
</div>
