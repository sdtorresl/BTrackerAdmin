
<div class="stores form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Add Store') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($store) ?>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('name');
            echo $this->Form->input('description', ['class' => 'materialize-textarea']);
            echo $this->Form->input('status', [
                'options' => array(
                    'empty' => 'Select',
                    true => __('Active'), 
                    false => __('Inactive')
                )
            ]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
