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



    }
} 