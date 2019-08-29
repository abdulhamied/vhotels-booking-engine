<div class="ibox v-ibox float-e-margins">
    <div class="ibox-title v-ibox-title">
        <h5>User</h5>

    </div>
    <div class="ibox-content">



        <?php
        $form = new \vengine\Services\FormService();

        $form->setConfig(['errorFieldPrefix' => "UserService.errors"]);
        ?>

        <?= $form->start() ?>


        <?= $form->text("email")->cssClass("col-md-6") ?>
        <?= $form->text("name")->cssClass("col-md-6") ?>
        <?= $form->password("password")->cssClass("col-md-6") ?>
        <?= $form->select("type")->fromArray([
            'superuser' => 'superuser',
            'user' => 'user',
            'hotel' => 'hotel',
            'agent' => 'agent',
        ])->cssClass("col-md-6") ?>
        
        <div class="clearfix"></div>
        <div class="hr-line-dashed"></div>
        <?= $form->saveButton() ?>

    </div>
</div>