<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MembrosOrganizacao */

$this->title = 'Update Membros Organizacao: ' . $model->id_utilizador;
$this->params['breadcrumbs'][] = ['label' => 'Membros Organizacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_utilizador, 'url' => ['view', 'id_utilizador' => $model->id_utilizador, 'id_organizao' => $model->id_organizao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="membros-organizacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
