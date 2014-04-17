<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

    function getLatestAppointmentStatusForUser($userID){
        $qAllStatuses = $this->db->prepare("
            SELECT as_name, as_id, DATE_FORMAT(aa_date, '%b %e, %Y') AS aa_date FROM applicant_status
            INNER JOIN applicant_status_group ON as_sg_id = asg_id AND asg_name = 'Appointment'
            INNER JOIN applicant_activity ON aa_as_id = as_id AND aa_applicant_id = '".$userID."';
        ");

        try{
            $qAllStatuses->execute();
            $allStatuses = $this->mapStatusToObjects($qAllStatuses);

            return $allStatuses;
        }
        catch(Exception $e){
            echo $e;
            return false;
        }
    }

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

    function getALLStatusesFromGroup($groupID){
        $qAllStatuses = $this->db->prepare("
            SELECT * FROM applicant_status WHERE as_asg_id = ".$groupID.";
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
                $status->setStatusGroup($aRow['as_asg_id']);
                $status->setStatusCreateUser($aRow['as_create_employee_id']);
                $status->setStatusDate($aRow['aa_date']);
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