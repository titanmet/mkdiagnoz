<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Priem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Priems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="priem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'klient_id' => $model->klient_id, 'jaloba_id' => $model->jaloba_id, 'pokazatel_jal_id' => $model->pokazatel_jal_id, 'pokazatel_live_id' => $model->pokazatel_live_id, 'pokazatel_zabol_id' => $model->pokazatel_zabol_id, 'pokazatel_osm_id' => $model->pokazatel_osm_id, 'pokazatel_obsl_id' => $model->pokazatel_obsl_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'klient_id' => $model->klient_id, 'jaloba_id' => $model->jaloba_id, 'pokazatel_jal_id' => $model->pokazatel_jal_id, 'pokazatel_live_id' => $model->pokazatel_live_id, 'pokazatel_zabol_id' => $model->pokazatel_zabol_id, 'pokazatel_osm_id' => $model->pokazatel_osm_id, 'pokazatel_obsl_id' => $model->pokazatel_obsl_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'data',
            'klient_id',
            'jaloba_id',
            'pokazatel_jal_id',
            'pokazatel_live_id',
            'pokazatel_zabol_id',
            'pokazatel_osm_id',
            'pokazatel_obsl_id',
        ],
    ]) ?>

</div>
