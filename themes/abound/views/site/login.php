<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/login-new.css');
$cs->registerScriptFile($baseUrl.'/js/login-new.js');

//$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
?>

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <!-- <form class="form-signin"> -->
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'form-signin',
                'enableAjaxValidation'=>false,
                'htmlOptions'=>array(
                    'class'=>'form-signin',
                ),
            )); ?>    
            <?php //echo CHtml::beginForm('', 'post', array('class'=>'form-signin')); ?>    
                <span id="reauth-email" class="reauth-email"></span>
                <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
                <?php echo CHtml::activeTextField($model,'username', array('id'=>'LoginForm_username', 'class'=>'form-control', 'placeholder'=>'Email address', 'tooltip' => 'Enter only <strong>numeric</strong> characters.')); ?>
                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                <?php echo CHtml::activePasswordField($model,'password', array('id'=>'LoginForm_password','class'=>'form-control', 'placeholder'=>'Password')) ?>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                <?php $this->endWidget(); ?>
            </form><!-- /form
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->