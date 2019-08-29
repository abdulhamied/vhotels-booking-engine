<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Service</h5>

    </div>
    <div class="ibox-content">



        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "ServiceModel.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->text("name")->cssClass("col-md-12") ?>
        <?= $form->texteditor("description")->cssClass("col-md-12")->labelFieldDimension(12,12) ?>

            <div class=" col-md-6">
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
                    <div style="color:red;" >
                        @{{ ServiceModel.errors['hotel_id'][0] }}
                    </div>

                </div>

            </div>


        <div class="clearfix"></div>
        <div class="hr-line-dashed "></div>
        <?= $form->saveButton() ?>

    </div>
</div>