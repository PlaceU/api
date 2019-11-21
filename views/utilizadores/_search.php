<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchUtilizador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilizador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'morada') ?>

    <?php // echo $form->field($model, 'contacto') ?>

    <?php // echo $form->field($model, 'dta_nascimento') ?>

    <?php // echo $form->field($model, 'dta_registo') ?>

    <?php // echo $form->field($model, 'isadmin') ?>

    <?php // echo $form->field($model, 'isbanned') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
