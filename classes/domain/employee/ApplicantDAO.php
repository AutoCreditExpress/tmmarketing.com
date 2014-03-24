<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


namespace classes\domain\employee;


class ApplicantDAO {

    function createApplicant($postData){
        try{
            $qCreateEmployment = $this->db->prepare("
            INSERT INTO applicant (applicant_first, applicant_last, applicant_street,applicant_city, applicant_state,
            applicant_zip, applicant_phone, applicant_email, applicant_company1, applicant_position1, e_response1, applicant_company2, applicant_position2, applicant_response2, applicant_date)
             VALUES (:fname,:lname,:street,:city,:state,:zip,:phone,:email,:company1,:position1,:response1,:company2,:position2,:response2,:edate);
        ");

            $qCreateEmployment->execute(array(
                ':fname' => $postData['first'],
                ':lname' => $postData['last'],
                ':street' => $postData['street'],
                ':city' => $postData['city'],
                ':state' => $postData['state'],
                ':zip' => $postData['zip'],
                ':phone' => $postData['phone'],
                ':email' => $postData['email'],
                ':company1' => $postData['company1'],
                ':position1' => $postData['position1'],
                ':response1' => $postData['respons1'],
                ':company2' => $postData['company2'],
                ':position2' => $postData['position2'],
                ':response2' => $postData['respons2'],
                ':edate' => date('Y-m-d H:i:s')
            ));

            $to = 'tmurphy@wemarketenergy.com'.', ';
            $to .= 'cadams@wemarketenergy.com';

            mail($to,'New Application',
                'First Name: '.$postData['first'].'\r\n
                Last Name: '.$postData['last'].'\r\n
                Address: '.$postData['street'].' '.$postData['city'].', State: '.$postData['state'].' '.$postData['zip'].'\r\n
                Phone: '.$postData['phone'].'\r\n
                Email: '.$postData['email'].'\r\n
                Company 1: '.$postData['company1'].'\r\n
                Position 1: '.$postData['position1'].'\r\n
                Responsibility 1: '.$postData['response1'].'\r\n
                Company 2: '.$postData['company2'].'\r\n
                Position 2: '.$postData['position2'].'\r\n
                Responsibility 2: '.$postData['response2'].'\r\n
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
