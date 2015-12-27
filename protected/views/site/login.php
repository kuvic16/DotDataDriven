<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
<h1>Login</h1>
<hr>
<div class="row">
    <div class="col-md-3">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <p>
            <?php echo $form->error($model, 'username'); ?>
            <?php echo $form->error($model, 'password'); ?>
        </p>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
            
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control ')); ?>
            
            <p class="hint">
                <kbd>Hint:</kbd> You may login with <b>demo</b>/<b>demo</b>.
            </p>
        </div>

        <div class="rememberMe form-group">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe'); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="form-group">
        <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-default')); ?>
        </div>

<?php $this->endWidget(); ?>
    </div><!-- form -->
</div>