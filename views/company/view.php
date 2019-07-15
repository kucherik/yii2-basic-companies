<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Company */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="company-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'inn',
            'general_director',
            'address',
        ],
    ]) ?>

</div>
