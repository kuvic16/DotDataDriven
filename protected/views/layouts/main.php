<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <!-- blueprint CSS framework -->
<!--	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">-->
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

<!--	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.min.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap-theme.min.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/main.css" media="screen, projection">

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap.min.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DotDataDriven</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                            array('label' => 'Home', 'url' => array('/site/index')),
                            array('label'=>'Users','url'=>array('/user/admin'), 'visible'=>!Yii::app()->user->isGuest and  Yii::app()->user->name=='admin'),
                            array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Contact', 'url' => array('/site/contact')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                        ),
                        'htmlOptions' => array('class' => 'nav navbar-nav'),
                    ));
                    if (Yii::app()->user->isGuest) {
                        ?>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" placeholder="Username: admin" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password: admin" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </nav>

        <?php
        if ($this->getAction()->getId() == 'index') {
            ?>
            <div class="jumbotron">
                <div class="container">
                    <h1>Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
                </div>
            </div>
            <?php
        }
        ?>
<!--        <h1><?php //echo $this->getAction()->getId(); ?></h1>-->
        <div class="container">
            <?php if ($this->getAction()->getId() != 'index' && isset($this->breadcrumbs)): ?>
                <ol class="breadcrumb">
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?>
                </ol>
            <?php endif ?>
            <?php echo $content; ?>
            <hr>
            <footer>
                <p>Copyright &copy; <?php echo date('Y'); ?> by <kbd><a href="http://sheemoul.wordpress.com" style="color: white">Shaiful Islam Palash</a></kbd>. All Rights Reserved. <kbd><?php echo Yii::powered(); ?></kbd>
                </p>
            </footer> 
        </div>
    </body>
</html>
