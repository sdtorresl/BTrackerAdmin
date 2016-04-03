
<div class="users form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Add User') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($user) ?>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
