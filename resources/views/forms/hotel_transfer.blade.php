<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Hotel Transfer</h5>

    </div>
    <div class="ibox-content">


        <?php         
        $form = new \vengine\Services\FormService();
        $form->setConfig(['errorFieldPrefix' => "HotelTransferModel.errors"]);
        
         ?>
        
        
        <?= $form->start() ?>
        <div class=" col-md-6 ">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Hotel: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.hotel" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                    <ui-select-choices repeat="item in HotelModel.items | propsFilter: {name: $select.search}">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div style="color:red;"> 
                        @{{ HotelTransferModel.errors['hotel_id'][0] }}
                    </div>

            </div>

        </div>
        <div class=" col-md-6 ">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Infant Age Range: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.infant_age_range" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}} - @{{$select.selected.type}}</ui-select-match>
                    <ui-select-choices repeat="item in AgeRangeModel.age_ranges | propsFilter: {name: $select.search,
                                       type: $select.search} | filter:'infant'">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                        <div>
                        <span ng-bind-html="item.type | highlight: $select.search"></span>
                        | From <span ng-bind-html="item.start"></span>
                        To <span ng-bind-html="item.end"></span>
                        </div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;"> 
                        @{{ HotelTransferModel.errors['infant_age_range_id'][0] }}
                    </div>

                </div>


            </div>

        </div>
 
        <div class=" col-md-6">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Child Age Range: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.child_age_range" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}} - @{{$select.selected.type}}</ui-select-match>
                    <ui-select-choices repeat="item in AgeRangeModel.age_ranges | propsFilter: {name: $select.search,
                                       type: $select.search} | filter:'child'">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                        <div>
                        <span ng-bind-html="item.type | highlight: $select.search"></span>
                        | From <span ng-bind-html="item.start"></span>
                        To <span ng-bind-html="item.end"></span>
                        </div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;"> 
                        @{{ HotelTransferModel.errors['child_age_range_id'][0] }}
                    </div>

                </div>

            </div>

        </div>
 
        <div class=" col-md-6">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Teen Age Range: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.teen_age_range" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}} - @{{$select.selected.type}}</ui-select-match>
                    <ui-select-choices repeat="item in AgeRangeModel.age_ranges
                                       | propsFilter: {name: $select.search, type: $select.search} | filter:'teen'">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                        <div>
                        <span ng-bind-html="item.type | highlight: $select.search"></span>
                        | From <span ng-bind-html="item.start"></span>
                        To <span ng-bind-html="item.end"></span>
                        </div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;"> 
                        @{{ HotelTransferModel.errors['teen_age_range_id'][0] }}
                    </div>

                </div>
            </div>

        </div>
 
        <div class=" col-md-6">
            <label 
                class="col-sm-4 control-label" 
                style="text-align: left;">Adult Age Range: </label>
            <div class="col-sm-8">

                <ui-select ng-model="selected.adult_age_range" 
                           theme="bootstrap" 
                           ng-disabled="disabled"
                           style='width: 100%;'>
                    <ui-select-match placeholder="Select">@{{$select.selected.name}} - @{{$select.selected.type}}</ui-select-match>
                    <ui-select-choices repeat="item in AgeRangeModel.age_ranges
                                       | propsFilter: {name: $select.search, type: $select.search} | filter:'adult'">
                        <div ng-bind-html="item.name | highlight: $select.search"></div>
                        <div>
                        <span ng-bind-html="item.type | highlight: $select.search"></span>
                        | From <span ng-bind-html="item.start"></span>
                        To <span ng-bind-html="item.end"></span>
                        </div>
                    </ui-select-choices>
                </ui-select>
            </div>
            <div class="col-sm-8 col-sm-offset-4">
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;"> 
                        @{{ HotelTransferModel.errors['adult_age_range_id'][0] }}
                    </div>

                </div>

            </div>

        </div>
        <?= $form->select("currency_id")
                 ->cssClass("col-md-6")->label("Currency")
                 ->fromDb("currencies", "name", "id"); ?>
        
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
<?= $form->date("start_date")->cssClass("col-md-6") ?>
<?= $form->date("end_date")->cssClass("col-md-6") ?>
<?= $form->text("vessel")->cssClass("col-md-6") ?>
<?= $form->text("description")->cssClass("col-md-12")->labelFieldDimension(2,10) ?>

           
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>              
<?= $form->text("occupancy_adult")->cssClass("col-md-3") ?>
<?= $form->text("occupancy_teen")->cssClass("col-md-3") ?>
<?= $form->text("occupancy_child")->cssClass("col-md-3") ?>
<?= $form->text("occupancy_infant")->cssClass("col-md-3") ?>
<?= $form->text("adult_amount")->cssClass("col-md-3") ?>
<?= $form->text("teen_amount")->cssClass("col-md-3") ?>
<?= $form->text("child_amount")->cssClass("col-md-3") ?>
<?= $form->text("infant_amount")->cssClass("col-md-3") ?>
<?= $form->select("type")->cssClass("col-md-6")->fromArray(
        ["oneway" => "oneway","return" => "return"]) ?>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>    </div>
</div>