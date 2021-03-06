<?php
//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }
    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
        if(session_status() == PHP_SESSION_NONE){
            session_start();
          }
        $records = todos::findTask($_SESSION["userID"]);
        
  //print_r($records);
        self::getTemplate('all_tasks', $records);
    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks
    //you should check the notes on the project posted in moodle for how to use active record here
    public static function create()
    {
        print_r($_POST);
    }
    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);
    }
    //this would be for the post for sending the task edit form
    public static function store()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);
    }
    public static function save() {
      $user = todos::findOne($_REQUEST['id']);
        $user->owneremail = $_POST['owneremail'];
        $user->ownerid = $_POST['ownerid'];
        $user->createdate = $_POST['createddate'];
        $user->duedate = $_POST['duedate'];
        $user->message = $_POST['message'];
        $user->isdone = $_POST['isdone'];
        $user->userID = $_SESSION['userID'];
       $user->save();
       header("Location: index.php?page=tasks&action=all");
    }
    
    public static function insert() {
      
      
      if(session_status() == PHP_SESSION_NONE) {
       session_start();
       }
    
        $record = new todo();
        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_POST['ownerid'];
        $record->createddate = $_POST['createdate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->userid = $_SESSION['userID'];
        print_r ($record);
        $record->save();
        header("Location: index.php?page=tasks&action=all");
        
    
}
   
  public static function getTodo()  
    {
    if(session_status() == PHP_SESSION_NONE) {
       session_start();
       }
       
    $_SESSION['userID'];
    $record = todos::getTodo($_SESSION['userID']);
    print_r($record);
    self::getTemplate('all_tasks', $record); 
    }
    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        print_r($_POST);
        header("Location: index.php?page=tasks&action=all");
    }
     public static function logout()
     {
     session_start();
     session_destroy();
     header("Location: index.php?page=homepage&action=show");
     exit();
     }
}