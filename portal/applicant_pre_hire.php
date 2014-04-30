<?php

if($_POST){
    echo $_POST['showed'];
}

if($_GET['appID']){
    // set a session value
    $_SESSION['currentApplicant'] = $_GET['appID'];

}

if($_GET['type'] == 'interview'){
    if($_GET['status'] == 'success'){
        $statusMessage = "<div class=\"alert alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Perfect!</strong> The appointment has been set!
                    </div>";
    }
    elseif($_GET['status'] == 'showed'){
        $statusMessage = "<div class=\"alert alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Good News!</strong> The Applicant was marked as present successfully.
                    </div>";
    }
    elseif($_GET['status'] == 'noshow'){
        $statusMessage = "<div class=\"alert alert-warning\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Marked No Show</strong> You have successfully marked the applicant as a no show.
                    </div>";
    }
    elseif($_GET['status'] == 'noshowfailed'){
        $statusMessage = "<div class=\"alert alert-danger\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Something Happened!</strong> The applicant was not marked as a no show. Please let your manager know if this continues.
                    </div>";
    }
}

if($_GET['type'] == 'hire'){
    if($_GET['status'] == 'success'){
        $statusMessage = "<div class=\"alert alert-success\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>We're Growing!</strong> The applicant was added to our team.
                    </div>";
    }
    elseif($_GET['status'] == 'error'){
        $statusMessage = "<div class=\"alert alert-danger\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>ERROR</strong> There was an issues trying to pass on this applicant. If this continues please let your manager know.
                    </div>";
    }
    elseif($_GET['status'] == 'passedover'){
        $statusMessage = "<div class=\"alert alert-warning\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Passed Over</strong> Looks like we didn't want that one...
                    </div>";
    }
}

$applicantID = $_SESSION['currentApplicant'];

$ApplicantDAO = new ApplicantDAO($local);
$Applicant = $ApplicantDAO->getApplicant($applicantID);
$ApplicantStatusDAO = new ApplicantStatusDAO($local);
$interviewWidget = $ApplicantStatusDAO->generateApplicantInterviewWidget($applicantID);
$trainingWidget = $ApplicantStatusDAO->generateApplicantTrainingWidget($applicantID);

$ApplicantActivityDAO = new ApplicantActivityDAO($local);
$activities = $ApplicantActivityDAO->getAllActivitiesForUser(468);

$OfficeDAO = new OfficeDAO($local);
$offices = $OfficeDAO->getAllOffices();

include($docPath.'inc/template/portalHeader.php');
?>
        <!-- Content -->
        <div id="content">
        <?php include($docPath.'inc/template/portalSidebar.php'); ?>
        <!-- // END navbar -->
            <div class="innerLR">
                <h2>Applicant Management</h2>
                <?php echo $statusMessage;?>
                <!-- row- -->
                <div class="row">
                    <!-- col -->
                    <div class="col-sm-12">
                        <!-- row-app -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-9">
                                <div class="widget">
                                    <div class="media widget-body">
                                        <button class="pull-right btn btn-default btn-sm"><i class="fa fa-fw fa-edit"></i> Edit</button>
                                        <img src="../assets/images/people/250/2.jpg" class="thumb pull-left" alt="" width="100">
                                        <div class="media-body innerLR">
                                            <h4 class="media-heading text-large text-primary"><?php echo $Applicant->getApplicantFirst().' '.$Applicant->getApplicantLast(); ?></h4>
                                            <p><?= $Applicant->getApplicantStreet().' '.$Applicant->getApplicantUnit(); ?>
                                                <br/><?= $Applicant->getApplicantCity().', '.$Applicant->getApplicantState().' '.$Applicant->getApplicantZip(); ?>
                                                <br/>Phone:
                                                <strong><?= $Applicant->getApplicantPhone();?></strong>
                                                <br/>Email:
                                                <strong><?= $Applicant->getApplicantEmail();?></strong>
                                            </p>
                                        </div>
                                    </div>
                                    <h4 class="bg-primary innerAll half border-bottom margin-none text-white"><?= $Applicant->getApplicantStatus()->getStatusName().' - '.$Applicant->getApplicantStatus()->getStatusDate(); ?></h4>
                                </div>
                                <div class="widget">

                                    <div class="widget">
                                        <div class="row row-merge">
                                            <?= $interviewWidget; ?>
                                            <?= $trainingWidget; ?>
                                            <div class="col-sm-4 bg-gray-hover">
                                                <div class="innerAll text-center">
                                                    <i class="icon-time-clock fa fa-5x innerTB  text-faded"></i>
                                                    <div class="clearfix"></div>
                                                    <a class="lead innerTB strong text-inverse text-faded">Create Schedule</a>
                                                    <p class="text-faded">We have to control the cacaos - set the new rep up on a schedule.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-merge margin-none">
                                        <div class="col-md-6">
                                            <div class="innerAll text-center">
                                                <div class="media innerAll">
                                                    <div class="pull-left">
                                                        Blood presure
                                                        <div class="strong">110/90 mmHh</div>
                                                    </div>
                                                    <div class="media-body innerAll">
                                                        <div class="progress progress-small margin-none">
                                                            <div class="progress-bar progress-bar-primary" style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="innerAll text-center">
                                                <div class="media innerAll">
                                                    <div class="pull-left">
                                                        Exercise
                                                        <div class="strong">2 hours, 30 mins</div>
                                                    </div>
                                                    <div class="media-body innerAll">
                                                        <div class="progress progress-small margin-none">
                                                            <div class="progress-bar progress-bar-primary" style="width: 35%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="widget-head">
                                        <h4 class="heading pull-left">Applicant History</h4>
                                        <i class="fa fa-fw fa-clock-o pull-right text-muted innerT half"></i> 
                                    </div>
                                    <div class="widget-body padding-none">
                                        <ul class="timeline-activity list-unstyled">

                                            <?php $cnt = 1;foreach($activities as $activity):?>
                                            <li>
                                                <i class="list-icon fa fa-scissors"></i>
                                                <div class="block">
                                                    <div class="caret"></div>
                                                    <div class="box-generic <?php if($cnt == 1):?>bg-primary-light<?php endif;?>">
                                                        <div class="timeline-top-info border-bottom">
                                                            <a href="" class="text-regular"><?php echo $activity->getActivityStatusName();?></a>
                                                        </div>
                                                        <div class="innerAll half inline-block">
                                                            <i class="fa fa-clock-o text-primary"></i> <?php echo date("g:iA", strtotime($activity->getActivityDate()) ) ;?>
                                                            &nbsp;
                                                            <i class="fa fa-calendar text-primary"></i> <?php echo date("F d, Y", strtotime($activity->getActivityDate()) ) ;?>
                                                        </div>
                                                    </div>
                                                    <div class="separator bottom"></div>
                                                </div>
                                            </li>
                                            <?php $cnt++; endforeach; ?>
                                            <li>
                                                <i class="list-icon fa fa-stethoscope"></i>
                                                <div class="block">
                                                    <div class="caret"></div>
                                                    <div class="box-generic">
                                                        <div class="timeline-top-info border-bottom">
                                                            <a href="" class="text-regular">Consultation</a> with
                                                            <i class="fa fa-stethoscope"></i> 
                                                            <a
                                                            href="">Dr. Dignissimos</a>
                                                        </div>
                                                        <div class="innerAll half inline-block">
                                                            <i class="fa fa-clock-o"></i> 10:00
                                                            &nbsp;
                                                            <i class="fa fa-calendar"></i> 2
                                                            October 2013
                                                        </div>
                                                    </div>
                                                    <div class="separator bottom"></div>
                                                </div>
                                                <div class="block block-inline">
                                                    <div class="box-generic">
                                                        <div class="innerT innerR">
                                                            <button class="btn btn-primary btn-xs pull-right"><i class="fa fa-download"></i>
                                                            </button>
                                                            <div class="media inline-block margin-none">
                                                                <div class="innerLR">
                                                                    <i class="fa fa-stethoscope pull-left text-primary fa-2x"></i>
                                                                    <div class="media-body">
                                                                        <div><a href=""
                                                                            class="strong text-regular">Lab Test Results</a>
                                                                        </div>
                                                                        <span>1 MB</span>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block block-inline">
                                                    <div class="box-generic">
                                                        <div class="innerT innerR">
                                                            <button class="btn btn-primary btn-xs pull-right"><i class="fa fa-eye"></i>
                                                            </button>
                                                            <div class="media inline-block margin-none">
                                                                <div class="innerLR">
                                                                    <i class="fa fa-file-text-o pull-left text-primary fa-2x"></i>
                                                                    <div class="media-body">
                                                                        <div><a href=""
                                                                            class="strong text-regular">Notes</a>
                                                                        </div>
                                                                        <span>24 KB</span>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- // END col -->
                            <!-- col -->
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-head	">
                                        <h4 class="heading pull-left">Patients</h4>
                                        <div class=" pull-right">
                                            <button class="btn btn-xs btn-default  "><i class="fa fa-plus"></i> Add patient
                                                <i class="fa fa-user fa-fw"></i>
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="innerAll">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Name
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Name</a>
                                                    </li>
                                                    <li><a href="#">Phone Number</a>
                                                    </li>
                                                    <li><a href="#">Group</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Find a patient ...">
                                        </div>
                                    </div>
                                    <div class="widget-body padding-none">
                                        <ul class="list-group list-group-1 borders-none margin-none">
                                            <li class="list-group-item active">
                                                <div class="media innerAll">
                                                    <button class="pull-right btn btn-primary btn-stroke btn-xs"><i class="fa fa-arrow-right"></i>
                                                    </button>
                                                    <img src="../assets/images/people/80/2.jpg" alt="" width="35" class="pull-left thumb">
                                                    <div class="media-body">
                                                        <h5 class="media-heading strong">Adrian Demian</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 0353
                                                                8473102009
                                                            </li>
                                                            <li><i class="fa fa-map-marker"></i> 129
                                                                Longford Terrace,
                                                                Co. Dublin</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media innerAll">
                                                    <button class="pull-right btn btn-primary btn-stroke btn-xs"><i class="fa fa-arrow-right"></i>
                                                    </button>
                                                    <img src="../assets/images/people/80/3.jpg" alt="" width="35" class="pull-left thumb">
                                                    <div class="media-body">
                                                        <h5 class="media-heading strong">Adrian Demian</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 0353
                                                                8473102009
                                                            </li>
                                                            <li><i class="fa fa-map-marker"></i> 129
                                                                Longford Terrace,
                                                                Co. Dublin</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media innerAll">
                                                    <button class="pull-right btn btn-primary btn-stroke btn-xs"><i class="fa fa-arrow-right"></i>
                                                    </button>
                                                    <img src="../assets/images/people/80/4.jpg" alt="" width="35" class="pull-left thumb">
                                                    <div class="media-body">
                                                        <h5 class="media-heading strong">Adrian Demian</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 0353
                                                                8473102009
                                                            </li>
                                                            <li><i class="fa fa-map-marker"></i> 129
                                                                Longford Terrace,
                                                                Co. Dublin</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media innerAll">
                                                    <button class="pull-right btn btn-primary btn-stroke btn-xs"><i class="fa fa-arrow-right"></i>
                                                    </button>
                                                    <img src="../assets/images/people/80/5.jpg" alt="" width="35" class="pull-left thumb">
                                                    <div class="media-body">
                                                        <h5 class="media-heading strong">Adrian Demian</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 0353
                                                                8473102009
                                                            </li>
                                                            <li><i class="fa fa-map-marker"></i> 129
                                                                Longford Terrace,
                                                                Co. Dublin</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media innerAll">
                                                    <button class="pull-right btn btn-primary btn-stroke btn-xs"><i class="fa fa-arrow-right"></i>
                                                    </button>
                                                    <img src="../assets/images/people/80/6.jpg" alt="" width="35" class="pull-left thumb">
                                                    <div class="media-body">
                                                        <h5 class="media-heading strong">Adrian Demian</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 0353
                                                                8473102009
                                                            </li>
                                                            <li><i class="fa fa-map-marker"></i> 129
                                                                Longford Terrace,
                                                                Co. Dublin</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- // End Widget-body-->
                                </div>
                                <!-- // END widget -->
                            </div>
                            <!-- // END col -->
                        </div>
                        <!-- // END row -->
                    </div>
                    <!-- // END col-->
                </div>
                <!-- // END row -->
            </div>
            <!-- // END inner -->
        </div>
        <!-- // Content END -->
        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
<?php
include($docPath.'inc/template/portalFooter.php');

?>