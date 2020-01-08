<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organizacoes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizacoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto_fixo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto_movel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dta_registo')->textInput() ?>

    <?= $form->field($model, 'id_owner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
