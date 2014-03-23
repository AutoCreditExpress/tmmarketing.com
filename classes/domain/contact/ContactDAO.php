<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                     Contact find, create, update, delete
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class ContactDAO {

    protected $db = '';

    function __construct(PDO $pdo){
        $this->db = $pdo;
        echo 'in this';
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              Create Contact
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function createGeneralContact($contactPost){

        $qCreateContact = $this->db->prepare("
            INSERT INTO basic_contact (bc_first, bc_last, bc_email, bc_phone, bc_message)
            VALUES (:firstName, :lastName, :email, :phone, :message )
        ");

        try{
            $qCreateContact->execute(array(
                ':firstName'    => $contactPost['first'],
                ':lastName'     => $contactPost['last'],
                ':email'        => $contactPost['email'],
                ':phone'        => $contactPost['phone'],
                ':message'      => $contactPost['message']
            ));

            return true;
        }catch(PDOException $pdoException){
            @mail('brian@quanwebs.com','wemarketenergy error', 'There is a problem trying to create a contact entry'. $pdoException);
            return false;
        }

    }

    public function createEmploymentApp($employmentPost){

        try{
            $qCreateEmployment = $this->db->prepare("
            INSERT INTO employment (e_first, e_last, e_street,e_city, e_state, e_zip, e_phone, e_email, e_company1, e_position1, e_respons1, e_company2, e_position2, e_respons2, e_date)
             VALUES (:fname,:lname,:street,:city,:state,:zip,:phone,:email,:company1,:position1,:respons1,:company2,:position2,:respons2,:edate);
        ");

            $qCreateEmployment->execute(array(
                ':fname' => $employmentPost['first'],
                ':lname' => $employmentPost['last'],
                ':street' => $employmentPost['street'],
                ':city' => $employmentPost['city'],
                ':state' => $employmentPost['state'],
                ':zip' => $employmentPost['zip'],
                ':phone' => $employmentPost['phone'],
                ':email' => $employmentPost['email'],
                ':company1' => $employmentPost['company1'],
                ':position1' => $employmentPost['position1'],
                ':respons1' => $employmentPost['respons1'],
                ':company2' => $employmentPost['company2'],
                ':position2' => $employmentPost['position2'],
                ':respons2' => $employmentPost['respons2'],
                ':edate' => date('Y-m-d H:i:s')
            ));

            $to = 'tmurphy@wemarketenergy.com'.', ';
            $to .= 'cadams@wemarketenergy.com';

            mail($to,'New Application',
                'First Name: '.$employmentPost['first'].'\r\n
                Last Name: '.$employmentPost['last'].'\r\n
                Address: '.$employmentPost['street'].' '.$employmentPost['city'].', State: '.$employmentPost['state'].' '.$employmentPost['zip'].'\r\n
                Phone: '.$employmentPost['phone'].'\r\n
                Email: '.$employmentPost['email'].'\r\n
                Company 1: '.$employmentPost['company1'].'\r\n
                Position 1: '.$employmentPost['position1'].'\r\n
                Responsibility 1: '.$employmentPost['respons1'].'\r\n
                Company 2: '.$employmentPost['company2'].'\r\n
                Position 2: '.$employmentPost['position2'].'\r\n
                Responsibility 2: '.$employmentPost['respons2'].'\r\n
                Application Date: '.date('Y-m-d H:i:s').'\r\n'
            ,
                'FROM: employment@wemarketenergy.com');

            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }

    }

} 