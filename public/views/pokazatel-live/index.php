<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PokazatelLiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pokazatel Lives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokazatel-live-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pokazatel Live', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
