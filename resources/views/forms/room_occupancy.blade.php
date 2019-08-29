<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Room Occupancy</h5>

    </div>
    <div class="ibox-content">



        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "RoomOccupancyModel.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->number("adult_occupancy")->cssClass("col-md-6") ?>
        <?= $form->number("teen_occupancy")->cssClass("col-md-6") ?>
        <?= $form->number("child_occupancy")->cssClass("col-md-6") ?>
        <?= $form->number("infant_occupancy")->cssClass("col-md-6") ?>
        <?= $form->number("person_occupancy")->cssClass("col-md-6") ?>

        <div class="clearfix"></div>
        <div class="hr-line-dashed "></div>
        <?= $form->saveButton() ?>

    </div>
</div>