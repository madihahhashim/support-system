<?php

composer require --prefer-dist wbraganca/yii2-dynamicform "dev-master";
use yii\helpers\Html;

use yii\bootstrap\ActiveForm;

use wbraganca\dynamicform\DynamicFormWidget;


?>
composer require --prefer-dist wbraganca/yii2-dynamicform "dev-master"

<div class="customer-form">

    <?php $form = ActiveForm::begin([

        'enableClientValidation' => false,

        'enableAjaxValidation' => true,

        'validateOnChange' => true,

        'validateOnBlur' => false,

        'options' => [

            'enctype' => 'multipart/form-data',

            'id' => 'dynamic-form'

        ]

    ]); ?>


    <?= $form->field($modelCatalogOption, 'name')->textInput(['maxlength' => true]) ?>


    <div class="padding-v-md">

        <div class="line line-dashed"></div>

    </div>


    <?= $this->render('_form_option_values', [

        'form' => $form,

        'modelCatalogOption' => $modelCatalogOption,

        'modelsOptionValue' => $modelsOptionValue

    ]) ?>


    <div class="form-group">

        <?= Html::submitButton($modelCatalogOption->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>

    </div>


    <?php ActiveForm::end(); ?>

</div>