<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Searchrequisicoes */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requisicoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requisicoes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Requisicoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dta_inicio',
            'dta_fim',
            'id_utilizador',
            'id_sala',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
