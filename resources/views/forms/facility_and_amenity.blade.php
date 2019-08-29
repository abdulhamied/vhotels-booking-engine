<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Facility/ Amenity</h5>

    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "FacilitiesAndAmenitiesModel.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->select("type")->cssClass("col-md-6")->fromArray([
            'facility' => 'facility',
            'amenity' => 'amenity',
        ]) ?>
        <?= $form->text("name")->cssClass("col-md-6") ?>
        <?= $form->select("icon_type")->fromArray([
            'image' => 'image',
            'text' => 'text',
        ])->cssClass("col-md-6") ?>
        <?= $form->text("icon_name")->cssClass("col-md-6") ?>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>