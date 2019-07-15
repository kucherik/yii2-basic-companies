<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Company', ['create'], ['class' => 'btn btn-success modal-button-add', 'data-target'=>'modal-edit','data-toggle'=>'modal']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'inn',
            'general_director',
            'address',

            ['class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                    'update'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['admin/company/update', 'id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-pencil"></span>', $customurl,
                                                     ['title' => Yii::t('yii', 'Update'), 'data-pjax' => '0', 'class' => 'modal-button-edit', 'value_id' => $model['id'], 'data-target'=>'modal-edit','data-toggle'=>'modal']);
                    }
                ],
                'template'=>'{update}  {delete}',
            ],
        ]

                         ]); ?>
</div>


    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php
$this->registerJs("
$('.modal-button-edit').on('click', function() {
    var data = $(this).attr('value_id');
    $('#modal-edit').modal('show');
    $('#modal-edit').find('.modal-body').load('/admin/company/update?id=' + data);
});

$('.modal-button-add').on('click', function() {
    $('#modal-edit').modal('show');
    $('#modal-edit').find('.modal-body').load('/admin/company/create');
});
");
