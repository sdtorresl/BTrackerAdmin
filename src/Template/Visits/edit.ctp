
<div class="visits form white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Edit Visit') ?></h1>
        <?= $this->Form->create($visit) ?>
        <?php
            echo $this->Form->input('trigger_time');
            echo $this->Form->input('leave_time');
            echo $this->Form->input('zone_id', ['options' => $zones]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
