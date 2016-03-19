<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $beacon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $beacon->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Beacons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="beacons form large-9 medium-8 columns content">
    <?= $this->Form->create($beacon) ?>
    <fieldset>
        <legend><?= __('Edit Beacon') ?></legend>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('major');
            echo $this->Form->input('minor');
            echo $this->Form->input('detection_range');
            echo $this->Form->input('region_id', ['options' => $regions]);
            echo $this->Form->input('user_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
