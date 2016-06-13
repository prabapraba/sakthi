<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use raja\datetime\DateTimePicker;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use app\models\Product;

/* @var $this yii\web\View */
/* @var $model app\models\Stock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $data = Product::find()
      ->select(['id as value', 'name as  label','id as id'])
      ->asArray()
      ->all();
    ?>

    <?php
    echo '<label>Product</label>' .'<br>';
    if(isset($model->product)){
        $productName = $model->product->name;
    }else{
        $productName = '';
    }
    echo AutoComplete::widget([
      'name' => 'productid',
      'id' => 'auto-proid',
      'value' => $productName,
      'options' => ['class' => 'form-control'],
      'clientOptions' => [
        'source' => $data,
        'autoFill'=>true,
        'select' => new JsExpression("function( event, ui ) {
        $('#stock-productid').val(ui.item.id);
     }")],

    ]);
    /*echo $form->field($model, 'productid')->widget(AutoComplete::className(), ['clientOptions' => ['source' => $data],]);*/
    ?>

    <?= Html::activeHiddenInput($model, 'productid')?>
    <!-- <? //= $form->field($model, 'productid')->textInput() ?>-->

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'addedon')->widget(DateTimePicker::className(),['options' => ['class' => 'form-control'],'pluginOptions' => ['autoclose' => true    ]]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
