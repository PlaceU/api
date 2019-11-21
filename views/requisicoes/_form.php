<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Requisicoes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisicoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dta_inicio')->textInput() ?>

    <?= $form->field($model, 'dta_fim')->textInput() ?>

    <?= $form->field($model, 'id_utilizador')->textInput() ?>

    <?= $form->field($model, 'id_sala')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
