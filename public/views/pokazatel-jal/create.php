<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PokazatelJal */

$this->title = 'Create Pokazatel Jal';
$this->params['breadcrumbs'][] = ['label' => 'Pokazatel Jals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokazatel-jal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
