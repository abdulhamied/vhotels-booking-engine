<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>City</h5>

    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "CityModel.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->text("name")->cssClass("col-md-6") ?>
        <?= $form->select("country_id")->cssClass("col-md-6")
                ->label("Country")->fromDb('countries', 'name', 'id'); ?>

        <div class="clearfix"></div>
        <div class="hr-line-dashed "></div>
        <?= $form->saveButton() ?>

    </div>
</div>