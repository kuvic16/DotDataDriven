<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('admin'),
    $model->name,
);

//$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>
<h3><?php echo $model->name; ?></h3>
<hr>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label class="control-label">Email</label>
            <p><?php echo $model->email; ?></p>
        </div>

        <div class="form-group">
            <label class="control-label">Password</label>
            <p><?php echo '***'; ?></p>
        </div>

        <div class="form-group">
            <label class="control-label">Country</label>
            <p><?php echo $model->country; ?></p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label class="control-label">Name</label>
            <p><?php echo $model->name; ?></p>
        </div>

        <div class="form-group">
            <label class="control-label">Address</label>
            <p><?php echo $model->address; ?></p>
        </div>

    </div>
    <div class="col-md-3"></div>
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Operations
            </a>
            <a href="create" class="list-group-item">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create User
            </a>
            <a href="update/<?php echo $model->id; ?>" class="list-group-item">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update User
            </a>
            <a href="delete/<?php echo $model->id; ?>" class="list-group-item">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete User
            </a>
            <a href="admin" class="list-group-item">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Manage User
            </a>
        </div>
    </div>
</div>

<?php
//$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'id',
//		'email',
//		'password',
//		'name',
//		'address',
//		'country',
//		'sign_up_date',
//		'activation_date',
//		'created_by_id',
//		'last_modified_by_id',
//		'last_modified_date',
//	),
//)); 
?>
