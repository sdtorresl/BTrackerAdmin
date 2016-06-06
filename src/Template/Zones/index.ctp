
<div class="zones index white-bg z-depth-3">
    <div class="card-panel black grey darken-4">
        <h1><?= __('Zones') ?></h1>
    </div>
    <div class="wrapper">
        <div class="flash">
            <?= $this->Flash->render() ?>
        </div>
        
        <div class="search">
            <?php echo $this->Form->create('search'); ?>
            <div class="row">
                <div class="col l10">
                    <?php echo $this->Form->input('search', array('placeholder' => __('Search by zone, beacon or store'), 'label' => false)); ?>
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
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('beacon_id') ?></th>
                    <th><?= $this->Paginator->sort('entrance') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($zones as $zone): ?>
                <tr>
                    <td><?= $this->Number->format($zone->id) ?></td>
                    <td><?= $this->Html->link(h($zone->name), ['action' => 'view', $zone->id]) ?></td>
                    <td><?= $zone->has('store') ? $this->Html->link($zone->store->name, ['controller' => 'Stores', 'action' => 'view', $zone->store->id]) : '' ?></td>
                    <td><?= $zone->has('beacon') ? $this->Html->link($zone->beacon->name, ['controller' => 'Beacons', 'action' => 'view', $zone->beacon->id]) : '' ?></td>
                    <td><?= $zone->entrance ? __('Yes') : __('No'); ?></td>
                    <td><?= $zone->status ? __('Active') : __('Inactive'); ?></td>
                    <td class="actions">
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
