<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 sidebar sidebar-discover"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 sidebar sidebar-discover"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 sidebar sidebar-discover"> <![endif]-->
<!--[if gt IE 8]> <html class="ie sidebar sidebar-discover"> <![endif]-->
<!--[if !IE]><!-->
<html class="sidebar sidebar-discover">
<!-- <![endif]-->
<head>
    <title>BUSINESS Template (v1.0.3-rc2)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <!--
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.sidebar_type.discover.less" />
	-->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $webPath;?>portal/assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $webPath; ?>portal/assets/css/admin/module.admin.stylesheet-complete.sidebar_type.discover.min.css"
        />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo $webPath; ?>portal/assets/components/plugins/ajaxify/script.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"></script>
    <script>
        var App = {};
    </script>
    <script data-id="App.Scripts">
        App.Scripts = {
            /* CORE scripts always load first; */
            core: [
                '<?php echo $webPath;?>portal/assets/components/library/jquery/jquery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/library/modernizr/modernizr.js?v=v1.0.3-rc2&sv=v0.0.1.1'
            ],
            /* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; */
            plugins_dependency: [
                '<?php echo $webPath;?>portal/assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/lib/js/jquery.dataTables.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/editors/wysihtml5/assets/lib/js/wysihtml5-0.3.0_rc2.min.js?v=v1.0.3-rc2&sv=v0.0.1.1'
            ],
            /* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
            plugins: [
                '<?php echo $webPath;?>portal/assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/plugins/preload/pace/pace.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-switch/assets/lib/js/bootstrap-switch.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/lib/extras/TableTools/media/js/TableTools.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/lib/extras/ColVis/media/js/ColVis.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/custom/js/DT_bootstrap.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/modules/admin/modals/assets/js/bootbox.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/validator/assets/lib/jquery-validation/dist/jquery.validate.min.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/modules/admin/notifications/gritter/assets/lib/js/jquery.gritter.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/editors/wysihtml5/assets/lib/js/bootstrap-wysihtml5-0.0.2.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/wizards/assets/lib/jquery.bootstrap.wizard.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/jasny-fileupload/assets/js/bootstrap-fileupload.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/select2/assets/lib/js/select2.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/multiselect/assets/lib/js/jquery.multi-select.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/inputmask/assets/lib/jquery.inputmask.bundle.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-timepicker/assets/lib/js/bootstrap-timepicker.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/colorpicker-farbtastic/assets/js/farbtastic.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/lib/extras/FixedHeader/FixedHeader.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/lib/extras/ColReorder/media/js/ColReorder.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/plugins/less-js/less.min.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.0.3-rc2&sv=v0.0.1.1'

            ],
            /* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
            bundle: [
                '<?php echo $webPath;?>portal/assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/core/js/animations.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-switch/assets/custom/js/bootstrap-switch.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/tables/datatables/assets/custom/js/datatables.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/modules/admin/modals/assets/js/modals.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/modules/admin/notifications/gritter/assets/custom/js/gritter.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/editors/wysihtml5/assets/custom/wysihtml5.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/wizards/assets/custom/js/form-wizards.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/forms/validator/assets/custom/form-validator.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/fuelux-radio/fuelux-radio.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/common/tables/classic/assets/js/tables-classic.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/multiselect/assets/custom/js/multiselect.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/inputmask/assets/custom/inputmask.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/bootstrap-timepicker/assets/custom/js/bootstrap-timepicker.init.js?v=v1.0.3-rc2&sv=v0.0.1.1',
                '<?php echo $webPath;?>portal/assets/components/common/forms/elements/colorpicker-farbtastic/assets/js/colorpicker-farbtastic.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/core/js/sidebar.main.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/core/js/sidebar.discover.init.js?v=v1.0.3-rc2',
                '<?php echo $webPath;?>portal/assets/components/core/js/core.init.js?v=v1.0.3-rc2'
            ]
        };
    </script>
    <script>
        $script(App.Scripts.core, 'core');
        $script.ready(['core'], function()
        {
            $script(App.Scripts.plugins_dependency, 'plugins_dependency');
        });
        $script.ready(['core', 'plugins_dependency'], function()
        {
            $script(App.Scripts.plugins, 'plugins');
        });
        $script.ready(['core', 'plugins_dependency', 'plugins'], function()
        {
            $script(App.Scripts.bundle, 'bundle');
        });
    </script>
    <script>
        if ( /*@cc_on!@*/ false && document.documentMode === 10)
        {
            document.documentElement.className += ' ie ie10';
        }
    </script>
</head>
<body class="scripts-async">
<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden">
<!-- Sidebar Menu -->
<div id="menu" class="hidden-print hidden-xs ">
<div id="sidebar-discover-wrapper">
<ul class="list-unstyled">
<li>
    <a href="#sidebar-discover-social" class="glyphicons home " data-toggle="sidebar-discover">
        <span class="badge pull-right badge-primary hidden-md">7</span><i></i>
        <span>Overview</span>
    </a>
    <div id="sidebar-discover-social" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Overview</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="index.html?lang=en">Analytics</a>
            </li>
            <li><a href="dashboard_users.html?lang=en">Users</a>
            </li>
            <li><a href="medical_overview.html?lang=en">Medical</a>
            </li>
            <li><a href="finances.html?lang=en">Financial</a>
            </li>
            <li><a href="courses_2.html?lang=en">Learning</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-media" class="glyphicons picture" data-toggle="sidebar-discover">
        <span class="badge pull-right badge-primary hidden-md">2</span><i></i>
        <span>Media</span>
    </a>
    <div id="sidebar-discover-media" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Media</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="gallery_video.html?lang=en"><i class="fa fa-video-camera"></i> Video Gallery</a>
            </li>
            <li><a href="gallery.html?lang=en"><i class="fa fa-camera"></i> Photo Gallery</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-email" class="glyphicons envelope" data-toggle="sidebar-discover"><i></i><span>Email</span></a>
    <div id="sidebar-discover-email" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Email</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="email.html?lang=en"><i class="fa fa-envelope"></i> Inbox</a>
            </li>
            <li><a href="email_compose.html?lang=en"><i class="fa fa-pencil"></i> Compose</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-courses" class="glyphicons crown" data-toggle="sidebar-discover"><i></i><span>Learning</span></a>
    <div id="sidebar-discover-courses" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Learning</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="courses_2.html?lang=en"><i class="fa fa-circle-o"></i> Courses Home</a>
            </li>
            <li><a href="courses_listing.html?lang=en"><i class="fa fa-circle-o"></i> Courses Listing</a>
            </li>
            <li><a href="course.html?lang=en"><i class="fa fa-circle-o"></i> Course Page</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-support" data-toggle="sidebar-discover" class="glyphicons life_preserver"><i></i><span>Support</span></a>
    <div id="sidebar-discover-support" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Support</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li>
                <a href="support_tickets.html?lang=en">
                    <span class="badge pull-right badge-inverse">45</span><i class="fa fa-ticket"></i>
                    <span>Tickets</span>
                </a>
            </li>
            <li>
                <a href="support_forum_overview.html?lang=en"><i class="fa fa-folder-o"></i>
                    <span>Overview page</span>
                </a>
            </li>
            <li><a href="support_forum_post.html?lang=en"><i class="fa fa-folder-o"></i><span>Post page</span></a>
            </li>
            <li><a href="support_kb.html?lang=en"><i class="fa fa-file-text-o"></i><span>Knowledge Base</span></a>
            </li>
            <li>
                <a href="support_questions.html?lang=en">
                    <span class="badge pull-right badge-inverse">7</span><i class="fa fa-question"></i>
                    <span>Questions</span>
                </a>
            </li>
            <li><a href="support_answers.html?lang=en"><i class="fa fa-info"></i><span>Answers</span></a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-medical" data-toggle="sidebar-discover" class="glyphicons circle_plus"><i></i><span>Medical</span></a>
    <div id="sidebar-discover-medical" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Medical App</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li class="">
                <a href="medical_overview.html?lang=en"><i class="fa fa-medkit"></i> Overview</a>
            </li>
            <li class="">
                <a href="medical_patients.html?lang=en">
                    <span class="badge pull-right badge-primary hidden-md">2</span><i class="fa fa-user-md"></i> Patients</a>
            </li>
            <li class="">
                <a href="medical_appointments.html?lang=en"><i class="fa fa-stethoscope"></i> Appointments</a>
            </li>
            <li class="">
                <a href="medical_memos.html?lang=en"><i class="fa fa-file-text-o"></i> Memos</a>
            </li>
            <li class="border-bottom-none">
                <a href="medical_metrics.html?lang=en"><i class="fa fa-bar-chart-o"></i> Metrics</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-maps" class="glyphicons google_maps" data-toggle="sidebar-discover"><i></i><span>Maps</span></a>
    <div id="sidebar-discover-maps" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Maps</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="maps_google.html?lang=en"><i class="fa fa-map-marker"></i> Google Maps</a>
            </li>
            <li><a href="maps_vector.html?lang=en"><i class="fa fa-map-marker"></i> Vector Maps</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-content" data-toggle="sidebar-discover" class="glyphicons notes_2"><i></i><span>Content</span></a>
    <div id="sidebar-discover-content" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Content</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="news.html?lang=en"><i class="fa fa-file-text-o"></i> News</a>
            </li>
            <li><a href="faq.html?lang=en"><i class="fa fa-question-circle"></i> FAQ</a>
            </li>
            <li><a href="search.html?lang=en"><i class="fa fa-search"></i> Search</a>
            </li>
        </ul>
    </div>
</li>
<li class="active">
    <a href="#sidebar-discover-financial" data-toggle="sidebar-discover" class="glyphicons calculator"><i></i><span>Financial</span></a>
    <div id="sidebar-discover-financial" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Financial</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="invoice.html?lang=en"><i class="fa fa-file-text-o"></i> Invoice</a>
            </li>
            <li><a href="finances.html?lang=en"><i class="fa fa-legal"></i> Finances</a>
            </li>
            <li class="active"><a href="applicants.php?lang=en"><i class="fa fa-ticket"></i> Bookings</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-shop" data-toggle="sidebar-discover" class="glyphicons shopping_cart"><i></i><span>eCommerce</span></a>
    <div id="sidebar-discover-shop" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>eCommerce</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="shop_products.html?lang=en"><i class="fa fa-list"></i><span>Products</span></a>
            </li>
            <li><a href="shop_edit_product.html?lang=en"><i class="fa fa-edit"></i><span>Edit product</span></a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-manage" class="glyphicons wrench" data-toggle="sidebar-discover"><i></i><span>Manage</span></a>
    <div id="sidebar-discover-manage" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Management</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="employees.html?lang=en"><i class="fa fa-user"></i> Employees</a>
            </li>
        </ul>
    </div>
</li>
<li><a href="surveys_multiple.html?lang=en" class="glyphicons turtle"><i></i><span>Surveys</span></a>
</li>
<li><a href="events.html?lang=en" class="glyphicons google_maps"><i></i><span>Events</span></a>
</li>
<li>
    <a href="#sidebar-discover-elements" data-toggle="sidebar-discover" class="glyphicons adjust_alt"><i></i><span>Elements</span></a>
    <div id="sidebar-discover-elements" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Components</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li class=""><a href="ui.html?lang=en"><i class="fa fa-circle-o"></i><span>UI Elements</span></a>
            </li>
            <li class=""><a href="icons.html?lang=en"><i class="fa fa-circle-o"></i><span>Icons</span></a>
            </li>
            <li class=""><a href="typography.html?lang=en"><i class="fa fa-circle-o"></i><span>Typography</span></a>
            </li>
            <li class=""><a href="calendar.html?lang=en"><i class="fa fa-circle-o"></i><span>Calendar</span></a>
            </li>
            <li class=""><a href="tabs.html?lang=en"><i class="fa fa-circle-o"></i><span>Tabs</span></a>
            </li>
            <li class="hasSubmenu">
                <a href="#menu_tables" data-toggle="collapse">
                    <span class="badge badge-primary pull-right">3</span><i class="fa fa-circle-o"></i>
                    <span>Tables</span>
                </a>
                <ul class="collapse animated fadeIn" id="menu_tables">
                    <li class=""><a href="tables.html?lang=en">Tables</a>
                    </li>
                    <li class=""><a href="tables_responsive.html?lang=en">Responsive</a>
                    </li>
                    <li class=""><a href="pricing_tables.html?lang=en">Pricing Tables</a>
                    </li>
                </ul>
            </li>
            <li class="hasSubmenu">
                <a href="#menu_forms" data-toggle="collapse">
                    <span class="badge badge-primary pull-right">4</span><i class="fa fa-circle-o"></i>
                    <span>Forms</span>
                </a>
                <ul class="collapse" id="menu_forms">
                    <li class=""><a href="form_wizards.html?lang=en">Form Wizards</a>
                    </li>
                    <li class=""><a href="form_elements.html?lang=en">Form Elements</a>
                    </li>
                    <li class=""><a href="form_validator.html?lang=en">Form Validator</a>
                    </li>
                    <li class=""><a href="file_managers.html?lang=en">File Managers</a>
                    </li>
                </ul>
            </li>
            <li class=""><a href="sliders.html?lang=en"><i class="fa fa-circle-o"></i><span>Sliders</span></a>
            </li>
            <li class=""><a href="charts.html?lang=en"><i class="fa fa-circle-o"></i><span>Charts</span></a>
            </li>
            <li class=""><a href="grid.html?lang=en"><i class="fa fa-circle-o"></i><span>Grid</span></a>
            </li>
            <li class=""><a href="notifications.html?lang=en"><i class="fa fa-circle-o"></i><span>Notifications</span></a>
            </li>
            <li class=""><a href="modals.html?lang=en"><i class="fa fa-circle-o"></i><span>Modals</span></a>
            </li>
            <li class=""><a href="thumbnails.html?lang=en"><i class="fa fa-circle-o"></i><span>Thumbnails</span></a>
            </li>
            <li class=""><a href="carousels.html?lang=en"><i class="fa fa-circle-o"></i><span>Carousels</span></a>
            </li>
            <li class=""><a href="image_crop.html?lang=en"><i class="fa fa-circle-o"></i><span>Image Crop</span></a>
            </li>
            <li class=""><a href="twitter.html?lang=en"><i class="fa fa-circle-o"></i><span>Twitter API</span></a>
            </li>
            <li class=""><a href="infinite_scroll.html?lang=en"><i class="fa fa-circle-o"></i><span>Infinite Scroll</span></a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="#sidebar-discover-account" data-toggle="sidebar-discover" class="glyphicons user"><i></i><span>Account</span></a>
    <div id="sidebar-discover-account" class="sidebar-discover-menu">
        <div class="innerAll text-center border-bottom text-muted-dark">
            <strong>Account</strong>
            <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
            </button>
        </div>
        <ul class="animated fadeIn">
            <li><a href="profile_resume.html?lang=en"><i class="fa fa-user"></i> Profile / CV</a>
            </li>
            <li><a href="my_account.html?lang=en"><i class="fa fa-user"></i> My Account</a>
            </li>
            <li>
                <a href="login.html?lang=en" class="no-ajaxify"><i class="fa fa-lock"></i> Login</a>
            </li>
            <li>
                <a href="signup.html?lang=en" class="no-ajaxify"><i class="fa fa-pencil"></i> Signup</a>
            </li>
        </ul>
    </div>
</li>
<li><a href="error.html?lang=en" class="glyphicons warning_sign"><i></i><span>Error</span></a>
</li>
</ul>
</div>
</div>
<!-- // Sidebar Menu END -->