
<div class="beacons form white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Add Beacon') ?></h1>
        <?= $this->Form->create($beacon) ?>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('major');
            echo $this->Form->input('minor');
            echo $this->Form->input('detection_range');
            echo $this->Form->input('region_id', ['options' => $regions]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
