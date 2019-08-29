<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Tariff</h5>

    </div>
    <div class="ibox-content">


        <?php         
        $form = new \vengine\Services\FormService();
        $form->setConfig(['errorFieldPrefix' => "TariffModel.errors"]);
        
         ?>
        
        
        <?= $form->start() ?>
        <div class="form-group ">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Zone: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.zone" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                    <ui-select-choices repeat="item in ZoneModel.items | propsFilter: {name: $select.search}">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div style="color:red;" class="ng-binding"> 
                </div>

            </div>

        </div>
                <div class="form-group ">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Currency: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.currency" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                    <ui-select-choices repeat="item in CurrencyModel.items | propsFilter: {name: $select.search}">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div style="color:red;" class="ng-binding"> 
                </div>

            </div>

        </div>
                <div class="form-group ">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Room: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.room" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                    <ui-select-choices repeat="item in RoomModel.items | propsFilter: {name: $select.search}">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div style="color:red;" class="ng-binding"> 
                </div>

            </div>

        </div>
        <?= $form->date("start_date") ?>
<?= $form->date("end_date") ?>
<?= $form->date("single") ?>
<?= $form->date("double") ?>
<?= $form->date("twin") ?>
<?= $form->date("triple") ?>
<?= $form->date("quadruple") ?>
<?= $form->date("5_pax") ?>
<?= $form->date("6_pax") ?>
<?= $form->date("7_pax") ?>
<?= $form->date("8_pax") ?>
<?= $form->date("9_pax") ?>
<?= $form->date("10_pax") ?>
<?= $form->date("child_rate") ?>
<?= $form->date("teen_rate") ?>
<?= $form->date("infant_rate") ?>
<?= $form->date("baby_cot_rate") ?>
<?= $form->date("extra_bed_rate") ?>
<?= $form->number("min_nights") ?>
<?= $form->number("max_nights") ?>
        
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>    </div>
</div>

<?= $form->end() ?>