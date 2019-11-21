<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Requisicoes */

$this->title = 'Create Requisicoes';
$this->params['breadcrumbs'][] = ['label' => 'Requisicoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requisicoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
