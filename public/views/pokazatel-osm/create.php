<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PokazatelOsm */

$this->title = 'Create Pokazatel Osm';
$this->params['breadcrumbs'][] = ['label' => 'Pokazatel Osms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pokazatel-osm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
