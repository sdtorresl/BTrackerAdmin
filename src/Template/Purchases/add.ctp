
<div class="purchases form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Add Purchase') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($purchase) ?>
        <?php
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('date');
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
