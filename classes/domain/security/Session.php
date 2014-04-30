<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Session extends AccessControl {

    protected $db = '';

    public function __construct(PDO $pdo){
        session_start();
        $this-> db = $pdo;
    }

    /**
     * Sets the basic user information in the session when the user logs in.
     *
     * @param UserProfile $userProfile
     * @return bool
     */
    public static function setUserSession(UserProfile $userProfile){

        try{
            $_SESSION['s_first']	= $userProfile->firstname;
            $_SESSION['s_last']	 = $userProfile->lastname;
            $_SESSION['s_id']	 = $userProfile->id; //TODO: find all s_mid and replace with this
            $_SESSION['s_aid'] = $userProfile->adminID;
            $_SESSION['last_login'] = $userProfile->lastLogin;
            $_SESSION['email']      = $userProfile->email;
            //TODO: replace all a_atype
            //TODO: replace all s_sid
            //TODO: replace session view
            return true;
        }
        catch(Exception $exception){

            //log('error','Could not created user session values - message: {$exception}');
            return false;
        }

    }

    /**
     * Gets the sites that the user is allowed to have access to.
     *
     * Will store the site objects in an array in the session that can be used anywhere on the site.
     *
     * @param $userName
     * @param $adminID
     * @return array
     */
    public function setUserSites($userName,$adminID){
        $userSites = $this->setSiteAccessForUser($userName,$adminID);
        $_SESSION['s_user_sites'] = $userSites[0];
        return $userSites[0];
    }

    public function setUserGroups($userName,$adminID){

        //Gets the groups for the user.
        $userGroupDAO = new UserGroupDAO($this->db,$adminID);
        $groups = $userGroupDAO->getGroupsAssignedToUser($userName);

        $_SESSION['s_user_groups'] = $groups;
        return $groups;
    }

    public static function setLastSite($site){
        $_SESSION['last_site'] = $site;
    }

    public static function clearLastSite(){
        unset($_SESSION['last_site']);
    }

}