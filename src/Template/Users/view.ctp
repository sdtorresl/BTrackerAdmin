<div class="users view white-bg z-depth-3">
    <div class="card-panel grey darken-4">
        <h1><?= h($user->first_name) . " " . h($user->last_name) ?></h1>
    </div>
    <div class="wrapper">
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
            <h4><?= __('Related Stores') ?></h4>
            <?php if (!empty($user->stores)): ?>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->stores as $stores): ?>
                <tr>
                    <td><?= h($stores->id) ?></td>
                    <td><?= h($stores->name) ?></td>
                    <td><?= h($stores->description) ?></td>
                    <td><?= h($stores->created) ?></td>
                    <td><?= h($stores->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Stores', 'action' => 'view', $stores->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Stores', 'action' => 'edit', $stores->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stores', 'action' => 'delete', $stores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stores->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        </div>
</div>
