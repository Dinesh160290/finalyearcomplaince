<?php

class CustomUrlRule extends CBaseUrlRule
{

    private $skey;

    public function __construct()
    {
        if (empty(Yii::app()->session['enc_key' . Yii::app()->params["gbl_session_key"]]))
        {
            Yii::app()->session['enc_key' . Yii::app()->params["gbl_session_key"]] = $this->getDynamicKey(8) . $this->getDynamicKey(8); // URL KEY CHANGES FOR VERSION UPGRADE
        }
        $this->skey = Yii::app()->session['enc_key' . Yii::app()->params["gbl_session_key"]];
    }

    /**
     * Creates a URL based on this rule.
     * @param CUrlManager $manager the manager
     * @param string $route the route
     * @param array $params list of parameters
     * @param string $ampersand the token separating name-value pairs in the URL.
     * @return mixed the constructed URL or false on error
     */
    public function createUrl($manager, $route, $params, $ampersand)
    {
        $url = '';
        if (!empty($params))
        {
            foreach ($params as $key => $value)
            {
                if (is_array($value))
                {
                    continue;
                }
                $url = $url . '/' . $key . '/' . $value;
            }
        }
        $route = $route . $url;

        $route = $this->myencode($route);
        return $route;
    }

    /**
     * Parses a URL based on this rule.
     * @param CUrlManager $manager the URL manager
     * @param CHttpRequest $request the request object
     * @param string $pathInfo path info part of the URL
     * @param string $rawPathInfo path info that contains the potential URL suffix
     * @return mixed the route that consists of the controller ID and action ID or false on error
     */
    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo)
    {
        $pathInfo = $this->mydecode($pathInfo);
        return $pathInfo;
    }

    protected static function safe_b64encode($string)
    {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);
        return $data;
    }

    protected static function safe_b64decode($string)
    {
        $data = str_replace(array('-', '_'), array('+', '/'), $string);
        $mod4 = strlen($data) % 4;
        if ($mod4)
        {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    protected function myencode($value)
    {
        if (!$value)
        {
            return false;
        }
        $text      = $value;
        $iv_size   = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv        = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->skey, $text, MCRYPT_MODE_ECB, $iv);
        return trim(CustomUrlRule::safe_b64encode($crypttext));
    }

    public function mydecode($value)
    {
        if (!$value)
        {
            return false;
        }
        $crypttext   = CustomUrlRule::safe_b64decode($value);
        $iv_size     = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv          = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->skey, $crypttext, MCRYPT_MODE_ECB, $iv);
        return trim($decrypttext);
    }

    protected function getClientNumber($digits)
    {
        $min = pow(10, $digits - 1);
        $max = pow(10, $digits) - 1;
        return mt_rand($min, $max);
    }

    protected function getDynamicKey($digits)
    {
        $min = pow(10, $digits - 1);
        $max = pow(10, $digits) - 1;

        return mt_rand($min, $max);
    }

}

?>