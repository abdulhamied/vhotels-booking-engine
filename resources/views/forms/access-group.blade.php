<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Save Link</h5>

    </div>
    <div class="ibox-content">

        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "UiFavouriteLinkService.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->text("title")->cssClass("col-md-6"); ?>
     
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>