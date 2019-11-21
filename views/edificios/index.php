<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchEdificios */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Edificios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edificios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Edificios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'designacao',
            'morada',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
