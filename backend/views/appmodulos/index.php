<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppmodulosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Módulos por Aplicación';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appmodulos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Módulo por Aplicación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AModId',
            'AppId_fk',
            'AModNomb',
            'AModDesc',
            ['attribute'=>'TiposId_fk',
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk', ArrayHelper::map(Tipos::find()
             ->where('tipoid_fk = 46')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione la respuesta']),
            ],
            // 'TiposId_fk',
            //'AModObse',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
