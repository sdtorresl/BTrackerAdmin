<div class="products view white-bg z-depth-3">
    <div class="card-panel grey darken-4">
        <h1><?= h($product->name) ?></h1>
    </div>
    <div class="wrapper">
        <div class="product-image col l4 m12 s12 z-depth-1">
            <?php if($product->picture): ?>
                <?= $this->Html->image('../files/products/picture/' . $product->picture_dir . '/square_' . $product->picture); ?>
            <?php else: ?>
                <div class="no-picture valign-wrapper">
                    <i class="large material-icons">videocam_off</i>
                </div>
            <?php endif; ?>
        </div>
        <div class="col l7 m12 s12 offset-l1">
            <div class="row">
                <table class="vertical-table highlight bordered responsive-table">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($product->id) ?></td>
                    </tr>
                    <tr>    
                        <th><?= __('Price') ?></th>
                        <td><?= $this->Number->format($product->price) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Discount') ?></th>
                        <td><?= $this->Number->format($product->discount) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Status') ?></th>
                        <td><?= $product->status ? __('Active') : __('Inactive'); ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= $this->Text->autoParagraph(h($product->description)); ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Terms and Conditions') ?></th>
                        <td><?= $this->Text->autoParagraph(h($product->terms)); ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($product->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($product->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clear" style="height: 20px"></div>

        <div class="related">
            <?php if (!empty($product->purchases)): ?>
            <h4><?= __('Related Purchases') ?></h4>
            <table cellpadding="0" cellspacing="0" class="vertical-table highlight bordered responsive-table">
                <thead>
                    <tr>
                        <th><?= __('Date') ?></th>
                        <th class="right-align"><?= __('Price') ?></th>
                    </tr>
                </thead>

                <?php foreach ($product->purchases as $purchases): ?>
                <tr>
                    <td><?= h($purchases->date) ?></td>
                    <td class="right-align"><?= h($this->Number->currency($purchases->price)) ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

        <div class="related">
            <?php if (!empty($product->customers)): ?>
            <h4><?= __('Related Customers') ?></h4>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <thead>    
                    <tr>
                        <th><?= __('Mac') ?></th>
                        <th class="actions right-align"><?= __('Actions') ?></th>
                    </tr>
                </thead>

                <?php foreach ($product->customers as $customers): ?>
                <tr>
                    <td><?= $this->Html->link(h($customers->mac), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?></td>
                    <td class="actions right-align">
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

        <div class="related">
            <?php if (!empty($product->zones)): ?>
            <h4><?= __('Related Zones') ?></h4>
            <table cellpadding="0" cellspacing="0" class="highlight bordered responsive-table">
                <thead>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Description') ?></th>
                        <th><?= __('Entrance') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions right-align"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <?php foreach ($product->zones as $zones): ?>
                <tr>
                    <td><?= $this->Html->link(h($zones->name), ['controller' => 'Zones', 'action' => 'view', $zones->id]) ?></td>
                    <td><?= h($zones->description) ?></td>
                    <td><?= $zones->entrance ? __('Yes') : __('No') ?></td>
                    <td><?= $zones->status ? __('Active') : __('Inactive')?></td>
                    <td class="actions right-align">
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Zones', 'action' => 'edit', $zones->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Zones', 'action' => 'delete', $zones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zones->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="clear"></div>

        <div class="fixed-action-btn" style="bottom: 25px; right: 25px;">
            <a class="btn-floating btn-large orange" href="<?php echo '/products/edit/' . $product->id ?>" alt="Add promotion">
                <i class="large material-icons">edit</i>
            </a>
        </div>
    </div>
</div>
