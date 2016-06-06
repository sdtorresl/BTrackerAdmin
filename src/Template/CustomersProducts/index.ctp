<div class="purchases index white-bg z-depth-3">
    <div class="card-panel black grey darken-4">
        <a href="/stats" class="left">
            <i class="material-icons back">keyboard_backspace</i>
        </a>
        <h1><?= __('Favorite Offers') ?></h1>
    </div>
    <div class="wrapper">
        <div class="flash">
            <?= $this->Flash->render() ?>
        </div>
        
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('product_id') ?></th>
                    <th><?= __('favorited') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customersProducts as $customersProduct): ?>
                <tr>
                    <td><?= $customersProduct->has('product') ? $this->Html->link($customersProduct->product->name, ['controller' => 'Products', 'action' => 'view', $customersProduct->product->id]) : '' ?></td>
                    <td><?= $customersProduct->redemptions ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev("") ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next("") ?>
            </ul>
            <!-- <p><?= $this->Paginator->counter() ?></p> -->
        </div>
    </div>
</div>
