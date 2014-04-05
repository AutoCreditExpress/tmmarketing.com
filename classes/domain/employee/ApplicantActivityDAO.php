<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 4/5/14
 * Time: 1:05 PM
 */

namespace classes\domain\employee;


class ApplicantActivityDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function getAllActivities(){
        $qAllActivities = $this->db->prepare("
            SELECT * FROM applicant_activity;
        ");

        try{
            $qAllActivityResults = $qAllActivities->execute();
            $allActivities = $this->mapNoteToObjects($qAllActivityResults);

            return $allActivities;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

    function getActivityFromID($activityID){
        $qActivity = $this->db->prepare("
            SELECT * FROM applicant_activity WHERE ac_id =;
        ");

        try{
            $qActivityResult = $qActivity->execute();
            $activity = $this->mapNoteToObjects($qActivityResult);

            return $activity;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Create
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function createActivity($statusID,$employeeID){

        $qCreateActivity = $this->db->prepare("
            INSERT INTO applicant_activity (aa_as_id, aa_date, aa_create_employee_id) VALUES (:statusID, :createDate, :employeeID)
        ");

        try{
            $createActivity = $qCreateActivity->execute(array(
                ':statusID' => $statusID,
                ':createDate' => date('Y-m-d H:i:s'),
                ':employeeID' => $employeeID
            ));

            return true;
        }
        catch(\PDOException $e){
            echo $e;
            return false;
        }
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Update
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Delete
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Mapping
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    protected function mapNoteToObjects(PDOStatement $stmt){

        $activities = array(); //Array that will contain many Status.
        try{
            //Checks to see if there are no Status returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $activity = new ApplicantActivity();
                $activity->setActivityID($aRow['aa_id']);
                $activity->setActivityStatusID($aRow['aa_as_id']);
                $activity->setActivityDate($aRow['aa_date']);
                $activity->setActivityCreateUser($aRow['aa_create_employee_id']);
                $activities[] = $activity; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        if(count($activities) == 1){
            return $activities[0];
        }
        else{
            return $activities;
        }

    }
} 