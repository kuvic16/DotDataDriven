<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => true,
        ));
?>

<div class="col-md-3">
    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>

    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>        
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'country', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'country', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'country'); ?>
    </div>
    
    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-default')); ?>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'address', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'address', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'address'); ?>
    </div>
    
</div>
<div class="col-md-3">
        <?php echo $form->error($model, 'email'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </p>
</div>


<?php $this->endWidget(); ?>