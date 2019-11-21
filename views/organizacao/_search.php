<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchOrganizacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'morada') ?>

    <?= $form->field($model, 'mail') ?>

    <?= $form->field($model, 'contacto_fixo') ?>

    <?php // echo $form->field($model, 'contacto_movel') ?>

    <?php // echo $form->field($model, 'dta_registo') ?>

    <?php // echo $form->field($model, 'id_owner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
