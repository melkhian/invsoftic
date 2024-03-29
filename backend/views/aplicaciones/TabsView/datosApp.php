<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use backend\models\Aplicaciones;
use kartik\date\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;

// NOTE: Para los checkbox y radiobutton DEPENDIENTES se usa el archivo otros.php, este archivo es llamado en _form.php de Aplicaciones y maneja los Javascript

// <?= $form->field($model, 'TiposId_fk8')
// ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 26')->all(),'TiposValo','TiposDesc'),
// ['onchange'=>'TiposId_fk($id=8,$tab=5,$tipo="checkbox");'
// ])
// NOTE: Para el caso de arriba, la función es llamada por medio del atributo onchange, esta función 'TiposId_fk' se encuentra en otros.php y requiere
// 3 parámetros, el id que corresponde a el número terminal del atributo, tab que es el número de tab donde está y el tipo que puede ser checkbox o radiobutton

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>

<br>
<h1 align="center">VII. DATOS BÁSICOS APLICACIÓN</h1>
<br><br>
<div class="">
  <?= $form->field($model, 'TiposId_fk5')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 23')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TipoPuesta();'
  ])?>
</div>

<div class="row">

  <div class="col-sm-4">
    <div class="col-sm-6">
      <?= $form->field($model, 'AppFechPues')->textInput(['maxlength' => true, 'disabled' => true]) ?>
      </div>
      <div class="col-sm-6">
        <?= $form->field($model, 'AppServPues')->textInput(['maxlength' => true, 'disabled' => true]) ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="col-sm-6">
        <?= $form->field($model, 'AppFechPues1')->textInput(['maxlength' => true, 'disabled' => true]) ?>
      </div>
        <div class="col-sm-6">
          <?= $form->field($model, 'AppServPues1')->textInput(['maxlength' => true, 'disabled' => true]) ?>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="col-sm-6">
          <?= $form->field($model, 'AppFechPues2')->textInput(['maxlength' => true, 'disabled' => true]) ?>
        </div>
        <div class="col-sm-6">
          <?= $form->field($model, 'AppServPues2')->textInput(['maxlength' => true, 'disabled' => true]) ?>
        </div>
        </div>
      </div>

      <?= $form->field($model, 'TiposId_fk6')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 24')->all(),'TiposValo','TiposDesc'))?>

      <?= $form->field($model, 'TiposId_fk7')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 25')->all(),'TiposValo','TiposDesc'))?>

      <?= $form->field($model, 'TiposId_fk8')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 26')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=8,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual8')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'AppServWebVers')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk9')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 27')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=9,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual9')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk10')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 28')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=10,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual10')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk11')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 29')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=11,$tab=5,$tipo="radio");'
      ])?>

      <?= $form->field($model, 'TiposId_fk12')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 30')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=12,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual12')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk13')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=13,$tab=5,$tipo="radio");'
      ])?>

      <?= $form->field($model, 'TiposId_fk14')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 32')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=14,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual14')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk15')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=15,$tab=5,$tipo="radio");'
      ])?>

      <?= $form->field($model, 'TiposId_fk16')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 34')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=16,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual16')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk17')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=17,$tab=5,$tipo="radio");'
      ])?>

      <?= $form->field($model, 'TiposId_fk18')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 36')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=18,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual18')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk19')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=19,$tab=5,$tipo="radio");'
      ])?>

      <?php // NOTE: Explicación de este DynamicFormWidget en views/aplicaciones/Tabs/datosApp.php, en el último widget
            //      DynamicFormWidget correspondiente a Aplicaciones Relacionadas
            ?>

      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> APLICACIONES RELACIONADAS</h4></div>
          <div class="panel-body">
            <?php DynamicFormWidget::begin([
              'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
              'widgetBody' => '.container-items7', // required: css class selector
              'widgetItem' => '.item7', // required: css class
              'limit' => 999, // the maximum times, an element can be cloned (default 999)
              'min' => 1, // 0 or 1 (default 1)
              'insertButton' => '.add-item7', // css class
              'deleteButton' => '.remove-item7', // css class
              'model' => $modelsAppinteractua[0],
              'formId' => 'dynamic-form',
              'formFields' => [
                'AIntOtroCual',
                'AppId_fk1',
              ],
            ]); ?>

            <div class="container-items7"><!-- widgetContainer -->
              <?php foreach ($modelsAppinteractua as $i => $modelAppinteractua): ?>
                <div class="item7 panel panel-default"><!-- widgetBody -->
                  <div class="panel-heading">
                    <h3 class="panel-title pull-left">Aplicación</h3>
                    <div class="pull-right">
                      <button type="button" class="add-item7 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                      <button type="button" class="remove-item7 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="panel-body">
                    <?php
                    // necessary for update action.
                    if (! $modelAppinteractua->isNewRecord) {
                      echo Html::activeHiddenInput($modelAppinteractua, "[{$i}]AIntId");
                    }
                    ?>
                    <div class="row">
                      <div class="col-sm-8">
                        <?= $form->field($modelAppinteractua, "[{$i}]AppId_fk1")
                        ->dropDownList(ArrayHelper::map(Aplicaciones::find()->all(),'AppId','AppNomb'),
                        ['onchange'=>'Appinteractua();'])?>
                      </div>
                      <div class="col-sm-4">
                        <?= $form->field($modelAppinteractua, "[{$i}]AIntOtroCual")->textInput(['maxlength' => true, 'disabled' => true]) ?>
                      </div>
                    </div>
                  </div><!-- .row -->
                </div>
              <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
          </div>
        </div>
      </div>


      <?= $form->field($model, 'TiposId_fk20')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=20,$tab=5,$tipo="radio");'
      ])?>

      <?= $form->field($model, 'AppOtroCual20')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk56')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 52')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=56,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk21')
      ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 38')->all(),'TiposValo','TiposDesc'),
      ['onchange'=>'TiposId_fk($id=21,$tab=5,$tipo="checkbox");'
      ])?>

      <?= $form->field($model, 'AppOtroCual21')->textInput(['maxlength' => true, 'disabled' => true]) ?>

      <?= $form->field($model, 'TiposId_fk22')
      ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>


<?php // NOTE: El siguiente código genera una forma dinámica para manejar relaciones 1:N
      // use wbraganca\dynamicform\DynamicFormWidget; Se debe usar el widget, el cual es descargado por medio de composer
      // requiere ser configurado en diferentes archivos, listados a continuación.
      // 1)_form.php
      //    a) Dentro de la forma que se va a pegar el código que genera el dynamicform se debe modificar varios elementos de este SI se van a manejar varios en la misma forma
      //       se debe agregar un número consecutivo luego de items y este número es igual en todo el widget, solo cambia cuando se crea otro widget
      //      I)'widgetBody' => '.container-items', para otro widget queda 'widgetBody' => '.container-items1', y así en todo el widget
      //      II) 'widgetItem' => '.item',
      //      III) 'insertButton' => '.add-item',
      //      IV) 'deleteButton' => '.remove-item',
      //      V) <div class="container-items">
      //      VI) <div class="item panel panel-default">
      //      VII) <button type="button" class="add-item btn btn-success btn-xs">
      //      VIII)<button type="button" class="remove-item btn btn-danger btn-xs">

      // NOTE: Para elaborar el CREATE
      //    b) views/NombreModelo/create.php
      //      I)  <?= $this->render('_form', [
      //          'model' => $model,
      //          'otrosModelos' => $otrosModelos,
      //          ])
      //    c)Controller.php (Puede revisarse AplicacionesController.php)
      //      I) Se agregan los modelos
      //          $model = new Aplicaciones();
      //          $modelsAppmodulos = [new Appmodulos];
      //      II) Se cargan los modelos
      //          $modelsAppplugins = Model::createMultiple(Appplugins::classname());
      //          Model::loadMultiple($modelsAppplugins, Yii::$app->request->post());
      //      III) Se agregan los foreach
      //              foreach ($modelsAppmodulos as $modelAppmodulos) {
      //              $modelAppmodulos->AppId_fk = $model->AppId; // NOTE:  Aquí se relacionan los modelos con sus respectivas llaves
      //               if (! ($flag = $modelAppmodulos->save(false))) {
      //                   $transaction->rollBack();
      //                   break;
      //               }
      //             }
      // NOTE: Se renderizan todos los modelos que se usan en el formulario
      //              return $this->render('create', [
      //                'model' => $model,
      //                'modelsAppmodulos' => (empty($modelsAppmodulos)) ? [new Appmodulos] : $modelsAppmodulos,
      //               ]);
      // NOTE: Se debe eliminar en rules del modelo N la llave foránea de los campos requeridos, en este caso Aplicaciones es el modelo 1 y appmodulos es el modelo N

      // NOTE: Para elaborar el UPDATE
      //    d) views/NombreModelo/update.php
      //      $this->render('_form', [
      //        'model' => $model,
      //        'modelsAppmodulos' => $modelsAppmodulos,
      // ])
      //    e) controller.php (Puede revisarse AplicacionesController.php)
      //      I) Agregar modelo $modelsAppmodulos = $model->appmodulos;
      //      II) $oldIDs = ArrayHelper::map($modelsAppmodulos, 'AModId', 'AModId'); ...continúa código
      //      III) Agregar deleteAll   if (! empty($deletedIDs)) {Appmodulos::deleteAll(['AModId' => $deletedIDs]);}
      //      IV) Agregar foreach      foreach ($modelsAppplugins as $modelAppplugins) {$modelAppplugins->AppId_fk = $model->AppId;
                        // if (! ($flag = $modelAppplugins->save(false))) {$transaction->rollBack();
                        //   break;}}
      //      V) Agregar return 'modelsAppmodulos' => (empty($modelsAppmodulos)) ? [new Appmodulos] : $modelsAppmodulos,
      ?>
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> MÓDULOS QUE LA COMPONEN</h4></div>
          <div class="panel-body">
            <?php DynamicFormWidget::begin([
              'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
              'widgetBody' => '.container-items', // required: css class selector
              'widgetItem' => '.item', // required: css class
              'limit' => 999, // the maximum times, an element can be cloned (default 999)
              'min' => 1, // 0 or 1 (default 1)
              'insertButton' => '.add-item', // css class
              'deleteButton' => '.remove-item', // css class
              'model' => $modelsAppmodulos[0],
              'formId' => 'dynamic-form',
              'formFields' => [
                'AModNomb',
                'AModDesc',
                'TiposId_fk',
                'AModObse',
              ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
              <?php foreach ($modelsAppmodulos as $i => $modelAppmodulos): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                  <div class="panel-heading">
                    <h3 class="panel-title pull-left">Módulo</h3>
                    <div class="pull-right">
                      <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                      <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="panel-body">
                    <?php
                    // necessary for update action.
                    if (! $modelAppmodulos->isNewRecord) {
                      echo Html::activeHiddenInput($modelAppmodulos, "[{$i}]AModId");
                    }
                    ?>
                    <div class="row">
                      <div class="col-sm-8">
                        <?= $form->field($modelAppmodulos, "[{$i}]AModNomb")->textInput(['maxlength' => true, 'disabled' => true]) ?>
                      </div>
                      <div class="col-sm-4">
                        <?= $form->field($modelAppmodulos, "[{$i}]TiposId_fk")
                        ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposId','TiposDesc'),
                        ['prompt'=> 'Seleccione la respuesta'])?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <?= $form->field($modelAppmodulos, "[{$i}]AModDesc")->textInput(['maxlength' => true, 'disabled' => true]) ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <?= $form->field($modelAppmodulos, "[{$i}]AModObse")->textarea(['maxlength' => true, 'disabled' => true, 'rows' => '3']) ?>
                      </div>
                    </div><!-- .row -->
                  </div><!-- .row -->
                </div>
              <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
          </div>
        </div>
      </div>
