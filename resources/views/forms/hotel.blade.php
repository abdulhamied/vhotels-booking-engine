<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>Add Hotel</h5>

                    <div ibox-tools=""  >
                        <div class="ibox-tools dropdown" dropdown="">
                            <a ng-click="showhide()"> <i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
    </div>
    <div class="ibox-content">


        <?php
        $form = new \vengine\Services\FormService();
        $form->setConfig(['errorFieldPrefix' => "HotelModel.errors"]);
        ?>


        <?= $form->start() ?>
        <?= $form->text("name")->labelFieldDimension(2, 10) ?>
        <div class="col-md-12">
            <div class="form-group ">
              <label for="description" 
                     class="col-sm-12 control-label"
                     style="text-align: left;"
                     >Description: </label>
              <div class="col-sm-12" style='border-bottom: 4px solid #eee;' >
                  <div   summernote class="summernote"  ng-model="form.description"></div>
              </div>
              <div class="col-sm-8 col-sm-offset-4">
                  <div style="color:red;">@{{ HotelModel.errors['description'][0] }}</div>
              </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group ">
              <label for="description" 
                     class="col-sm-12 control-label"
                     style="text-align: left;"
                     >Short Description: </label>
              <div class="col-sm-12" style='border-bottom: 4px solid #eee;' >
                  <div   summernote class="summernote"  ng-model="form.detail.short_description"></div>
              </div>
              <div class="col-sm-8 col-sm-offset-4">
                  <div style="color:red;">@{{ HotelModel.errors['detail'][0] }}</div>
              </div>

            </div>
        </div>
        
        <div class="col-md-12">
            <div class="form-group ">
              <label for="policies" 
                     class="col-sm-12 control-label"
                     style="text-align: left;"
                     >Policies: </label>
              <div class="col-sm-12" style='border-bottom: 4px solid #eee;' >
                  <div   summernote class="summernote"  ng-model="form.policies"></div>
              </div>
              <div class="col-sm-8 col-sm-offset-4">
                  <div style="color:red;">@{{ HotelModel.errors['policies'][0] }}</div>
              </div>

            </div>
        </div>

        
        <div class="col-md-12">
            <div class="form-group ">
              <label for="information" 
                     class="col-sm-12 control-label"
                     style="text-align: left;"
                     >Information: </label>
              <div class="col-sm-12" style='border-bottom: 4px solid #eee;' >
                  <div   summernote class="summernote"  ng-model="form.information"></div>
              </div>
              <div class="col-sm-8 col-sm-offset-4">
                  <div style="color:red;">@{{ HotelModel.errors['information'][0] }}</div>
              </div>

            </div>
        </div>

        
        <?= $form->text("latitude")->cssClass("col-md-6") ?>
        <?= $form->text("longitude")->cssClass("col-md-6") ?>
        
        <?= $form->text("check_in")->cssClass("col-md-6") ?>
        <?= $form->text("check_out")->cssClass("col-md-6") ?>
        
        <?= $form->select("star_rating")->label("Rating")
                ->fromArray(["1", "2", "3", "4", "5"])->cssClass("col-md-3") ?>
        
        
        <?= $form->number("distance_from_airport")->cssClass("col-md-3 ") ?>
        <?= $form->number("time_from_airport")->cssClass("col-md-3") ?>
        <?= $form->text("island_dimension")->cssClass("col-md-3") ?>
        <div class="col-md-4">
            <div class="form-group ">
                <label 
                    class="col-sm-4 control-label" 
                    style="text-align: left;">Country: </label>
                <div class="col-sm-8">
                    <ui-select ng-model="selected.country" 
                               theme="bootstrap" 
                               style='width: 100%;'
                               ng-disabled="disabled" >
                        <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                        <ui-select-choices repeat="item in CountryModel.countries | propsFilter: {name: $select.search}">
                            <div ng-bind-html="item.name | highlight: $select.search"></div>
                        </ui-select-choices>
                    </ui-select>
                </div>
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;" > 
                        @{{ HotelModel.errors['country_id'][0] }}
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group ">
                <label 
                    class="col-sm-4 control-label" 
                    style="text-align: left;">City: </label>
                <div class="col-sm-8">
                    <ui-select ng-model="selected.city" 
                               ng-change="LocationModel.getCityLocations(selected.city.id, null)"
                               theme="bootstrap" 
                               style='width: 100%;'
                               ng-disabled="disabled" >
                        <ui-select-match placeholder="Select">@{{$select.selected.name}}</ui-select-match>
                        <ui-select-choices repeat="item in CountryModel.getCities(selected.country.id) 
                                           | propsFilter: {name: $select.search}">
                            <div ng-bind-html="item.name | highlight: $select.search"></div>
                        </ui-select-choices>
                    </ui-select>
                </div>
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;" > 
                        @{{ HotelModel.errors['city_id'][0] }}
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-4 hide">
            <div class="form-group ">
                <label 
                    class="col-sm-4 control-label" 
                    style="text-align: left;">Locations: </label>
                <div class="col-sm-8">
                    <ui-select ng-model="selected.location" 
                               theme="bootstrap" 
                               style='width: 100%;'
                               ng-disabled="disabled" >
                        <ui-select-match placeholder="Select">@{{$select.selected.place}}</ui-select-match>
                        <ui-select-choices repeat="item in LocationModel.items
                                           | propsFilter: {place: $select.search}">
                            <div ng-bind-html="item.place | highlight: $select.search"></div>
                        </ui-select-choices>
                    </ui-select>
                </div>
                <div class="col-sm-8 col-sm-offset-4">
                    <div style="color:red;" > 
                        @{{ HotelModel.errors['location_id'][0] }}
                    </div>

                </div>

            </div>
        </div>
        
        <div class="clearfix"></div>
        
       <div class="hr-line-dashed"></div>
       <h3 style='margin-left: 15px;'>Age Groups</h3>
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
                        @{{ HotelModel.errors['infant_age_range_id'][0] }}
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
                        @{{ HotelModel.errors['child_age_range_id'][0] }}
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
                        @{{ HotelModel.errors['teen_age_range_id'][0] }}
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
                        @{{ HotelModel.errors['adult_age_range_id'][0] }}
                    </div>

                </div>

            </div>

        </div>
        
        <div class="clearfix"></div>
        
       <div class="hr-line-dashed"></div>
       <div class="col-md-12">
       <h3>Address</h3>
       </div>
        <?= $form->text("contact.addressline")->label("Address")->labelFieldDimension(2,10) ?>
        <?= $form->text("contact.telephone")->label("Telephone")->cssClass("col-md-6") ?>
        <?= $form->text("contact.fax")->label("Fax")->cssClass("col-md-6") ?>
        <?= $form->text("contact.email")->label("Email")->cssClass("col-md-6") ?>
        <?= $form->text("contact.website")->label("Website")->cssClass("col-md-6") ?>

        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>    </div>
</div>