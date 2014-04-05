<?php
/**
 * Created by PhpStorm.
 * User: bslaght123
 * Date: 3/22/2014
 * Time: 12:23 AM
 */

namespace classes\domain\employee;


class EmployeeDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
    }

    function getEmployeeDetails($employeeID){

    }

    function createEmployee(Applicant $applicantObject, array $employeeArray){

        $Applicant = $applicantObject;

        $qCreateEmployee = $this->db->prepare("
            INSERT INTO employee (employee_first,employee_last,employye_address,employee_unit,employee_city,employee_state,
            employee_zip,employee_user_id,employee_title_id,employee_pp_id,employee_start_date,employee_end_date,employee_office_id,
            employee_status) VALUES (:firstName, :lastName, :address, :unit, :city, :state :zip, :userID, :titleID, :ppID,
            :startDate, :endDate, :officeID, :status)
        ");

        try{
            $qCreateEmployee->execute(array(
                ':firstName' => $Applicant->getApplicantFirst(),
                ':lastName' => $Applicant->getApplicantLast(),
                ':address' => $Applicant->getApplicantLast(),
                ':unit' => $Applicant->getApplicantUnit(),
                ':city' => $Applicant->getApplicantCity(),
                ':state' => $Applicant->getApplicantState(),
                ':zip'  => $Applicant->getApplicantZip(),
                ':userID' => $Applicant->getApplicantID(),
                ':titleID' => $employeeArray['titleID'],
                ':ppID' => $employeeArray['ppID'],
                ':startDate' => $employeeArray['startDate'],
                ':endDate' => $employeeArray['officeID'],
                ':status' => $employeeArray['status']


            ));
        }catch(\PDOException $e){
            echo $e;
        }

    }
} 