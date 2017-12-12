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
    <div id="addNew">
        <a href="index.php?page=tasks&action=create">Add New Task</a>
    </div>
    <?php
        if (isset($_SESSION['userID'])) {
            echo '<div id="logout">
                       <a href="index.php?page=accounts&action=logout">Sign Out</a>
                  </div>';
            echo '<div id="myProfile">
                       <a href="index.php?page=accounts&action=show&id='.$_SESSION['userID'].'">My Profile</a>
                  </div>';
        }
    ?>
<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
    //print_r($data);
    if (count($data) > 1) {
        echo '<h3>Tasks you have added!</h3>';
        echo "<table class=\"table table-hover\">";
        echo "<thead class=\"thead-dark\">
                    <tr>
                        <th>View</th>
                        <th>Message</th>
                        <th>Created Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                    </tr>
                </thead>";
        echo '<tbody>';
        $isdone = 'N/A';
        foreach ($data as $row) {
            if($row->isdone == 0) {
                $isdone = 'Pending';
            }else {
                $isdone = 'Done';
            }
            echo "<tr>
                        <td><a href=\"index.php?page=tasks&action=show&id=$row->id\">View</a></td>
                        <td>".$row->message."</td>
                        <td>".$row->createddate."</td>
                        <td>".$row->duedate."</td>
                        <td>".$isdone ."</td>
                    </tr>";
        }
    }else {
        echo '<h4>You have not added any tasks yet!</h4>';
    }
    echo "</tbody></table><hr>";

?>


<script src="js/scripts.js"></script>
</body>
</html>