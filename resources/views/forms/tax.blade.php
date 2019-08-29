<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Tax</h5>

    </div>
    <div class="ibox-content">


        <?php         
        $form = new \vengine\Services\FormService();
        $form->setConfig(['errorFieldPrefix' => "TaxExpenseModel.errors"]);
        
         ?>
        
        
        <?= $form->start() ?>
    <?= $form->text("name")->cssClass("col-md-6") ?>
        <div class="col-md-6 " style="margin-bottom: 10px;">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Country: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.country" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                    <ui-select-choices repeat="item in CountryModel.countries | propsFilter: {name: $select.search}">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div style="color:red;" class="ng-binding"> 
                </div>

            </div>

        </div>
        <?= $form->date("start_date")->cssClass("col-md-6") ?>
<?= $form->date("end_date")->cssClass("col-md-6") ?>
<?= $form->select("type")->cssClass("col-md-6")->fromArray([
    'fixed' => "fixed",
    "percent" => "percent",
    "per_person" => "per_person",
    "service_charge" => "service_charge",
    ]) ?>
<?= $form->text("amount")->cssClass("col-md-6") ?>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>    </div>
</div>

<?= $form->end() ?>