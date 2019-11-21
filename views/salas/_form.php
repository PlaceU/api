<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Salas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'designacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lugares')->textInput() ?>

    <?= $form->field($model, 'tem_pc')->textInput() ?>

    <?= $form->field($model, 'tem_projetor')->textInput() ?>

    <?= $form->field($model, 'tem_qi')->textInput() ?>

    <?= $form->field($model, 'tem_wifi')->textInput() ?>

    <?= $form->field($model, 'id_edificio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
