
<div class="customers form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Add Customer') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($customer) ?>
        <?php
            echo $this->Form->input('mac');
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
