<?php

class UserController extends Controller
{

    public $layout = 'global';

    public function actionRegister()
    {
        $this->render('registration');
    }

    public function actionLoan()
    {
        $this->render('loan');
    }
    
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error)
        {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}
