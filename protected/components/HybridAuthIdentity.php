<?php
class HybridAuthIdentity extends CUserIdentity
{
    const VERSION = '2.2.0';
 
    /**     
     * 
     * @var Hybrid_Auth
     */
    public $hybridAuth;
 
    /**
     * 
     * @var Hybrid_Provider_Adapter
     */
    public $adapter;
 
    /**
     * 
     * @var Hybrid_User_Profile
     */
    public $userProfile;
 
    public $allowedProviders = array('google', 'facebook', 'linkedin', 'yahoo', 'live',);
 
    protected $config;
 
    function __construct() 
    {
        $path = Yii::getPathOfAlias('ext.HybridAuth');
        require_once $path . '/hybridauth-' . self::VERSION . '/hybridauth/Hybrid/Auth.php';  //path to the Auth php file within HybridAuth folder
 
        $this->config = array(
            "base_url" => "https://localhost/vvfy/site/socialLogin", 
 
            "providers" => array(
                "Google" => array(
                    "enabled" => true,
                    "keys" => array(
                        "id" => "google client id", 
                        "secret" => "google secret",
                    ),
                    "scope" => "https://www.googleapis.com/auth/userinfo.profile " . "https://www.googleapis.com/auth/userinfo.email",
                    "access_type" => "online",
                ),  
                "Facebook" => array (
                   "enabled" => true,
                   "keys" => array ( 
                       "id" => "1915282112030833", 
                       "secret" => "5ef1c8d2c74790131063ad7214162c2d",
                   ),
                   "scope" => "email"
                ),
                "Live" => array (
                   "enabled" => true,
                   "keys" => array ( 
                       "id" => "windows client id", 
                       "secret" => "Windows Live secret",
                   ),
                   "scope" => "email"
                ),
                "Yahoo" => array(
                   "enabled" => true,
                   "keys" => array ( 
                       "key" => "yahoo client id", 
                       "secret" => "yahoo secret",
                   ),
                ),
                "LinkedIn" => array(
                   "enabled" => true,
                   "keys" => array ( 
                       "key" => "linkedin client id", 
                       "secret" => "linkedin secret",
                   ),
                ),
            ),
 
            "debug_mode" => false, 
 
            // to enable logging, set 'debug_mode' to true, then provide here a path of a writable file 
            "debug_file" => "",             
        );
 
        $this->hybridAuth = new Hybrid_Auth($this->config);
    }
 
    /**
     *
     * @param string $provider
     * @return bool 
     */
    public function validateProviderName($provider)
    {
        if (!is_string($provider))
            return false;
        if (!in_array($provider, $this->allowedProviders))
            return false;
 
        return true;
    }
 
}
?>