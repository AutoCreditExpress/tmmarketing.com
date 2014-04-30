<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ApplicantDAO = new ApplicantDAO($local);
$Applicant = $ApplicantDAO->getApplicant($_SESSION['currentApplicant']);
$EmployeeDAO = new EmployeeDAO($local);
$ApplicantActivityDAO = new ApplicantActivityDAO($local);

if($_GET['hire'] == 1){
    $createEmployee = $EmployeeDAO->createEmployee($Applicant);

    if($createEmployee){
        $createActivity = $ApplicantActivityDAO->createActivity(13,$_SESSION['currentApplicant'],2);

        header('Location: '.$webPath.'pre_hire?appID='.$_SESSION['currentApplicant'].'&type=hire&status=success');
    }
    else{
        header('Location: '.$webPath.'pre_hire?appID='.$_SESSION['currentApplicant'].'&type=hire&status=error');
    }

}
elseif($_GET['hire'] == 2){
    $createActivity = $ApplicantActivityDAO->createActivity(18,$_SESSION['currentApplicant'],2);

    if($createActivity){
        header('Location: '.$webPath.'pre_hire?appID='.$_SESSION['currentApplicant'].'&type=hire&status=passedover');
    }
    else{
            header('Location: '.$webPath.'pre_hire?appID='.$_SESSION['currentApplicant'].'&type=hire&status=passedoverfailed');
        }
}
else{
    header('Location: '.$webPath);
}