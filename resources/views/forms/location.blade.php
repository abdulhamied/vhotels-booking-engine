<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Location</h5>

    </div>
    <div class="ibox-content">



        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "LocationModel.errors"]);
        ?>

        <?= $form->start() ?>

        <?= $form->text("place")->cssClass("col-md-6") ?>
        
        <div class="clearfix"></div>
        <div >
            
            <div >
                <div class="col-md-12">
                    <h3>City</h3>
                </div>
                <div class="col-md-6">
                <select class="form-control" ng-model="form.country_id" style="margin-bottom: 5px;">
                    <option value=""> -- Country --</option>
                    <option ng-repeat="(key, country) in CountryService.countries" 
                            value="@{{country.id}}">@{{country.name}}</option>

                </select>
                </div>
                <div class="col-md-6">
                <select class="form-control" ng-model="form.city_id" >
                    <option value=""> ---  City  --</option>
                    <option ng-repeat="city in CountryService.getCities(form.country_id)" 
                            value="@{{city.id}}"
                            >@{{city.name}}</option>

                </select>
                </div>
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;"> 
                        @{{ LocationModel.errors['city_id'][0] }}</div>

                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>