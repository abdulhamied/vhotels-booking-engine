<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Company</h5>

    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "CompanyModel.errors"]);
        ?>

        <?= $form->start() ?>

      
        <?= $form->text("name") ?>
        <?= $form->text("max_users")->label("Max Users") ?>
        <?= $form->text("company_type")->label("Company Type") ?>

        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>