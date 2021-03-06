<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>User Information Security Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="layout" content="main"/>

        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/customize-template.css" media="screen, projection" />

        <style>
            #body-content { padding-top: 40px;}
        </style>
    </head>
    <body>
        
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php?r=site/dashboard" class="brand"><i class="icon-leaf"></i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav">
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">USERS
                                    <b class="caret hidden-phone"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $this->createUrl('user/register'); ?>">Registration</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->createUrl('site/login'); ?>">Login Page</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <a href="<?php echo $this->createUrl('site/logout'); ?>">Logout</a>
                            </li>

                        </ul>
                    </div> 
                </div>
            </div>
        </div>  
    <div id="body-container">
        <div id="body-content">

            <div class="body-nav body-nav-horizontal body-nav-fixed">
                <div class="container">
                    <ul>
                        <li><a href="<?php echo $this->createUrl('user/register'); ?>"><i class="icon-dashboard icon-large"></i> Registration</a></li>
                        <li><a href="<?php echo $this->createUrl('user/loan'); ?>"><i class="icon-calendar icon-large"></i> Loans</a></li>
                        <li><a href="#"><i class="icon-tasks icon-large"></i> Payments</a></li>
                        <li><a href="#"><i class="icon-cogs icon-large"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-list-alt icon-large"></i> Forms</a></li>
                        <li><a href="#"><i class="icon-bar-chart icon-large"></i> Charts</a></li>
                    </ul>
                </div>
            </div>
            <?php echo $content; ?>

        </div>
    </div>


    

    <footer class="application-footer">
        <div class="container">
            <p>User Information Security Application</p>
            <div class="disclaimer">
                <p><?php echo Yii::app()->params['copyrightInfo']; ?></p>
            </div>
        </div>
    </footer>

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

</body>
</html>