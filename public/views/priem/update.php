<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Priem */

$this->title = 'Update Priem: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Priems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'klient_id' => $model->klient_id, 'jaloba_id' => $model->jaloba_id, 'pokazatel_jal_id' => $model->pokazatel_jal_id, 'pokazatel_live_id' => $model->pokazatel_live_id, 'pokazatel_zabol_id' => $model->pokazatel_zabol_id, 'pokazatel_osm_id' => $model->pokazatel_osm_id, 'pokazatel_obsl_id' => $model->pokazatel_obsl_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="priem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
