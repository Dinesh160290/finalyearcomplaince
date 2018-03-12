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
                </div>
            </div>
        </div>
        <div id="body-container">
            <div id="body-content">
                <div class='container'>
                    <?php echo $content; ?>
                    <!-- don't use as of now -->
                    <!--<div class="signin-row row">
                        <div class="span4"></div>
                        <div class="span8">
                            <div class="well well-small well-shadow">
                                <legend class="lead">Additional Content</legend>
                                Add additional content here.
                            </div>
                        </div>
                        <div class="span8"></div>
                    </div> -->
                </div>
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
    </body>
</html>