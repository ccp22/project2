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
include 'header.php';
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);
//2017-12-22 00:00:00
//dateToHTML($data->createddate);

?>

<form action="index.php?page=tasks&action=update&id=<?php echo $data->id;?>" method="post" id="form2">
    Message: <input type="text" value="<?php echo $data->message;?>" name="message"><br>
    Created Date: <input type="datetime-local" value="<?php echo dateToHTML($data->createddate);?>" name="createddate"><br>
    Due Date: <input type="datetime-local" value="<?php echo dateToHTML($data->duedate);?>" name="duedate"><br>
    Owner ID: <input type="text" value="<?php echo $data->ownerid;?>" name="ownerid" disabled><br>
    Owner Email: <input type="text" value="<?php echo $data->owneremail;?>" name="owneremail" disabled><br>
    Status: <select name="isdone">
        <?php
            if($data->isdone == 0) {
                echo '
                    <option value="1">Done</option>
                    <option value="0" selected>Pending</option>';
            }else {
                echo '
                    <option value="1" selected>Done</option>
                    <option value="0">Pending</option>';
            }
        ?>
    </select>
    <button type="submit" value="update">Save</button>
</form>
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>