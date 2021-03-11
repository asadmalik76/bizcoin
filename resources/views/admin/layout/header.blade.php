<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="user-id" content="{{ Auth::check() ? Auth::user()->id : ''}}"></meta>
<title>Bizcoin Dashboard</title>
<link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
	
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/tether.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">

<link rel="stylesheet" href="{{asset('build/css/intlTelInput.css')}}">
<!-- 

<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/themes/semi-dark-layout.css')}}">

<link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>


<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<!-- Country Code select -->


<!-- 
end country code -->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/dashboard-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/card-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/tour/tour.css')}}">

 <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/wizard.css')}}">
 <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/plugins/forms/validation/form-validation.css') }}">

    <link rel="stylesheet" type="text/css" href="{{('/app-assets/vendors/css/forms/select/select2.min.css')}}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
<!-- END: Custom CSS-->

</head>
<!-- END: Head-->
