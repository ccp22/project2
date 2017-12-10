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

<form action="index.php?page=tasks&action=create" method="post">
    Task Message: <input type="text" name="tmessage"><br>
    Start Date: <input type="datetime-local" name="sdate"><br>
    Due Date: <input type="datetime-local" name="ddate"><br>
    <input type="submit" value="Add Todo">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
