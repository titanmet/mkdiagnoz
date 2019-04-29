<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PokazatelZabol */

$this->title = 'Create Pokazatel Zabol';
$this->params['breadcrumbs'][] = ['label' => 'Pokazatel Zabols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokazatel-zabol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
