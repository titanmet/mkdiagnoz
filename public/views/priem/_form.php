<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Priem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'klient_id')->textInput() ?>

    <?= $form->field($model, 'jaloba_id')->textInput() ?>

    <?= $form->field($model, 'pokazatel_jal_id')->textInput() ?>

    <?= $form->field($model, 'pokazatel_live_id')->textInput() ?>

    <?= $form->field($model, 'pokazatel_zabol_id')->textInput() ?>

    <?= $form->field($model, 'pokazatel_osm_id')->textInput() ?>

    <?= $form->field($model, 'pokazatel_obsl_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
