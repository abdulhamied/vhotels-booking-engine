<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Age Ranges</h5>

    </div>
    <div class="ibox-content">

        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "AgeRangeModel.errors"]);
        ?>

        <?= $form->start() ?>
        <?= $form->text("name")->cssClass("col-md-6") ?>

        <?= $form->select("type")->cssClass("col-md-6")
                ->fromArray([
            'adult' => "adult",
            'teen' => "teen",
            'child' => "child",
            'infant' => "infant",
        ]) ?>
        <?= $form->number("start")->label("Start Range")->cssClass("col-md-6") ?>
        <?= $form->number("end")->label("End Range")->cssClass("col-md-6") ?>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>