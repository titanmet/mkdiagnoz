<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PriemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'klient_id') ?>

    <?= $form->field($model, 'jaloba_id') ?>

    <?= $form->field($model, 'pokazatel_jal_id') ?>

    <?php // echo $form->field($model, 'pokazatel_live_id') ?>

    <?php // echo $form->field($model, 'pokazatel_zabol_id') ?>

    <?php // echo $form->field($model, 'pokazatel_osm_id') ?>

    <?php // echo $form->field($model, 'pokazatel_obsl_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
