<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PokazatelJal */

$this->title = 'Update Pokazatel Jal: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pokazatel Jals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pokazatel-jal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
