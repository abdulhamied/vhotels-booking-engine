<!--
* INSPINIA - Responsive Admin Theme
* Version 2.4
*
-->

<!DOCTYPE html>
<html ng-app="vEngine">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title set in pageTitle directive -->
    <title page-title></title>

    <!-- Bootstrap -->
<!--    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">

   

     Main Inspinia CSS files 
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/select.css" rel="stylesheet">
    <link href="css/ng-toast/ngToast.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link id="loadBefore" href="css/style.css" rel="stylesheet">
    <link id="loadBefore" href="css/app.css" rel="stylesheet">
    <link id="loadBefore" href="css/file-upload.css" rel="stylesheet">-->
    
<link href="/app/all.css" rel="stylesheet" >
     <!-- Font awesome -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/fontello/fontello.css">

    
<!--
//cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/css/ngDialog.min.css
//cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/css/ngDialog-theme-default.min.css
//cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/css/ngDialog-theme-plain.min.css
//cdnjs.cloudflare.com/ajax/libs/ng-dialog/0.4.0/js/ngDialog.min.js

-->
<link href="/css/ng-dialog/ngDialog.min.css" rel="stylesheet">
<link href="/css/ng-dialog/ngDialog-theme-default.min.css" rel="stylesheet">
<link href="/css/ng-dialog/ngDialog-theme-plain.min.css" rel="stylesheet">

</head>

<!-- ControllerAs syntax -->
<!-- Main controller with serveral data used in Inspinia theme on diferent view -->
<body  landing-scrollspy id="page-top">


<!-- Main view  -->
<div ui-view></div>

<toast></toast>
<!-- jQuery and Bootstrap -->
<script src="js/jquery/jquery-2.1.1.min.js"></script>
<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- MetsiMenu -->
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SlimScroll -->
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


<!-- Custom and plugin javascript -->
<!--<script src="js/inspinia.js"></script>-->

<!-- Main Angular scripts-->
<!--<script src="js/angular/angular.min.js"></script>
<script src="js/angular/angular-sanitize.js"></script>
<script src="js/plugins/oclazyload/dist/ocLazyLoad.min.js"></script>
<script src="js/angular-translate/angular-translate.min.js"></script>
<script src="js/ui-router/angular-ui-router.min.js"></script>
<script src="js/bootstrap/ui-bootstrap-tpls-0.12.0.min.js"></script>
<script src="js/plugins/angular-idle/angular-idle.js"></script>-->

<!--
 You need to include this script on any page that has a Google Map.
 When using Google Maps on your own site you MUST signup for your own API key at:
 https://developers.google.com/maps/documentation/javascript/tutorial#api_key
 After your sign up replace the key in the URL below..
-->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>-->

<!-- Anglar App Script -->
<!--<script src="js/app.js"></script>
<script src="js/config.js"></script>
<script src="js/translations.js"></script>
<script src="js/directives.js"></script>
<script src="js/controllers.js"></script>-->

        <script src="/assets/bundle.js"></script>
        <script src="/assets/templates.js"></script>

<!-- Peace JS -->
<script src="js/plugins/pace/pace.min.js"></script>

</body>
</html>