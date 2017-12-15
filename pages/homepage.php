<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tracklist | Login</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <?php
        include 'meta.php';
    ?>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php
include "header.php";
?>


    <?php

    //this how to print some data;
//    echo $data['site_name'];

    ?>
<!---
<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>
--->
    <div class="container">
        <div class="row" id="login-form-row1">
        </div>
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5 center-content-block" id="login-block">
                <h1 id="login-title">Login</h1>
                <form class="form-horizontal" action="index.php?page=accounts&action=login" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-default" id="login-button">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row"></div>
    </div>


<script src="js/scripts.js"></script>
</body>
</html>