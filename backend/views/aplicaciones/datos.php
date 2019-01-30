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
<br><br>
<?= $form->field($model, 'AppNomb')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppDesc')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppSigl')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppVers')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'ESopId1')->textInput() ?>

<?= $form->field($model, 'AppUrl')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'TiposId_fk1')->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 20')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'TiposId_fk2')->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 21')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'AppNumeDocuAdqu')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppValoAdqu')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppFechAdqu')->textInput() ?>

<?= $form->field($model, 'TiposId_fk3')->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 22')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'AppNombProc')->textInput(['maxlength' => true]) ?>
