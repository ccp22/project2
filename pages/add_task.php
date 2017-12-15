<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Add Task</title>

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

<div class="container">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 center-content-block" id="addtask-div">
        <div class="row">
            <h1 id="register-title">Create New Task</h1>
        </div>
        <form class="form-horizontal" action="index.php?page=tasks&action=create" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="tmessage">Title:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmessage" placeholder="Enter task title" name="tmessage" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="sdate">Start Date:</label>
                <div class="col-sm-8">
                    <input type="datetime-local" class="form-control" id="sdate" name="sdate" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="ddate">Due Date:</label>
                <div class="col-sm-8">
                    <input type="datetime-local" class="form-control" id="ddate" name="ddate" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default" id="register-submit-btn">Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-2"></div>
    </div>
</div>




<script src="js/scripts.js"></script>
</body>
</html>
