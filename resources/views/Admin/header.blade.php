<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LDC Admin Panel</title>
        <link rel="icon" href="/images/logo.jpg">
        <link type="text/css" href="/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/Admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/Admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/Admin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a><a class="brand" href="/admin">Admin Panel</a>
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav nav-icons">
                    <li><a href="/"><i class="icon-eye-open"></i></a></li>
                </ul>
                <ul class="nav pull-right">
                    <li><a href="/admin/change">Change Password</a></li>
                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="/admin"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
                        <li><a href="/gallery/create"><i class="menu-icon icon-book"></i>Add Images </a></li>
                        <li><a href="/admin/gallery"><i class="menu-icon icon-tasks"></i>Gallery Images</a></li>
                        <li><a href="/admin/reorder"><i class="menu-icon icon-tasks"></i>Re-order Images</a></li>
                        <li><a href="/admin/objectives"><i class="menu-icon icon-paste"></i>View Objectives </a></li>
                        <li><a href="/admin/objective/create"><i class="menu-icon icon-paste"></i>Add Objectives</a></li>
                        <li><a href="/admin/programs"><i class="menu-icon icon-paste"></i>View Programs </a></li>
                        <li><a href="/admin/program/create"><i class="menu-icon icon-paste"></i>Add Program</a></li>
                        <li><a href="/admin/needs"><i class="menu-icon icon-paste"></i>View Needs </a></li>
                        <li><a href="/admin/need/create"><i class="menu-icon icon-paste"></i>Add Needs</a></li>
                        <li><a href="/admin/helps"><i class="menu-icon icon-paste"></i>View Helps </a></li>
                        <li><a href="/admin/help/create"><i class="menu-icon icon-paste"></i>Add Help</a></li>
                        <li><a href="/admin/testimonial"><i class="menu-icon icon-paste"></i>View Testimonials </a></li>
                        <li><a href="/admin/testimonial/create"><i class="menu-icon icon-paste"></i>Add Testimonials</a></li>
                        <li><a href="/admin/tesReorder"><i class="menu-icon icon-tasks"></i>Re-order Testimonial</a></li>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>
