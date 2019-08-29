<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Enhancement Rate</h5>

    </div>
    <div class="ibox-content">

        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "EnhancementRateModel.base.errors"]);
        ?>

        <?= $form->start() ?>

        <div class="row-fluid">
        <?= $form->select("type")->fromArray([
            'per_person' => "per_person",
            'per_day' => "per_day",
        ])->cssClass("col-md-6") ?>
        <?= $form->text("rate")->cssClass("col-md-6") ?>
        <?= $form->text("stock")->cssClass("col-md-6") ?>
        <?= $form->date("start")->cssClass("col-md-6") ?>
        <?= $form->date("end")->cssClass("col-md-6") ?>
      
            <div style="clear: both"></div>
        </div>
        <div class="row-fluid">

        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>
        </div>

    </div>
</div>