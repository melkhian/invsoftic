<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepNomb')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

    <?= $form->field($model, 'DepEnca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->orderBy("TiposDesc ASC")->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Cargo'])?>

    <?= $form->field($model, 'DepTele')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DepDire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk2')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 4')->orderBy("TiposDesc ASC")->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo'])?>

    <?= $form->field($model, 'DepCorr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
