<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\color\ColorInput;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">
    <?php $form = ActiveForm::begin([
    	'options'=>[
    		'enctype'=>'multipart/form-data'
    	]

    ]); ?>ทดสอบ

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'room_img')->fileInput() ?>

    <?= $form->field($model, 'color')->widget(ColorInput::classname(), [
    	'options' => ['placeholder' => 'เลือกสีประจำห้อง'],
	]); ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
