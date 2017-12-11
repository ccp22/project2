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
    <div id="addNew">
        <a href="index.php?page=tasks&action=create">Add New Task</a>
    </div>
    <?php
        if (isset($_SESSION['userID'])) {
            echo '<div id="logout">
                       <a href="index.php?page=accounts&action=logout">Sign Out</a>
                  </div>';
        }
    ?>
<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
    echo "<table class=\"table table-hover\">";
    if (count($data) > 0) {
        echo "<thead class=\"thead-dark\">
                    <tr>
                        <th>View</th>
                        <th>Owner Email</th>
                        <th>Owner ID</th>
                        <th>Created Date</th>
                        <th>Due Date</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                </thead>";
        echo '<tbody>';
        foreach ($data as $row) {
            echo "<tr>
                        <td><a href=\"index.php?page=tasks&action=show&id=$row->id\">View</a></td>
                        <td>".$row->owneremail."</td>
                        <td>".$row->ownerid."</td>
                        <td>".$row->createddate."</td>
                        <td>".$row->duedate."</td>
                        <td>".$row->message."</td>
                        <td>".$row->isdone."</td>
                    </tr>";
        }
    }
    echo "</tbody></table><hr>";

?>


<script src="js/scripts.js"></script>
</body>
</html>