<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Eczaneler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eczaneler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EczaneAd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EczaneSehir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EczaneCalisanSayisi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
