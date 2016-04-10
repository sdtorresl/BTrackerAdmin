<div class="customersProducts index white-bg z-depth-3">
    <div class="card-panel black grey darken-4">
        <a href="/stats" class="left">
            <i class="material-icons back">keyboard_backspace</i>
        </a>
        <h1><?= __('Favorites Products') ?></h1>
    </div>
    <div class="wrapper">
        <table class="bordered responsive-table highlight" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('count') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customersProducts as $customersProduct): ?>
                <tr>
                        <td><?= $customersProduct->count ?></td>
                        <td><?= $customersProduct->product ?>
                    </td>
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
