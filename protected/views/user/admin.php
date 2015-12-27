<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('index'),
    'Manage',
);
?>

<h1>
    <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Manage Users
</h1>
<hr>
<div class="row">
    <div class="col-md-9">
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'user-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'itemsCssClass' => 'table table-bordered',
        'columns' => array(
            'email',
            'name',
            'address',
            'country',
            array(
                'class' => 'CButtonColumn',
                'template' => '{view} {edit} {delete}',
                'buttons'=>array(
                    'view' => array
                    (
                        'label'=>'View',
                        'htmlOptions'=>'<div></div>',
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                    ),
                    'edit' => array
                    (
                        'label'=>'View',
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                    ),
                    'delete' => array
                    (
                        'label'=>'View',
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                    )
                ),
            ),
        ),
    ));
    ?>
    </div>
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Operations
            </a>
            <a href="../create" class="list-group-item">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create User
            </a>
        </div>
    </div>
</div>
