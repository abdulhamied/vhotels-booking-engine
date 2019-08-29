<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Cache Tariff</h5>

    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "CacheTariffModel.errors"]);
        ?>

        <?= $form->start() ?>
        <?= $form->text("single")->cssClass("col-md-6") ?>
        <?= $form->text("double")->cssClass("col-md-6") ?>
        <?= $form->text("twin")->cssClass("col-md-6") ?>
        <?= $form->text("triple")->cssClass("col-md-6") ?>
        <?= $form->text("quadruple")->cssClass("col-md-6") ?>
        <?= $form->text("pax_5")->cssClass("col-md-6") ?>
        <?= $form->text("pax_6")->cssClass("col-md-6") ?>
        <?= $form->text("pax_7")->cssClass("col-md-6") ?>
        <?= $form->text("pax_8")->cssClass("col-md-6") ?>
        <?= $form->text("pax_9")->cssClass("col-md-6") ?>
        <?= $form->text("pax_10")->cssClass("col-md-6") ?>
        <?= $form->text("child_rate")->cssClass("col-md-6") ?>
        <?= $form->text("teen_rate")->cssClass("col-md-6") ?>
        <?= $form->text("child_rate")->cssClass("col-md-6") ?>
        <?= $form->text("infant_rate")->cssClass("col-md-6") ?>
        <?= $form->text("baby_cot_rate")->cssClass("col-md-6") ?>
        <?= $form->text("extra_bed_rate")->cssClass("col-md-6") ?>
        
        <div class="row" ng-repeat="mealPlan in form.meal_plans">
            <div class="col-md-12">
                <h3>{{mealPlan.meal_type.name}}</h3>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label 
                           class="col-md-4 control-label"
                           style="text-align: left;"
                           >Adult Rate: </label>
                    <div class="col-md-8" >
                        <input type="text" class="form-control" 
                               ng-model="mealPlan.adult_rate">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label 
                           class="col-md-4 control-label"
                           style="text-align: left;"
                           >Child Rate: </label>
                    <div class="col-md-8" >
                        <input type="text" class="form-control" 
                               ng-model="mealPlan.child_rate">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label 
                           class="col-md-4 control-label"
                           style="text-align: left;"
                           >Teen Rate: </label>
                    <div class="col-md-8" >
                        <input type="text" class="form-control" 
                               ng-model="mealPlan.teen_rate">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label 
                           class="col-md-4 control-label"
                           style="text-align: left;"
                           >Infant Rate: </label>
                    <div class="col-md-8" >
                        <input type="text" class="form-control" 
                               ng-model="mealPlan.infant_rate">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>