<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        session_start();
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        session_start();

        $userID = $_SESSION['uid'];

        $records = todos::findTasksbyID($userID);

//
//        /** @var TYPE_NAME $records */
//        echo '<script>window.alert('.$records.')</script>';
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    //Routing for create new Task form
    public static function create()
    {
        session_start();
//        print_r($_POST);
        self::getTemplate('add_task');
    }

    public static function addNew() {
        session_start();

        $user = accounts::findUserbyID($_SESSION['uid']);

        $task = new todo();
        $task->id = '';
        $task->createddate = $_POST['sdate'];
        $task->message = $_POST['tmessage'];
        $task->duedate = $_POST['ddate'];
        $task->ownerid = $user->id;
        $task->owneremail = $user->email;
        $task->isdone = 0;
        $task->save();

        header("Location: index.php?page=tasks&action=all");

    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    //Only for Edit
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        logToConsole(print_r($_POST));
//        print_r($record);
        $record->id = $_REQUEST['id'];
        $record->message = $_POST['message'];
        $record->ownerid = $record->ownerid;
        $record->owneremail = $record->owneremail;
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->isdone = $_POST['isdone'];
        print_r($record->isdone);
        $record->save();

        header("Location: index.php?page=tasks&action=all");
    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
//        print_r($_POST);
        header("Location: index.php?page=tasks&action=all");
    }

}