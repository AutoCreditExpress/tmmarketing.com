<?php
if($_GET['appID']){
    $_SESSION['currentApplicant'] = $_GET['appID'];
}

$rescheduleInterview = false;
$rescheduleTraining = false;
$training = false;
$interview = false;
$interviewText = 'Interviewer';
if($_GET['type'] == 'interview' && $_GET['status'] == 'reschedule'){
    $rescheduleInterview = true;
    $interviewText = 'Interviewer';
}
elseif($_GET['interview']){
    $interview = true;
    $interviewText = 'Interviewer';
}

$rescheduleTraining = false;
if($_GET['type'] == 'training' && $_GET['status'] == 'reschedule'){
    $rescheduleTraining = true;
    $interviewText = 'Trainer';
}
elseif($_GET['type'] == 'training'){
    $training = true;
    $interviewText = 'Trainer';
}

$applicantID = $_SESSION['currentApplicant'];
$EmployeeDAO = new EmployeeDAO($local);

if($applicantID != ''){

    $ApplicantDAO       = new ApplicantDAO($local);
    $Applicant          = $ApplicantDAO->getApplicant($applicantID);

    $applicantName      = $Applicant->getApplicantFirst().' '.$Applicant->getApplicantLast();
    $officeID           = $Applicant->getApplicantOfficeID();

    $managers           = $EmployeeDAO->getManagersByOfficeID($Applicant->getApplicantOfficeID());


    $ApplicantStatusDAO = new ApplicantStatusDAO($local);

    $interviewWidget    = $ApplicantStatusDAO->generateApplicantInterviewWidget($applicantID);
    $trainingWidget     = $ApplicantStatusDAO->generateApplicantTrainingWidget($applicantID);


    $OfficeDAO = new OfficeDAO($local);
    $allOffices = $OfficeDAO->getAllOffices();
}

$OfficeDAO = new OfficeDAO($local);
$offices = $OfficeDAO->getAllOffices();

include($docPath.'inc/template/portalHeader.php');
?>
        <!-- Content -->
        <div id="content">
        <?php include($docPath.'inc/template/portalSidebar.php'); ?>
        <!-- // END navbar -->
            <div class="layout-app">
                <div class="row row-app">
                    <div class="col-md-12">
                        <div class="col-separator col-separator-first box">
                            <div class="innerAll border-bottom">
                                <div class="pull-left">
                                    <!-- <a href="email.html?lang=en" class=" btn btn-default btn-sm"><i class="fa fa-fw fa-arrow-left"></i> back</a> -->
                                </div>
                                <a onclick="document.appointment.submit()" class="pull-right btn btn-success btn-sm strong"><i class="fa fa-fw icon-outbox-fill"></i> Schedule</a>
                                <div class="clearfix"></div>
                            </div>
                            <form class="form-horizontal innerR" role="form" id="validateInterviewForm" name="appointment" action="<?php echo $webPath;?>create_appointment/" method="post">
                            <div class="bg-gray innerAll">

                                    <div class="form-group">
                                        <label for="to" class="col-sm-2 control-label">Applicant:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group col-sm-5">
                                                <input type="text" disabled class="form-control" id="to" Value="<?= $applicantName; ?>">
                                                <input type="hidden" name="appID" value="<?= $applicantID;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Office:</label>
                                        <div class="col-sm-3">
                                            <select class="selectpicker" name="office" id="office">
                                                <option >Select an Office</option>
                                                <?php foreach($allOffices as $office): ?>
                                                <option <?php if($officeID == $office->getOfficeID()):?>selected="selected"<?php endif;?> value="<?= $office->getOfficeID();?>"><?= $office->getOfficeName(); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo $interviewText; ?>:</label>
                                        <div class="col-sm-3">
                                            <select class="selectpicker" name="interviewer" id="interviewer">
                                                <option value="">Select Manager</option>
                                                <?php foreach($managers as $manager):?>
                                                    <option value="<?= $manager->getEmployeeID();?>"><?= $manager->getFirstName().' '.$manager->getLastName();?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Date:</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="date" value="<?php echo date('Y-m-d');?>" id="datepicker1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Time:</label>
                                        <div class="bootstrap-timepicker col-sm-3">
                                            <div class="bootstrap-timepicker-widget dropdown-menu">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="#" data-action="incrementHour"><i class="fa fa-chevron-up"></i></a></td>
                                                        <td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="fa fa-chevron-up"></i></a></td>
                                                        <td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="fa fa-chevron-up"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="bootstrap-timepicker-hour">12</span></td>
                                                        <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">15</span></td>
                                                        <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">PM</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#" data-action="decrementHour"><i class="fa fa-chevron-down"></i></a></td>
                                                        <td class="separator"></td>
                                                        <td><a href="#" data-action="decrementMinute"><i class="fa fa-chevron-down"></i></a></td>
                                                        <td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="fa fa-chevron-down"></i></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <input id="timepicker3" name="time" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                            </div>
                            <hr class="margin-none" />
                            <div class="innerAll inner-2x">
                                <textarea class="notebook border-none form-control padding-none" rows="8" name="note" placeholder="Write your notes.."></textarea>
                                <div class="clearfix"></div>
                                <?php if($rescheduleInterview):?><input type="hidden" name="statusID" value="8"><?php endif;?>
                                <?php if($interview):?><input type="hidden" name="statusID" value="5"><?php endif;?>
                                <?php if($rescheduleTraining):?><input type="hidden" name="statusID" value="22"><?php endif;?>
                                <?php if($training):?><input type="hidden" name="statusID" value="12"><?php endif;?>
                            </div>
                            </form>
                            <div class="col-separator-h"></div>
                            <div class="innerAll text-center">
                                <a href="<?php echo $webPath;?>pre_hire/" class="btn btn-default"><i class="fa fa-fw icon-crossing"></i> Cancel</a>
                                <a onclick="document.appointment.submit()" class="btn btn-success"><i class="fa fa-fw icon-outbox-fill"></i> Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include($docPath.'inc/template/portalFooter.php');

?>