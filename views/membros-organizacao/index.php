<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMembrosOrganizacao */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Membros Organizacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membros-organizacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Membros Organizacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_utilizador',
            'id_organizao',
            'moderador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
