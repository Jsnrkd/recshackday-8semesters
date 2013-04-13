<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lesson Designer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/styles/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="/styles/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- include jquery at the top so that it is available to various scripts throughout -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="/">Lesson Designer</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    <a href="/settings" class="navbar-link">Settings</a> <i class="icon-cog icon-white"></i> | <a href="/help" class="navbar-link">Help</a> |  Logged in as <?php echo $values['user_full_name']; ?>
                    | <a href="/logout" class="navbar-link">Logout</a>
                </p>
            </div>

            <ul class="nav pull-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dew Learning <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dew Learning</a></li>
                        <li><a href="#">360 Impact</a></li>
                        <li><a href="#">CofC</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>