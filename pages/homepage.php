<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
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
        <form action="index.php?page=accounts&action=login" method="POST">

            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
    <h1><a href="index.php?page=accounts&action=register">Register</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>