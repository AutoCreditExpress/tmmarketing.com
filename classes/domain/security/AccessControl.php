<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class AccessControl {

    protected $db = '';
    public $allowedSites = array();

    //Needs DB connection to work.
    function __construct(PDO $pdo, Logger $logger)
    {
        $this->db = $pdo;
        $logger = $logger;
    }

    public static function userLogin (PDO $pdo, $userName, $password){

        //Get all the user Information.
        $UserProfileDAO = new UserProfileDAO($pdo);
        $userProfileArray = $UserProfileDAO->getUserByID($userName);
        $userProfile = $userProfileArray;

        //Validate Username
        if($userProfile->id == ''){
            return 'invalid username';
        }

        $password = new PwCrypt($password, false);

        if( $userProfile->getPassword()->equals($password) ) {
            $createUserSession = Session::setUserSession($userProfile);
            return 'valid';
        } else {
            return 'invalid password';
        }

    }

}