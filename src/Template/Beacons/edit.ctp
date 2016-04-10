
<div class="beacons form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Edit Beacon') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($beacon) ?>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('major');
            echo $this->Form->input('name');
            echo $this->Form->input('minor');
            echo $this->Form->input('detection_range');
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
