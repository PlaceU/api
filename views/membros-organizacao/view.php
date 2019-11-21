<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MembrosOrganizacao */

$this->title = $model->id_utilizador;
$this->params['breadcrumbs'][] = ['label' => 'Membros Organizacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="membros-organizacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_utilizador' => $model->id_utilizador, 'id_organizao' => $model->id_organizao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_utilizador' => $model->id_utilizador, 'id_organizao' => $model->id_organizao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_utilizador',
            'id_organizao',
            'moderador',
        ],
    ]) ?>

</div>
