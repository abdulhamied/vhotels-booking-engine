<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Resource Access</h5>

    </div>
    <div class="ibox-content">

        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "ResourcePermissionModel.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->text("name")->cssClass("col-md-6"); ?>
        <?= $form->select("resource_table")->cssClass("col-md-6")
                ->fromArray([
           'hotels' => 'hotels',
                    'rooms' => 'rooms',
                    'countries' => 'countries',
                    'rooms' => 'rooms',
                    'room_categories' => 'room_categories',
                    'services' => 'services',
                    'taxes' => 'taxes',
                    'packages' => 'packages'
        ]) ?>
        <?= $form->select("list")->cssClass("col-md-3")
                ->fromArray([
           '0' => 'No',
           '1' => 'Yes'
        ]) ?>
        <?= $form->select("get")->cssClass("col-md-3")
                ->fromArray([
           '0' => 'No',
           '1' => 'Yes'
        ]) ?>
        <?= $form->select("create")->cssClass("col-md-3")
                ->fromArray([
           '0' => 'No',
           '1' => 'Yes'
        ]) ?>
        <?= $form->select("update")->cssClass("col-md-3")
                ->fromArray([
           '0' => 'No',
           '1' => 'Yes'
        ]) ?>
        
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>