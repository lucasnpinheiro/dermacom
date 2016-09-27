<div class=" text-left col-xs-12 col-md-10">
    <ul class="paginator">
        <?= $this->Paginator->numbers(['prev' => '< ' . __('previous'), 'next' => __('next') . ' >']) ?>
    </ul>
</div>
<div class=" text-right col-xs-12 col-md-2">
    <p class="paginator" style="margin: 25px 0px;"><?= $this->Paginator->counter() ?></p>
</div>
<div class="clearfix"></div>
<?php echo $this->Paginator->meta(['block' => true]); ?>