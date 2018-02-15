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