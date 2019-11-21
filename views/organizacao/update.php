<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacao */

$this->title = 'Update Organizacao: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Organizacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organizacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
