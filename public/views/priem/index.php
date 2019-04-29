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

    <h1><?= Html::encode("Прием пациентов") ?></h1>

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
            [ 'attribute' => 'Фамилия',
              'value' => 'klient.fam',
            ],
            [ 'attribute' => 'Имя',
              'value' => 'klient.name',
            ],
            [ 'attribute' => 'Отчество',
              'value' => 'klient.otch',
            ],
            [ 'attribute' => 'Жалоба',
              'value' => 'jaloba.name',
            ],    
            [ 'attribute' => 'Показатель жалобы',
              'value' => 'pokazatelJal.name',
            ],
            [ 'attribute' => 'Анамнез жизни ',
              'value' => 'pokazatelLive.name',
            ],
            [ 'attribute' => 'Анамнез заболевания',
              'value' => 'pokazatelZabol.name',
            ],
            [ 'attribute' => 'Физикальный осмотр',
              'value' => 'pokazatelOsm.name',
            ],
            [ 'attribute' => 'Обледования',
              'value' => 'pokazatelObsl.name',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
