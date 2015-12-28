<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Manage',
);
?>

<h3>
    <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Manage Users
</h3>
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
                'template' => '{view} {update} {delete}',
                'buttons'=>array(
                    'view' => array
                    (
                        'label'=>'',
                        'imageUrl'=>'',
                        'options'=>array(
                            'class'=>'glyphicon glyphicon-eye-open',
                            'style'=>'text-decoration: none'
                        )
                    ),
                    'update' => array
                    (
                        'label'=>'',
                        'imageUrl'=>'',
                        'options'=>array(
                            'class'=>'glyphicon glyphicon-pencil',
                            'style'=>'text-decoration: none'
                        )
                    ),
                    'delete' => array
                    (
                        'label'=>'',
                        'imageUrl'=>'',
                        'options'=>array(
                            'class'=>'glyphicon glyphicon-trash',
                            'style'=>'text-decoration: none'
                        )
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
            <a href="create" class="list-group-item">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create User
            </a>
        </div>
    </div>
</div>
