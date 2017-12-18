<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tracklist | ToDo</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <?php
        include 'meta.php';
    ?>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var flag = true;
        function switchToEdit() {
            if(flag) {
                document.getElementById('task-display-block').style.display = "none";
                document.getElementById('edit-block').style.display = "block";
                document.getElementById('editButton').innerHTML = "<span class=\"glyphicon glyphicon-remove\"></span> Cancel";
            }else {
                document.getElementById('edit-block').style.display = "none";
                document.getElementById('task-display-block').style.display = "block";
                document.getElementById('editButton').innerHTML = "<span class=\"glyphicon glyphicon-edit\"></span> Edit";
            }
            flag = !flag;
        }
        function validateMe() {
            var msg = document.getElementById('message').value;
            if(msg.length < 2) {
                window.alert('ToDo title must be more than 1 character.');
                return false;
            }
            return true;
        }
    </script>

</head>

<body>
<?php
include 'header.php';
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);
//2017-12-22 00:00:00
//dateToHTML($data->createddate);

?>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 center-content-block" id="task-block-div">
            <div class="account-header-row">
                <h1 id="user-name-title"><?php echo ucfirst($data->message);?><span class="edit-btn"><button onclick="switchToEdit()" class="btn btn-danger edit-btn" id="editButton"><span class="glyphicon glyphicon-edit"></span> Edit</button></span></h1>
            </div>
            <div id="edit-block" style="display: none">
                <div class="user-details-content-block">
                    <form class="form-horizontal" action="index.php?page=tasks&action=update&id=<?php echo $data->id;?>" method="POST" onsubmit="return validateMe();">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="message">Title:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="message" value="<?php echo ucfirst($data->message);?>" name="message" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="createddate">Start Date:</label>
                            <div class="col-sm-8">
                                <input type="datetime-local" class="form-control" id="createddate" value="<?php echo dateToHTML($data->createddate);?>" name="createddate" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="duedate">Due Date:</label>
                            <div class="col-sm-8">
                                <input type="datetime-local" class="form-control" id="duedate" value="<?php echo dateToHTML($data->duedate);?>" name="duedate" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="ownerid">Owner ID:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ownerid" value="<?php echo $data->ownerid;?>" name="ownerid" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="owneremail">Owner Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="owneremail" name="owneremail" value="<?php echo $data->owneremail;?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="isdone">Status:</label>
                            <div class="col-sm-8">
                                <select name="isdone" class="form-control">
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
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button type="submit" class="btn btn-default" id="register-submit-btn">Update</button>
                            </div>
                        </div>
                    </form>
                    <div id="task-delete" class="delete-btn">
                        <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?>" method="post" id="form1">
                            <button class="btn btn-danger" type="submit" form="form1" value="delete">Delete Task</button>
                        </form>
                    </div>
                </div>
            </div>

            <!--      Display block for Task      -->

            <div id="task-display-block">
                <div class="user-details-content-block">
                    <form class="form-horizontal" method="POST">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="fname">Title:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo ucfirst($data->message);?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="lname">Start Date:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo simpleDate($data->createddate);?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="email">Due Date:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo simpleDate($data->duedate);?></h4>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>





<script src="js/scripts.js"></script>
</body>
</html>