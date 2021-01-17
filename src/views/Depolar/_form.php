<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Depolar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depolar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepoAd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DepoSehir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DepoIlacMiktar')->textInput() ?>

    <?= $form->field($model, 'DepoCalisanSayisi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
