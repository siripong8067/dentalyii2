<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = $model->firstname.'  '.$model->lastname;
$this->params['breadcrumbs'][] = ['label' => 'บุคคลากร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> <?= Html::encode($this->title) ?></h3>  
    </div>
    <div class="box-body">

  

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user.username',
            'user.email',
            'firstname',
            'lastname',
            'photo',
            'address:ntext',
            'tel',
            'department.department',
        ],
    ]) ?>

</div></div>
