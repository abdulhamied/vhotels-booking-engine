<?php
$form = new \vengine\Services\FormService();

$form->setConfig(['errorFieldPrefix' => "OfferModel.errors"]);
?>

<?= $form->start() ?>
<?= $form->select("offer_type")->fromArray([
            'hot_promotions' => "hot_promotions",
            'best_offers' => "best_offers",
            'last_minute' => "last_minute"
        ])->cssClass("col-md-12") ?>
<?= $form->text("title")->cssClass("col-md-12") ?>
<?= $form->texteditor("description")->cssClass("col-md-12") ?>

<?=
        $form->select("discount_type")
        ->label("Discount Type")->fromArray([
            'fixed' => 'fixed',
            'percent' => 'percent'
        ])->cssClass("col-md-6")
?>
<?= $form->text("discount_value")->label("Discount Amount")->cssClass("col-md-6") ?>

<?= $form->date("booking_date_from")->label("Booking Date From")->cssClass("col-md-6") ?>
<?= $form->date("booking_date_to")->label("Booking Date To")->cssClass("col-md-6") ?>

<?= $form->date("travel_date_from")->label("Travel Date From")->cssClass("col-md-6") ?>
<?= $form->date("travel_date_to")->label("Travel Date To")->cssClass("col-md-6") ?>

<div class="col-md-6 ">
    <div class="form-group">
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
                @{{ OfferModel.errors['hotel_id'][0] }}
            </div>

        </div>
    </div>
</div>


<div class="col-md-6 ">
    <div class="form-group">
        <label 
            class="col-sm-4 control-label" 
            style="text-align: left;">Room Category: </label>
        <div class="col-sm-8">
            <ui-select ng-model="selected.room_category" 
                       theme="bootstrap" 
                       ng-disabled="disabled"
                       style='width: 100%;'
                       >
                <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                <ui-select-choices repeat="item in RoomCategoryModel.items | propsFilter: {name: $select.search}">
                    <div ng-bind-html="item.name | highlight: $select.search"></div>
                </ui-select-choices>
            </ui-select>

        </div>
        <div class="col-sm-8 col-sm-offset-4">
            <div style="color:red;" class="ng-binding"> 
                @{{ OfferModel.errors['room_category_id'][0] }}
            </div>

        </div>
    </div>

</div>
