<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/customize-template.css" media="screen, projection" />

<div class="signin-row row">
    <div class="span4"></div>
    <div class="span8">
        <div class="container-signin">
            <legend>Login</legend>
            <?php $form = $this->beginWidget('CActiveForm', array('id' => 'loginForm', 'enableAjaxValidation' => true, 'htmlOptions' => array('class' => 'form-signin', 'autocomplete' => 'off', 'id' => 'loginForm'))); ?>

            <div class="form-inner">
                <div class="input-prepend">

                    <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>

                    <?php echo $form->textField($model, 'username', array('id' => 'username', 'class' => 'span4')); ?>

                </div>

                <div class="input-prepend">
                    <span class="add-on"><i class="icon-key"></i></span>
                    <?php echo $form->passwordField($model, 'password', array('id' => 'password', 'class' => 'span4')); ?>
                </div>
                
                <label class="checkbox" for='remember_me'>Remember me
                            <?php echo $form->checkBox($model,'rememberMe'); ?>
                    <input type='checkbox' id='remember_me'/>
                </label>
            </div>
            <footer class="signin-actions">
                <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary', 'id' => 'submit')); ?>
            </footer>
            <?php $this->endWidget(); ?>
        </div>
    </div>
    <div class="span3"></div>
</div>

<style type='text/css'>
    .container-signin {
        padding: 19px 29px 0 29px;
        margin: 60px 0 0 0;
        background-color: rgba(123, 156, 157, 0.1);
        border: 1px solid rgba(108, 145, 146, 0.1);
        -webkit-box-shadow: 2px 2px 4px #999999;
        -moz-box-shadow: 2px 2px 4px #999999;
        box-shadow: 2px 2px 4px #999999;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        color: #000000;
        width: 400px;
    }
</style>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-transition.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-alert.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-modal.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-dropdown.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-scrollspy.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-tab.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-tooltip.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-popover.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-button.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-collapse.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-carousel.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-typeahead.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-affix.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-tablesorter.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-chosen.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/virtual-tour.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/bootstrap/bootstrap-validatepass.js" type="text/javascript"></script>


<script type='text/javascript'>

    $(function() {
        $('#sample-table').tablesorter();
        $('#datepicker').datepicker();
        $(".chosen").chosen();
    });
</script>
