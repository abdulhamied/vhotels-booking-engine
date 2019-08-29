<?php

$form = new \App\Services\FormService();

$form->setConfig(['errorFieldPrefix' => "Person.validationErrors"]);
?>

<h3>@{{title}}</h3>

<hr style="color: #BBB; height: 2px; background-color: #BBB;" />

<?= $form->start() ?>

<?= $form->text("nid") ?>
<?= $form->text("first_name") ?>
<?= $form->text("middle_name") ?>
<?= $form->text("last_name") ?>
<?= $form->select("gender")->fromArray(['male', 'female']) ?>
<?= $form->date("date_of_birth") ?>
<?= $form->date("date_of_death") ?>
<?= $form->text("father_name") ?>
<?= $form->text("mother_name") ?>
<h3>Permanent Address</h3>
<?= $form->text("permanent_address.house")->label("House") ?>
<?= $form->text("permanent_address.ward")->label("Ward") ?>
<div class="form-group">
    <label for="atoll" class="col-sm-4 control-label" style="text-align: left;">Atoll / Island: </label>
    <div class="col-sm-8 form-inline" >

        <select class="form-control" ng-model="form.permanent_address.atoll">
            <option value=""> -- Atoll --</option>
            <option ng-repeat="(key, atoll) in IslandService.atolls" 
                    value="@{{key}}">@{{atoll.name}}</option>

        </select>
        <select class="form-control" ng-model="form.permanent_address.island" style="width:350px;">
            <option value=""> ---  Island  --</option>
            <option ng-repeat="island in IslandService.atolls[form.permanent_address.atoll]['islands']" 
                    value="@{{island.name}}">@{{island.name}}</option>

        </select>

    </div>
    <div class="col-sm-12">

        <span style="color:red;">@{{ Person.validationErrors['permanent_address.island'][0] }}</span>

    </div>
</div>

<?= $form->saveButton() ?>