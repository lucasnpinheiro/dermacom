<div class="paginator text-left col-xs-12 col-md-10">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
</div>
<div class="paginator text-right col-xs-12 col-md-2">
    <p style="margin: 25px 0px;"><?= $this->Paginator->counter() ?></p>
</div>
<div class="clearfix"></div>