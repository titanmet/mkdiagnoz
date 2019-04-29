<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jaloba */

$this->title = 'Create Jaloba';
$this->params['breadcrumbs'][] = ['label' => 'Jalobas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jaloba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
