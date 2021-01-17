<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\EczanelerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eczaneler-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EczaneAd') ?>

    <?= $form->field($model, 'EczaneSehir') ?>

    <?= $form->field($model, 'EczaneCalisanSayisi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
