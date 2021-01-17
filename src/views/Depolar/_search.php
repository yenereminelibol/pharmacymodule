<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\DepolarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depolar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DepoAd') ?>

    <?= $form->field($model, 'DepoSehir') ?>

    <?= $form->field($model, 'DepoIlacMiktar') ?>

    <?= $form->field($model, 'DepoCalisanSayisi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
