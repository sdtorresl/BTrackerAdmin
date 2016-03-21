
<div class="products form white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Add Product') ?></h1>
        <?= $this->Form->create($product) ?>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('local_uri');
            echo $this->Form->input('price');
            echo $this->Form->input('customers._ids', ['options' => $customers]);
            echo $this->Form->input('zones._ids', ['options' => $zones]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
