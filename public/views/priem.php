<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Priem */
/* @var $form ActiveForm */
?>
<div class="priem">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'data') ?>
        <?= $form->field($model, 'klient_id') ?>
        <?= $form->field($model, 'jaloba_id') ?>
        <?= $form->field($model, 'pokazatel_jal_id') ?>
        <?= $form->field($model, 'pokazatel_live_id') ?>
        <?= $form->field($model, 'pokazatel_zabol_id') ?>
        <?= $form->field($model, 'pokazatel_osm_id') ?>
        <?= $form->field($model, 'pokazatel_obsl_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- priem -->
