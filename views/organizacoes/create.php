<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacoes */

$this->title = 'Create Organizacoes';
$this->params['breadcrumbs'][] = ['label' => 'Organizacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizacoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
