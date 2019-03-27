<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Requerimientos;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\VersdocrequerimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Versiones de Requerimientos';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
$titulo = $this->title;
$var = [
        'pdfConfig' => [
            'methods' => [
                'SetTitle' => '  Listado: '.$titulo,
                'SetSubject' => 'Generating PDF files via yii2-export extension has never been easy',
                // 'SetHeader' => [Html::img('imagenesHeader/bloque28.png')."||Generated On: " . date("r")],
                // 'SetHeader' => [Html::img('imagenesHeader/bloque28.png',['height'=>'10px']).'||Generado: ' . date("l")],
                'SetHeader' => [Html::img('imagenesHeader/bloque28.png',['height'=>'15px']).'  Listado: '.$titulo.' / '. Yii::$app->user->identity->username. '||Generado: ' . date('Y-m-d H:i')],
                'SetFooter' => ['|Page {PAGENO}|'],
            ]
        ]
    ];
$gridColumns = [
    // 'DepId',
    // 'CAlcId',
    // 'VDReqId',
    ['attribute'=>'ReqId_fk',
             'value'=> function($model){return $model->ReqId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ReqId_fk', ArrayHelper::map(Requerimientos::find()->all(), 'ReqId', 'ReqDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'VDReqDocu',
    'VDReqFechSist',
     ];

echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'exportConfig' => [
        ExportMenu::FORMAT_EXCEL => false,
        ExportMenu::FORMAT_EXCEL_X => false,
        ExportMenu::FORMAT_PDF => $var,
    ],
    'filename' => 'export-list-'.$this->title.'-' . date('Y-m-d_H-i-s'),
]);

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
?>
<div class="versdocrequerimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(30)) {
        echo Html::a('Crear Versión de Requerimiento', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(31)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(32)) {
          $update = '{update}';
        } else {
          $update = '';
        }
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'table-responsive',
        ],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'VDReqId',
            ['attribute'=>'ReqId_fk',
             'value'=> function($model){return $model->ReqId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ReqId_fk', ArrayHelper::map(Requerimientos::find()->all(),'ReqId','ReqDesc'),['class'=>'form-control','prompt' => 'Seleccione el Requerimiento']),
            ],
            'VDReqDocu',
            'VDReqFechSist',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
