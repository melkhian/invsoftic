<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppaplicacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appaplicaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AAplId') ?>

    <?= $form->field($model, 'AAplLengServ') ?>

    <?= $form->field($model, 'AAplVersApli') ?>

    <?= $form->field($model, 'AAplBibl') ?>

    <?= $form->field($model, 'AAplObse1') ?>

    <?php // echo $form->field($model, 'AppId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
