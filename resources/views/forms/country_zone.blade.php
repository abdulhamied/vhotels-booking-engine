<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Country Zone</h5>

    </div>
    <div class="ibox-content">


        <?php         
        $form = new \vengine\Services\FormService();
        $form->setConfig(['errorFieldPrefix' => "CountryZoneModel.errors"]);
        
         ?>
        
        
        <?= $form->start() ?>
        <div class="form-group ">
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
                 <div style="color:red;">@{{ CountryZoneModel.errors['country_id'][0] }}</div>


            </div>

        </div>
                
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>    </div>
</div>