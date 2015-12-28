<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>

<h3>
    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    Update User</h3>
<hr>

<div class="row">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Operations
            </a>
            <a href="../create" class="list-group-item">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create User
            </a>
            <a href="../view/<?php echo $model->id; ?>" class="list-group-item">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View User
            </a>
            <a href="../admin" class="list-group-item">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Manage User
            </a>
        </div>
    </div>
</div>
