<!DOCTYPE html>
<html lang="en">
<head>
    <% base_tag %>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="layout" content="main"/>

    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="{$ThemeDir}/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="{$ThemeDir}/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="dashboard.html" class="brand"><i class="icon-leaf">$SiteConfig.Title</i></a>

                <ul class="nav pull-right">
                    <li>
                        <a href="/Security/logout?BackURL=%2FSecurity%2Flogin">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>