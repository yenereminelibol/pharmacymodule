<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Deposecme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deposecme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepoAd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EczaneAd')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
