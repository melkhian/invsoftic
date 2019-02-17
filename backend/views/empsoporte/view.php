<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Empsoporte */

$this->title = $model->ESopId;
$this->params['breadcrumbs'][] = ['label' => 'Empresas de Soporte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empsoporte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
         if (SiteController::findCom(20))
         echo Html::a('Update', ['Actualizar', 'id' => $model->ESopId], ['class' => 'btn btn-primary'])
         
        ?>
        <?php
         // Html::a('Delete', ['delete', 'id' => $model->ESopId], [
         //    'class' => 'btn btn-danger',
         //    'data' => [
         //        'confirm' => 'Are you sure you want to delete this item?',
         //        'method' => 'post',
         //    ],
        // ]) 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ESopId',
            'ESopNit',
            'ESopNomb',
            'ESopDire',
            'ESopCont',
            'TiposId_fk1',
            'ESopTelePers',
            'ESopTeleOfic',
            'ESopCorr',
            'TiposId_fk2',
        ],
    ]) ?>

</div>
