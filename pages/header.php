<div id="outer-div">
    <div id="logo-header">
        <h2 id="logo-head-id">Task-ToDos</h2>
    </div>
        <?php
            if (isset($_SESSION['uid'])) {
                echo '
                <nav class="navbar navbar-inverse">
                      <div class="container-fluid">
                        
                        <ul class="nav navbar-nav navbar-leftside">
                          <li><a href="index.php?page=tasks&action=all"><span class="glyphicon glyphicon-home"></span></a></li>
                          <li><a href="index.php?page=tasks&action=create"><span class="glyphicon glyphicon-plus"></span> Add Task</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php?page=accounts&action=show&id='.$_SESSION['uid'].'"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                          <li><a href="index.php?page=accounts&action=logout"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
                        </ul>
                      </div>
                </nav>';
            }else {
                echo '
                <nav class="navbar navbar-inverse">
                      <div class="container-fluid">
                        
                        <ul class="nav navbar-nav">
                          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php?page=accounts&action=register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                          <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                      </div>
                </nav>';
            }
        ?>
</div>

