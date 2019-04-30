<?php
/* @var $this yii\web\View */
$this->title = 'Диагноз';
use yii\widgets\Menu;
echo Menu::widget([
    'items' => [
        ['label' => 'Прием пациентов', 'url' => ['priem/index']],
        ['label' => 'Пациенты', 'url' => ['klient/index']],
        ['label' => 'Жалобы', 'url' => ['jaloba/index']],
        ['label' => 'Формализация жалоб', 'url' => ['pokazatel-jal/index']],
        ['label' => 'Формализация анамнез жизни', 'url' => ['pokazatel-live/index']],
        ['label' => 'Формализация анамнез заболевания', 'url' => ['pokazatel-obsl/index']],
        ['label' => 'Формализация осмотр', 'url' => ['pokazatel-osm/index']],
        ['label' => 'Формализация обследование', 'url' => ['pokazatel-zabol/index']],
    ],
	    'activeCssClass'=>'active',
        'firstItemCssClass'=>'fist-item',
        'lastItemCssClass' =>'last-item',
        'options' => [
        'id'=>'menu',
        'class' => 'menu',
        'data-id'=>'menu',],
]);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Диагностика заболеваний</h1>

        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
            </div>
           
            </div>
        </div>

    </div>
</div>