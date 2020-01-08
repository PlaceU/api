<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SalasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'designacao') ?>

    <?= $form->field($model, 'lugares') ?>

    <?= $form->field($model, 'tem_pc') ?>

    <?= $form->field($model, 'tem_projetor') ?>

    <?php // echo $form->field($model, 'tem_qi') ?>

    <?php // echo $form->field($model, 'tem_wifi') ?>

    <?php // echo $form->field($model, 'id_edificio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
