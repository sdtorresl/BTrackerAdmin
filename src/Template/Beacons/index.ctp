<!-- <?php debug($beacons) ;?> -->
<div class="beacons index white-bg z-depth-3">
    <div class="card-panel black grey darken-4">
        <h1><?= __('Beacons') ?></h1>
    </div>
    <div class="wrapper">
        <div class="flash">
            <?= $this->Flash->render() ?>
        </div>
        
        <div class="search">
            <?php echo $this->Form->create('search'); ?>
            <div class="row">
                <div class="col l10">
                    <?php echo $this->Form->input('search', ['placeholder' => __('Search by Beacon name or UUID'), 'label' => false]); ?>
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
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($beacons as $beacon): ?>
                <tr>
                    <td><?= $this->Number->format($beacon->id) ?></td>
                    <td><?= $this->Html->link(h($beacon->name), ['action' => 'view', $beacon->id]) ?></td>  
                    <td><?= h($beacon->uuid) ?></td>
                    <td><?= h($beacon->created) ?></td>
                    <td><?= h($beacon->modified) ?></td>
                    <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $beacon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $beacon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $beacon->id)]) ?>
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
            <a class="btn-floating btn-large orange" href="/beacons/add" alt="Add beacon">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </div>
</div>
