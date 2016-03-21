<div class="beacons view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($beacon->id) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Uuid') ?></th>
                <td><?= h($beacon->uuid) ?></td>
            </tr>
                        <tr>
                <th><?= __('Region') ?></th>
                <td><?= $beacon->has('region') ? $this->Html->link($beacon->region->name, ['controller' => 'Regions', 'action' => 'view', $beacon->region->id]) : '' ?></td>
            </tr>
                        <tr>
                <th><?= __('User') ?></th>
                <td><?= $beacon->has('user') ? $this->Html->link($beacon->user->id, ['controller' => 'Users', 'action' => 'view', $beacon->user->id]) : '' ?></td>
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
