<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tracklist | Register</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <?php
        include 'meta.php';
    ?>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

    <script type="text/javascript">
        function validateMe() {
            var fname = document.getElementById('fname').value;
            var lname = document.getElementById('lname').value;
            var pwd = document.getElementById('pwd').value;
            var phone = document.getElementById('phone').value;
            if(fname.length < 1) {
                window.alert('First name must be at least 1 character.');
                return false;
            }
            if(lname.length < 1) {
                window.alert('Last name must be at least 1 character.');
                return false;
            }
            if(pwd.length < 6) {
                window.alert('Password must be at least 6 character.');
                return false;
            }
            if(phone.length != 10 && isNaN(parseInt(phone))) {
                window.alert('Enter 10 digit valid phone number.');
                return false;
            }
            return true;
        }
    </script>

    <![endif]-->
</head>

<body>
<?php
include "header.php";
?>

<div class="container">

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 center-content-block" id="register-div-block">
            <div class="row">
                <h1 id="register-title">Register</h1>
            </div>
            <form class="form-horizontal" action="index.php?page=accounts&action=register" method="POST" >
                <div class="form-group">
                    <label class="control-label col-sm-2" for="fname">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="birthday">Birthday:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender">Gender:</label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="male">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female">Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" pattern="^.{6,}$" title="Must be 6 or more characters." class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default" id="register-submit-btn" onclick="return validateMe()">Submit</button>
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
