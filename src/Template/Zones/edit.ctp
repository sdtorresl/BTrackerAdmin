
<div class="zones form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Edit Zone') ?></h1>
    </div>
    <div class="wrapper">
        <?= $this->Form->create($zone) ?>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('store_id', ['options' => $stores]);
            echo $this->Form->input('beacon_id', ['options' => $beacons]);
            echo $this->Form->input('entrance', [
                'options' => array(
                    'Select' => array(1 => 'Yes', 0 => 'No')
                )
            ]);
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
