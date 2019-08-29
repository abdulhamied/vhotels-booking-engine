<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Currency</h5>

    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "CurrencyModel.errors"]);
        ?>

        <?= $form->start() ?>


        <?= $form->text("name")->cssClass("col-md-6") ?>
        <?= $form->text("description")->cssClass("col-md-6") ?>
        <?= $form->text("symbol")->cssClass("col-md-6") ?>
        <?= $form->text("exchange_rate_to_usd")->cssClass("col-md-6")->label("Exchange rate to USD") ?>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>