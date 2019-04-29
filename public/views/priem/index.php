<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PriemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Priems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priem-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Priem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data',
            'klient_id',
            'jaloba_id',
            'pokazatel_jal_id',
            'pokazatel_live_id',
            'pokazatel_zabol_id',
            'pokazatel_osm_id',
            'pokazatel_obsl_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
