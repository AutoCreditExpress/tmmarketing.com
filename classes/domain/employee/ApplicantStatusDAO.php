<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


use OAuth2\Exception;

class ApplicantStatusDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                       Find
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function getALLStatuses(){
        $qAllStatuses = $this->db->prepare("
            SELECT * FROM applicant_status;
        ");

        try{
            $allStatusResults = $qAllStatuses->ececute();
            $allStatuses = $this->mapStatusToObjects($allStatusResults);

            return $allStatuses;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

    function getStatusFromID($statusID){
        $qStatus = $this->db->prepare("
            SELECT * FROM applicant_status WHERE as_id = ".$statusID.";
        ");

        try{
            $statusResults = $qStatus->ececute();
            $status = $this->mapStatusToObjects($statusResults);

            return $status;
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

    protected function mapStatusToObjects(PDOStatement $stmt){

        $statuses = array(); //Array that will contain many Status.
        try{
            //Checks to see if there are no Status returned.
            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }
            do{
                //Creates new user profile object for each applicant selected.
                $status = new ApplicantStatus();
                $status->setStatusID($aRow['as_id']);
                $status->setStatusName($aRow['as_name']);
                $statuses[] = $status; // applicant to main array.
            } while(($aRow = $stmt->fetch()) !== false);
        } catch(Exception $e){
            //Error in initial SQL statement.
            echo $e;
        }
        //Final results will all the applicants.
        if(count($statuses) == 1){
            return $statuses[0];
        }
        else{
            return $statuses;
        }

    }
} 