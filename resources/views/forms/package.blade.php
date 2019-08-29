<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Manage Package</h5>

    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "PackageModel.errors"]);
        ?>

        <?= $form->start() ?>
        <?= $form->select("offer_type")->fromArray([
            'hot_promotions' => "hot_promotions",
            'best_offers' => "best_offers",
            'last_minute' => "last_minute"
        ])->cssClass("col-md-12") ?>
        <?= $form->select("type")->fromArray([
            'wedding' => "wedding",
            'spa' => "spa",
            'adventure' => "adventure",
            'dive' => "dive",
        ])->cssClass("col-md-12") ?>
        <?= $form->text("name")->cssClass("col-md-12") ?>
        <?= $form->texteditor("description")->cssClass("col-md-12") ?>
        <?= $form->texteditor("terms_and_conditions")->cssClass("col-md-12") ?>

        <?= $form->date("booking_date_from")->label("Booking Date From")->cssClass("col-md-6") ?>
        <?= $form->date("booking_date_to")->label("Booking Date To")->cssClass("col-md-6") ?>
        
        <?= $form->date("travel_date_from")->label("Travel Date From")->cssClass("col-md-6") ?>
        <?= $form->date("travel_date_to")->label("Travel Date To")->cssClass("col-md-6") ?>
        
        <?= $form->number("adult_occupancy_from")->cssClass("col-md-6") ?>
        <?= $form->number("adult_occupancy_to")->cssClass("col-md-6") ?>
        
        <?= $form->number("teen_occupancy_from")->cssClass("col-md-6") ?>
        <?= $form->number("teen_occupancy_to")->cssClass("col-md-6") ?>
        
        <?= $form->number("child_occupancy_from")->cssClass("col-md-6") ?>
        <?= $form->number("child_occupancy_to")->cssClass("col-md-6") ?>
        
        <?= $form->number("infant_occupancy_from")->cssClass("col-md-6") ?>
        <?= $form->number("infant_occupancy_to")->cssClass("col-md-6") ?>
        <?= $form->text("total")->cssClass("col-md-6") ?>
        
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
                <div style="color:red;" class="ng-binding"> 
                </div>

            </div>

        </div>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>