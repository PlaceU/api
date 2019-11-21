<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacao */

$this->title = 'Create Organizacao';
$this->params['breadcrumbs'][] = ['label' => 'Organizacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
