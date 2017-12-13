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
        echo "</tbody></table><hr>";
    }else {
        echo '<h4>You have not added any tasks yet!</h4>';
    }

?>


<script src="js/scripts.js"></script>
</body>
</html>