
<div class="products form white-bg z-depth-3">
    <div class="card-panel  grey darken-4">
        <h1><?= __('Edit Offer') ?></h1>
    </div>
    <div class="wrapper">
        <div class="flash">
            <?= $this->Flash->render() ?>
        </div>

        <?= $this->Form->create($product, ['type' => 'file']) ?>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('type', [
                'options' => array(
                    'Discount' => __('Discount'),
                    'Message' => __('Message'), 
                    'Others' => __('Others')
                )
            ]);
            echo $this->Form->input('description', ['class' => 'materialize-textarea']);
            echo $this->Form->input('price');
            echo $this->Form->input('discount');
            echo $this->Form->input('terms', ['class' => 'materialize-textarea']);
            echo $this->Form->input('status', [
                'options' => array(
                    'empty' => 'Select',
                    true => __('Active'), 
                    false => __('Inactive')
                )
            ]);

            echo $this->Form->input('zones._ids', ['options' => $zones]);
        ?>
     

        <?php $product->picture ? $path = __($product->picture) : $path = __('Upload your image here'); ?>

        <div class="file-field input-field">
            <div class="btn waves-effect waves-light small cyan darken-4">
                <span>Upload</span>
                <?= $this->Form->input('picture', ['type' => 'file', 'label' => false]); ?>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="<?php echo $path; ?>">
            </div>
        </div>
 
        <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light right']) ?>
        <?= $this->Form->end() ?>
        <div class="clear"></div>
    </div>
</div>
