<div class="users view white-bg z-depth-3">
    <div class="wrapper">
        
        <h1><?= h($user->id) ?></h1>
        <table class="vertical-table highlight bordered responsive-table">
                        <tr>
                <th><?= __('Username') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
                        <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
                        <tr>
                <th><?= __('First Name') ?></th>
                <td><?= h($user->first_name) ?></td>
            </tr>
                        <tr>
                <th><?= __('Last Name') ?></th>
                <td><?= h($user->last_name) ?></td>
            </tr>
                        <tr>
                <th><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
                        <tr>
                <th><?= __('Role') ?></th>
                <td><?= h($user->role) ?></td>
            </tr>
                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
                <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($user->modified) ?></td>
            </tr>
                    </table>
                <div class="related">
            <h4><?= __('Related Beacons') ?></h4>
            <?php if (!empty($user->beacons)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Major') ?></th>
                            <th><?= __('Minor') ?></th>
                            <th><?= __('Detection Range') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->beacons as $beacons): ?>
                <tr>
                    <td><?= h($beacons->id) ?></td>
                    <td><?= h($beacons->uuid) ?></td>
                    <td><?= h($beacons->major) ?></td>
                    <td><?= h($beacons->minor) ?></td>
                    <td><?= h($beacons->detection_range) ?></td>
                    <td><?= h($beacons->region_id) ?></td>
                    <td><?= h($beacons->user_id) ?></td>
                    <td><?= h($beacons->created) ?></td>
                    <td><?= h($beacons->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Beacons', 'action' => 'view', $beacons->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Beacons', 'action' => 'edit', $beacons->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Beacons', 'action' => 'delete', $beacons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beacons->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>
