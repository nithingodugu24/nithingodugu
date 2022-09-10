<?php
$pin = $_REQUEST['pin'];
$url = "https://exams.sbtet.telangana.gov.in/API/api/PreExamination/getAttendanceReport?Pin=$pin";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$resp2 = substr($resp, 1, -1);

$resp2 = str_replace("\\", "", $resp2);



$mains = json_decode($resp2, true);


$name = $mains['Table'][0]['Name'];

if($pin==''){
    echo "pin number enter cheyyaledhu ra";
}else{
?>


<html><head><style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style><style type="text/css">.uib-time input{width:50px;}</style><style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style><style type="text/css">.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}.uib-left,.uib-right{width:100%}</style><style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll;}</style><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<meta http-equiv="Access-Control-Allow-Origin" content="*">-->
    <link rel="shortcut icon" type="image/x-icon" href="./big-logo.ico">
    <title>Sbtet Attendance -Developed by Nithin Godugu</title>

    <!-- Bootstrap CSS -->
    <link href="https://exams.sbtet.telangana.gov.in//contents/css/bootstrap.min.css" rel="stylesheet">

    <!--Syncfusion Theames-->
    <!--<link href="contents/css/syncfusion/themes/gradient-azure/ej.web.all.min.css" rel="stylesheet" />-->
    <!-- font CSS -->
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Application-->
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/style.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/responsive.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/googleapis1.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/googleapis2.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/plugins/datatables/datatables.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/style.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/mystyle.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/style_for_forms.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/dashboard/applicationdashboard.css" rel="stylesheet">
    <link href="https://exams.sbtet.telangana.gov.in/contents/css/main.css" rel="stylesheet">
    <!--<link href="/contents/css/twshStyles.css" rel="stylesheet" />-->


    <!--<link href="contents/css/toaster.min.css" rel="stylesheet" />-->

    <!-- <script src="scripts/alasql@0.4.js"></script>
    <script src="scripts/xlsx.core.min.js"></script> -->
    <!-- <script src="scripts/jspdf.min.js"></script>


    <script src="scripts/jspdf.plugin.autotable.js"></script> -->
    <!-- <script src="scripts/pdfmake.min.js"></script> -->
    <!-- <script src="scripts/html2canvas.min.js"></script> -->
   <!-- <script src="scripts/tinymce.min.js"></script>-->

    <script src="https://exams.sbtet.telangana.gov.in/scripts/cryptojs/components/core-min.js "></script>
    <script src="https://exams.sbtet.telangana.gov.in/scripts/cryptojs/rollups/aes.js"></script>
    <script src="https://exams.sbtet.telangana.gov.in/scripts/cryptojs/components/cipher-core-min.js"></script>
    <script src="https://exams.sbtet.telangana.gov.in/scripts/cryptojs/components/enc-base64-min.js"></script>
    <script src="https://exams.sbtet.telangana.gov.in/scripts/cryptojs/rollups/pbkdf2.js"></script>
    <script src="https://exams.sbtet.telangana.gov.in/scripts/cryptojs/components/enc-utf16-min.js"></script>
    <script src="https://exams.sbtet.telangana.gov.in//splitimage.js"></script>
    <!-- Load custom scripts via RequireJS -->
    <script src="https://exams.sbtet.telangana.gov.in/scripts/require.js" data-main="app/main"></script>
    <style>
        .modal-content {
            flex-direction: column;
            display: flex;
            position: relative;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            outline: 0;
        }
    </style>
<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main" src="app/main.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="app" src="app/app.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="moment/moment" src="/scripts//moment.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="spin" src="/scripts/spinner/spin.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="authInterceptorService" src="/app/services/authInterceptorService.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="AppSettings" src="/app/services/AppSettings.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="DataAccessService" src="/app/services/DataAccessService.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jQuery" src="/scripts/jquery-2.1.4.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angular" src="/scripts/angular.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="AdmissionRoutes" src="app/AdmissionRoutes.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="services/routeResolver" src="app/services/routeResolver.js"></script><style type="text/css"></style><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrap" src="/scripts/bootstrap.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angularroute" src="/scripts/angular-route.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angularuiroute" src="/scripts/angular-ui-router.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="uibootstraptpls" src="/scripts/ui-bootstrap-tpls.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angularspinner" src="/scripts/spinner/angular-spinner.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angularloadingspinner" src="/scripts/spinner/angular-loading-spinner.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="underscorejs" src="/scripts/underscorejs.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="angularUtils.directives.dirPagination" src="/scripts/dirPagination.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="localstorage" src="/scripts/ngStorage.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="datetimepicker" src="/scripts/datetime-picker.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="controllers/DashBoardController" src="app/controllers/DashBoardController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="services/AdminService" src="app/services/AdminService.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="controllers/Diploma/StudentMobileAppAttendanceController" src="app/controllers/Diploma/StudentMobileAppAttendanceController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="services/AcademicService" src="app/services/AcademicService.js"></script></head>

<body style="background-color:#fff !important;">

    <div>
        <!-- uiView: --><ui-view class="ng-scope"> <style class="ng-scope">
    .sm-spacer {
        height: 50px;
    }

    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        padding: 6px 6px;
        line-height: 1.42857143;
        vertical-align: middle;
        border: 1px solid #ddd !important;
        font-size: 13px;
    }

    .modal-fit-att .modal-content {
        height: max-content !important;
        overflow: unset !important;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    #currenttime {
        display: none;
    }

    .modal-xlg {
        width: 1200px;
    }
.table-responsive{
    width:145%;
}
    @media print {
        /* #printableArea {
            width: 80%;
        } */
        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 6px 6px;
    line-height: 1.42857143;
    vertical-align: middle;
    border: 1px solid #0c0c0c !important;
    font-size: 13px;
}
        .alert {
         display: none;
        }
        .resultsHeader {
            display: none;
        }
        #currenttime {
            display: block !important;
        }
        /* .table.table-bordered {
            border: 1px solid #000 !important;
        } */
       
        .logo-name h2 {
            text-align: left;
            margin-left: 130px;
            margin-top: -20px;
            font-size: 25px !important;
            line-height: 36px;
        }
        #submit {
            display: none;
        }
        .backA{
            display: none;
        }

        /* #printableAreas {
            width: 80%;
        } */
         .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
             float: left;
         }

         .col-md-12 {
             width: 100%;           
         }

          .col-md-2 {
             width: 16.666666666666664%;          
         }
           .col-md-3 {
             width: 25%;            
         }
        /*.content {
            display: none;
        }*/
        tr.cb-1 th {
            color: #000 !important;
        }

        #printData {
            display: block;
        }
        .table-responsive{
           width:100%!important; 
        }
    }
    .logo-img img {
    float: left;
    margin-right: 0;
    cursor: pointer;
    position: absolute;
    height: 5em;
}
</style>

<script type="text/javascript" class="ng-scope">
    setInterval(function () {
        var date = new Date();
        var format = "DD-MMM-YYYY DDD";
        dateConvert(date, format)
    }, 1);

    function dateConvert(dateobj, format) {
        var year = dateobj.getFullYear();
        var month = ("0" + (dateobj.getMonth() + 1)).slice(-2);
        var date = ("0" + dateobj.getDate()).slice(-2);
        var hours = ("0" + dateobj.getHours()).slice(-2);
        var minutes = ("0" + dateobj.getMinutes()).slice(-2);
        var seconds = ("0" + dateobj.getSeconds()).slice(-2);
        var day = dateobj.getDay();
        var months = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        var converted_date = "";

        switch (format) {
            case "DD-MMM-YYYY DDD":
                converted_date = date + "-" + month + "-" + year + " " + hours + ":" + minutes + ":" + seconds;;
                break;
            case "YYYY-MM-DD":
                converted_date = year + "-" + month + "-" + date;
                break;
            case "YYYY-MMM-DD DDD":
                converted_date = year + "-" + months[parseInt(month) - 1] + "-" + date
                    + " " + hours + ":" + minutes + ":" + seconds;
                break;
        }
        //return converted_date;
        // to show it I used innerHTMl in a <p> tag
        if (document.getElementById("currenttime") != null) {
            document.getElementById("currenttime").innerHTML = "" + converted_date + "  GMT+0530 (India Standard Time)";
        }
    }
</script>
<div ng-controller="StudentMobileAppAttendanceController" id="studentAttendance1" class="ng-scope">
    <section class="">
        <div class="">
                                <!--<div class="text-center">
                <img class="gif_css" src="../../../contents/img/under_construction.gif">
            </div>-->
           

         
            <!--<div class="col-md-12 pull-right" ng-show="result">
                <button class="btn btn-success pull-right" ng-click="OpenAttendance()">{{buttontext}}</button>
            </div>-->
            <div id="printableArea">
                
                <div class="col-md-12 col-sm-12" ng-show="ResultFound" style="min-width: fit-content;">                      
                 
                            <div class="row" style="width: 145%;">
                                <div class="col-lg-2 col-md-12 col-sm-3">
                                    <div class="logo-img">
                                        <img src="https://exams.sbtet.telangana.gov.in/contents/img/big-logo.png">
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-12 col-sm-9">
                                    <div class="logo-name">
                                        <h3 >
                                            STATE BOARD OF TECHNICAL EDUCATION AND TRAINING TELANGANA
                                        </h3>
                                        <!--<h2><p style="text-align: center">STATE BOARD OF TECHNICAL EDUCATION AND TRAINING <br /><p style="text-align: center">TELANGANA</p></h2>-->
                                    </div>
                                </div>
                            </div>
                       
                        <div class="col-sm-12">

                            <div class="card-title">
                                <h2><bold>Student Attendance  Summary</bold></h2>
                            </div>
                        </div>


                        <div class="table-responsive  ">
                                           
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>PIN</th>
                                            <th>Name</th>
                                            <th>AttendeeId</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <style>
                                            td{
                                                font-weight: bold;
                                            } 
                                        </style>
                                        <tr>
                                            <td class="ng-binding"><?php echo $pin; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['Name'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['AttendeeId'];; ?></td>
                                          
                                        </tr>
    
                                    </tbody>
                                </table>
                           
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>College Code</th>
                                            <th>Branch Code</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['CollegeCode'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['BranchCode'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['Semester'];; ?></td>
                                        </tr>
    
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Working Days</th>
                                            <th>Number Of Days Present</th>
                                            <th>Attendance Percentage(%)</th>
                                            <th>Attendance Calculated :</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['WorkingDays'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['NumberOfDaysPresent'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['Percentage'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['UpdatedDate'];; ?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Total working days considered for exams</th>
                                            <th>Actual working days present</th>
                                            <th>Attendance % to be considered for Examination</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                  <td class="ng-binding"><?php echo $mains['Table'][0]['WorkingDays'];; ?></td>
                                                 <td class="ng-binding"><?php echo $mains['Table'][0]['NumberOfDaysPresent'];; ?></td>
                                            <td class="ng-binding"><?php echo $mains['Table'][0]['Percentage'];; ?></td>
                                        </tr>
    
                                    </tbody>
                                </table>
                          
                    </div>
                </div>
                

                <div ng-show="ResultFound" class="">               

                    
                    
                            
                
                <div class="col-md-12">
                        <table class="table table-bordered  table-striped table-rounded">
                            <thead>
                                <tr class="cb-1">
                                    <th style="width: 4%">Sc no</th>
                                    <th style="width: 5%">Month</th>
                                    <!-- ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">01</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">02</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">03</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">04</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">05</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">06</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">07</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">08</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">09</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">10</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">11</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">12</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">13</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">14</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">15</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">16</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">17</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">18</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">19</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">20</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">21</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">22</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">23</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">24</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">25</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">26</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">27</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">28</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">29</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">30</b></th><!-- end ngRepeat: day in days --><th style="width: 1%" ng-repeat="day in days" class="ng-scope"><b class="ng-binding">31</b></th><!-- end ngRepeat: day in days -->
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $s1 = '{"Table1":[{"M":"January"},{"M":"February"},{"M":"March"},{"M":"April"},{"M":"May"},{"M":"June"},{"M":"July"},{"M":"August"},{"M":"September"},{"M":"October"},{"M":"November"},{"M":"December"}]}';
$s2 = '{"Table2":[{"d":"1"},{"d":"2"},{"d":"3"},{"d":"4"},{"d":"5"},{"d":"6"},{"d":"7"},{"d":"8"},{"d":"9"},{"d":"10"},{"d":"11"},{"d":"12"},{"d":"13"},{"d":"14"},{"d":"15"},{"d":"16"},{"d":"17"},{"d":"19"},{"d":"19"},{"d":"20"},{"d":"21"},{"d":"22"},{"d":"23"},{"d":"24"},{"d":"25"},{"d":"26"},{"d":"27"},{"d":"28"},{"d":"29"},{"d":"30"},{"d":"31"}]}';

$s1d = json_decode($s1,true);
$s2d = json_decode($s2,true);


$monthsl = 0;


foreach ($s1d['Table1'] as $s1s){
   $monthsl = $monthsl+1; 
    
    echo ' <!-- ngRepeat: x in attendancedata --><tr ng-repeat="x in attendancedata" class="ng-scope">
                                    <td class="ng-binding">'.$monthsl.'</td>
                                    <td class="ng-binding">'.$s1s['M'].'</td>
                                
                            ';
                            
                            foreach ($s2d['Table2'] as $s2s){
                                
                                 
                                
                                echo '<td style="width: 1%" ng-repeat="y in x.attstat" class="ng-binding ng-scope" id="'.$s1s['M'].$s2s['d'].'">-</td>';
                            }
   
    
}





foreach ($mains['Table1'] as $attds){
    
    $elid = $attds['AttendanceMonth'].$attds['Day'];
    
   echo '<script> document.getElementById("'.$elid.'").innerHTML = "'.$attds['Status'].'"; </script>';



    
}
?>
                            </tbody>
                        </table>
                    </div>

                    
                    
                    <div class="col-md-12">
                        <div style="color:green" class="col-md-2">
                            <h4><a href="https://instagram.com/nadits.in">Developed by Nithin Godugu</a></h4>
                        </div>
                       
                    </div>

                    <!--track by stringify(y) track by stringify(x) ng-init="getattendance()"-->

                    <div class="col-md-12 hidden">
                        <b class="text-danger"> Notes : Attendance is Considered  From 19-06-2019</b>
                    </div>
<!-- 
                    <div class="col-md-12">
                        <button type="submit" id ="submit" ng-click="printDetails('printableArea')" style="margin-bottom:50px;" class="btn printBtn btn-detail pull-right">
                            Print
                        </button>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div ng-show="ResultNotFound" class="no-results ng-hide">
                        <img src="../../contents/img/Folder-Icon.svg">
                        <h2>Attendance Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm-spacer"></div>
    </section>
</div>
</ui-view>
    </div>


<iframe frameborder="0" scrolling="no" style="background-color: transparent; border: 0px; display: none;"></iframe><div id="GOOGLE_INPUT_CHEXT_FLAG" style="display: none;" input="" input_stat="{&quot;tlang&quot;:true,&quot;tsbc&quot;:true,&quot;pun&quot;:true,&quot;mk&quot;:true,&quot;ss&quot;:true}"></div></body></html>


<?php
}?>
