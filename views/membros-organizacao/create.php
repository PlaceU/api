<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MembrosOrganizacao */

$this->title = 'Create Membros Organizacao';
$this->params['breadcrumbs'][] = ['label' => 'Membros Organizacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membros-organizacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
