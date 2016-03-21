
<div class="regions form white-bg z-depth-3">
    <div class="wrapper">
        <h1><?= __('Add Region') ?></h1>
        <?= $this->Form->create($region) ?>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
