<?php
/**
 * Created by PhpStorm.
 * User: kavykun
 * Date: 3/19/15
 * Time: 12:05 AM
 */
?>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand colorwhite" href="#" data-toggle="modal" data-target="#basicModal">UNCWPCEC</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/index.php?page=main">Home<span style="font-size:16px;"
                                                         class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
            </li>
            <!--
            <li><a href="/index.php?page=profile">Profile<span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
            </li>
            <li><a href="/index.php?page=profile">PC Part List<span style="font-size:16px;"
                                                                    class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a>
            </li>
        </ul>
        <div class="navbar-header">
            <p class="navbar-brand" style="color:#ffffff">NAVIGATION</p>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/index.php?page=members">Members<span style="font-size:16px;"
                                                               class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
            </li>
            -->
            <li><a href="/index.php?page=calender">Calender<span style="font-size:16px;"
                                                                 class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAN<span class="caret"></span><span
                        style="font-size:16px;"
                        class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                <ul class="dropdown-menu forAnimate" role="menu">
                    <li><a href="/index.php?page=registration">Registration</a></li>
                    <li><a href="/index.php?page=form">Forms</a></li>
                    <li><a href="/index.php?page=information">Information</a></li>
                    <li><a href="/index.php?page=information">Location</a></li>
                    <li class="divider"></li>
                    <!-- In progress
                    <li><a href="/index.php?page=2015springlan.php">2015 Spring LAN</a></li>
                    <li><a href="/index.php?page=2014springlan.php">2014 Spring LAN</a></li>
                    <li><a href="/index.php?page=2014falllan.php">2014 Fall LAN</a></li>
                    -->
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Modals -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body" style="padding-bottom: 340px;">
                <div id="loginbox"
                     class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot
                            password?</a></div>
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" action="/index.php?page=userregistration">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value=""
                                       placeholder="username or email">
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password"
                                       placeholder="password">
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <input type="submit" name="submit" value="Log In" class="btn btn-info btn-block">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="padding-top:15px; font-size:85%">
                                        Don't have an account!
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Register Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>x
                    </div>
                </div>
                <div id="signupbox" style="display:none;"
                     class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink"
                                                                                                   href="#"
                                                                                                   onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign
                                In</a></div>
                    </div>
                    <div class="panel-body">
                        <form id="signupform" class="form-horizontal" role="form" action="/index.php?page=userregistration">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>

                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">First Name</label>

                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="firstname"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Last Name</label>

                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password&nbsp;</label>

                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="passwd"
                                           placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" name="submit" value="Sign Up" class="btn btn-info btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>