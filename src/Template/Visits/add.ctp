
<div class="visits form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Add Visit') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($visit) ?>
        <?php
            echo $this->Form->input('trigger_time');
            echo $this->Form->input('leave_time', ['empty' => true]);
            echo $this->Form->input('zone_id', ['options' => $zones]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
