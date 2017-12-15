<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tracklist | My Profile</title>
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
                document.getElementById('info-display-block').style.display = "none";
                document.getElementById('edit-block').style.display = "block";
                document.getElementById('editButton').innerHTML = "<span class=\"glyphicon glyphicon-remove\"></span> Cancel";
            }else {
                document.getElementById('edit-block').style.display = "none";
                document.getElementById('info-display-block').style.display = "block";
                document.getElementById('editButton').innerHTML = "<span class=\"glyphicon glyphicon-edit\"></span> Edit";
            }
            flag = !flag;
        }
    </script>
</head>

<body>
<?php
include "header.php";
?>


<?php
//this is how you print something  $data contains the record that was selected on the table.

//print_r($data);


?>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 center-content-block" id="account-block-div">
            <div class="account-header-row">
                <h1 id="user-name-title"><span>Welcome!</span> <strong><?php echo $data->fname.' '.$data->lname?></strong><span class="edit-btn"><button onclick="switchToEdit()" class="btn btn-danger edit-btn" id="editButton"><span class="glyphicon glyphicon-edit"></span> Edit</button></span></h1>
            </div>
            <div id="edit-block" style="display: none">
                <div class="user-details-content-block">
                    <form class="form-horizontal" action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">First Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="fname" value="<?php echo ucfirst($data->fname);?>" name="fname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Last Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="lname" value="<?php echo ucfirst($data->lname);?>" name="lname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" value="<?php echo $data->email;?>" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Phone:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" value="<?php echo $data->phone;?>" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="birthday">Birthday:</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $data->birthday;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="gender">Gender:</label>
                            <div class="col-sm-8">
                                <?php
                                if ($data->gender == 'male' || $data->gender == 'Male') {
                                    echo '<label class="radio-inline">
                                        <input type="radio" name="gender" value="male" checked>Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female">Female
                                    </label>';
                                }elseif ($data->gender == 'female' || $data->gender == 'Female') {
                                    echo '<label class="radio-inline">
                                        <input type="radio" name="gender" value="male">Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female" checked>Female
                                    </label>';
                                }else {
                                    echo '<label class="radio-inline">
                                        <input type="radio" name="gender" value="male">Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female">Female
                                    </label>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button type="submit" class="btn btn-default" id="register-submit-btn">Update</button>
                            </div>
                        </div>
                    </form>
                    <div id="account-delete" class="delete-btn">
                        <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
                            <button class="btn btn-danger" type="submit" form="form1" value="delete">Delete Account</button>
                        </form>
                    </div>
                </div>
            </div>

            <!--      Display Block      -->

            <div id="info-display-block" style="display: block">
                <div class="user-details-content-block">


                    <form class="form-horizontal" method="POST">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="fname">First Name:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo ucfirst($data->fname);?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="lname">Last Name:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo ucfirst($data->lname);?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="email">Email:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo $data->email;?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="phone">Phone:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo $data->phone;?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="birthday">Birthday:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo $data->birthday;?></h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <h4 class="col-sm-12" for="gender">Gender:</h4>
                            </div>
                            <div class="col-sm-8">
                                <h4><?php echo ucfirst($data->gender);?></h4>
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