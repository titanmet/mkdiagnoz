<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PokazatelLive */

$this->title = 'Create Pokazatel Live';
$this->params['breadcrumbs'][] = ['label' => 'Pokazatel Lives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokazatel-live-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
