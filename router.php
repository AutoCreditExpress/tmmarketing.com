<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include('inc/config.php');

$url = $_SERVER['REQUEST_URI'];

$explodedURL = explode('/',$url);

$targetFile = $explodedURL[1];

if(strstr($targetFile,'?')){
    $cleanTargetFile = explode('?',$targetFile);

    $targetFile = $cleanTargetFile[0];
}


$filePaths = array(
    //suppliers.
    'sites'                             => 'views/sites/sites.php',

    //typ
    'contact_typ'                       => 'views/contact/contact_typ.php',
    'employment_typ'                    => 'views/contact/employment_typ.php',
    'contact_us'                        => 'views/contact/contact_us.php',

    //supplier
    'supplier'                          => 'views/supplier/supplier.php',

    //marketers
    'marketing_companies'               => 'views/marketers/marketing_companies.php',

    //about
    'about_us'                          => 'views/about/about_us.php',

    //employment
    'employment'                        => 'views/employment/employment.php',
    'hire'                              => 'inc/appointments/hire.php',

    //Applicants
    'applicants'                        => 'portal/applicants.php',
    'pre_hire'                          => 'portal/applicant_pre_hire.php',
    'schedule_appointment'              => 'portal/schedule_appointment.php',
    'create_appointment'                => 'inc/appointments/create_appointment.php',
    'showed_interview'                  => 'inc/appointments/showed_interview.php'



);
//FIXME: Need to have a check to make sure pages that are not in root or listed above throw exception.
if($targetFile){
    try{
        if(! @include($filePaths[$targetFile])){
            throw new Exception ('Could not include file: '.$targetFile);
        };
    }
    catch(Exception $exception){
        echo $exception;
        //@mail('bslaght@wemarketenergy.com','Router Error','There is something major wrong with the router file :'.$exception, "from: errors@wemarketenergy.com");
        //header("HTTP/1.0 404 Not Found");
    }
}