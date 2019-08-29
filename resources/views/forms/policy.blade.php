<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Policy</h5>

    </div>
    <div class="ibox-content">



        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "PolicyModel.errors"]);
        ?>

        <?= $form->start() ?>
        <?= $form->text("name")->cssClass("col-md-6") ?>
         <?= $form->select("type")->cssClass("col-md-6")
                ->fromDb("attributes", 'display_name', 'display_name', [
                    ['type' , '=', 'policy']
                ]) ?>
        
        <?= $form->texteditor("data")->label("Text")
                ->cssClass("col-md-12")->labelFieldDimension(12,12) ?>
       
        
        
        

        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>