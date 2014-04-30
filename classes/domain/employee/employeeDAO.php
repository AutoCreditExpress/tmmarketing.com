<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 3/22/2014
 * Time: 12:23 AM
 */

class EmployeeDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

    function getEmployeeDetails($employeeID){

        $qGetEmployeeDetails = "
            select * from employee
            where employee_id = ".$employeeID.";
        ";

        try{
            $employeeDetails = $this->executePDO($qGetEmployeeDetails);
            return $employeeDetails;
        }catch(Exception $e){
            return false;
        }

    }

    function getManagersByOfficeID($officeID){
        $qGetManagersForOffice = "
            SELECT * FROM employee WHERE employee_office_id = ".$officeID." AND employee_role in (1,2);
        ";

        try{
            $managers = $this->executePDO($qGetManagersForOffice);
            return $managers;
        }catch(Exception $e){
            return false;
        }
    }

    function createEmployee(Applicant $applicantObject){

        $Applicant = $applicantObject;

        $qCreateEmployee = $this->db->prepare("
            INSERT INTO employee (employee_first,employee_last,employee_address,employee_unit,employee_city,employee_state,
            employee_zip,employee_applicant_id,employee_start_date,employee_office_id)
            VALUES (:firstName, :lastName, :address, :unit, :city, :state, :zip, :applicantID, :startDate,:officeID)
        ");

        try{
            $qCreateEmployee->execute(array(
                ':firstName' => $Applicant->getApplicantFirst(),
                ':lastName' => $Applicant->getApplicantLast(),
                ':address' => $Applicant->getApplicantStreet(),
                ':unit' => $Applicant->getApplicantUnit(),
                ':city' => $Applicant->getApplicantCity(),
                ':state' => $Applicant->getApplicantState(),
                ':zip'  => $Applicant->getApplicantZip(),
                ':applicantID' => $Applicant->getApplicantID(),
                ':startDate' => date('Y-m-d H:i:s'),
                ':officeID' => $Applicant->getApplicantOfficeID()
            ));

            return $this->db->lastInsertId();

        }catch(PDOException $e){
            echo $e;
            return FALSE;
        }

    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Mapping
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function executePDO($sql){

    try{
        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        $results = $this->mapEmployeeToObjects($stmt);
        return $results;
    }catch(Exception $e){
        return false;
    }
}

function mapEmployeeToObjects(PDOStatement $stmt){
    $employees = array(); //Array that will contain many appointments.
    try{
        //Checks to see if there are no appointments returned.
        if( ($aRow = $stmt->fetch()) === false) {
            return array();
        }
        do{
            //Creates new user profile object for each applicant selected.
            $employee = new Employee();
            $employee->setEmployeeID($aRow['employee_id']);
            $employee->setFirstName($aRow['employee_first']);
            $employee->setLastName($aRow['employee_last']);
            $employee->setAddress($aRow['employee_address']);
            $employee->setUnit($aRow['employee_unit']);
            $employee->setCity($aRow['employee_city']);
            $employee->setState($aRow['employee_state']);
            $employee->setZip($aRow['employee_zip']);
            $employee->setUserID($aRow['employee_user_id']);
            $employee->setTitleID($aRow['employee_title_id']);
            $TitleDAO = new TitleDAO($this->db);
            if($aRow['employee_title_id']){
                $employee->setTitle($TitleDAO->getTitleFromID($aRow['employee_title_id']));
            }
            $employees[] = $employee; // applicant to main array.
        } while(($aRow = $stmt->fetch()) !== false);
    } catch(Exception $e){
        //Error in initial SQL statement.
        echo $e;
    }

    //Final results will all the applicants.
    if(count($employees) == 1){
        return $employees[0];
    }
    else{
        return $employees;
    }
}

} 