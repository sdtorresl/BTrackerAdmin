
<div class="customers form white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Add Customer') ?></h1>
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
