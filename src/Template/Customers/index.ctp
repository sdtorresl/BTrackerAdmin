
<div class="customers index white-bg z-depth-3">
    <div class="card-panel black grey darken-4">
        <a href="/stats" class="left">
            <i class="material-icons back">keyboard_backspace</i>
        </a>
        <h1><?= __('Customers') ?></h1>
    </div>
    <div class="wrapper">
        <div class="flash">
            <?= $this->Flash->render() ?>
        </div>

        <div class="search">
            <?php echo $this->Form->create('search'); ?>
            <div class="row">
                <div class="col l10">
                    <?php echo $this->Form->input('search', array('placeholder' => __('Search by MAC address'), 'label' => false)); ?>
                </div>
                <div class="col l2 right">
                    <?php echo $this->Form->button(__('Search'), array('class' => 'waves-effect waves-light btn')); ?>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>

        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mac') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                        <td><?= $this->Number->format($customer->id) ?></td>
                        <td><?= $this->Html->link(h($customer->mac), ['action' => 'view', h($customer->id)]) ?></td>
                        <td><?= h($customer->created) ?></td>
                        <td><?= h($customer->modified) ?></td>
                        <td class="actions">
                        
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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
