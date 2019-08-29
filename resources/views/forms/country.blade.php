<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Country</h5>

    </div>
    <div class="ibox-content">



        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "CountryModel.errors"]);
        ?>

        <?= $form->start() ?>

        <div class="row-fluid">
        <?= $form->text("name")->cssClass("col-md-6") ?>
        <?= $form->text("numeric_code")->cssClass("col-md-6") ?>
        <?= $form->text("alpha_2_code")->cssClass("col-md-6") ?>
        <?= $form->text("alpha_3_code")->cssClass("col-md-6") ?>
        <?= $form->text("region_name")->cssClass("col-md-6") ?>
        <?= $form->text("sub_region_name")->cssClass("col-md-6") ?>
        <?= $form->text("region_numeric_code")->cssClass("col-md-6") ?>
        <?= $form->text("sub_region_numeric_code")->cssClass("col-md-6") ?>
            
            
            
            <div style="clear: both"></div>
        </div>
        <div class="row-fluid">

        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>
        </div>

    </div>
</div>