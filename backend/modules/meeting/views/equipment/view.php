<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\meeting\models\Equipment */

$this->title = $model->equipment;
$this->params['breadcrumbs'][] = ['label' => 'อุปกรณ์', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-cogs fa-spin"></i> <?= Html::encode($this->title) ?></h3>  
    </div>
    <div class="box-body">

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('ลบออก', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= html::img('uploads/equipment/'.$model->photo,['class'=>'thumbnail','width'=>350]); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'equipment',
            'description:ntext',
            //'photo',

        ],
    ]) ?>

</div></div>
