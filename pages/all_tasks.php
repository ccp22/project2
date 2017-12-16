<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tracklist | Home</title>
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
//    print_r($data);
    if($data == null) {
        echo '
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8"><h1 style="text-align: center">You have not added any tasks yet!</h1></div>
                </div>
            </div>';
    }elseif (count($data) > 0) {
        echo '
            <div class="container">
                <div class="row">
                <h1 id="register-title">Your Tasks</h1></div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" id="all-task-content-block">';
                foreach ($data as $row) {
                    if($row->isdone == 0) {
                        echo '<a href="index.php?page=tasks&action=show&id='.$row->id.'">
                        <div class="col-sm-12 task-content-row">
                            <div class="task-title-row">
                                <h2>'.$row->message.'</h2>
                            </div>
                            <div class="task-detail-row">
                                <div class="duedate-row">
                                    <p><strong>Due date: </strong>'.$row->duedate.'</p>
                                </div>
                                <div class="edit-row-btn"><span class="glyphicon glyphicon-edit"></span> Edit</div>
                            </div>      
                        </div></a>
                        ';
                    }else {
                        echo '<a href="index.php?page=tasks&action=show&id='.$row->id.'">
                        <div class="col-sm-12 task-content-row">
                            <div class="task-title">
                                <h2>'.$row->message.'</h2>
                            </div>
                            <div class="task-detail-row">
                                <div class="duedate-row">
                                    <p><strong>Due date: </strong>'.$row->duedate.'</p>
                                </div>
                                <div class="edit-row-btn"><span class="glyphicon glyphicon-edit"></span> Edit</div>
                            </div>           
                        </div></a>
                        ';
                    }
                }
               echo '</div>
                    <div class="col-sm-2"></div>
                </div>  
            </div>
        ';
    }else {
        echo '
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8"><h1 style="text-align: center">You have not added any tasks yet!</h1></div>
                </div>
            </div>';
    }



?>


<script src="js/scripts.js"></script>
</body>
</html>