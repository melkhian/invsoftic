<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">IX. REQUERIMIENTOS DE HARDWARE PARA EL SERVIDOR</h1>
<br><br>
    <?= $form->field($model, 'AppTipoHard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppProc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppMemo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppEspaDisc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse3')->textarea(['maxlength' => true, 'rows' => '3']) ?>
