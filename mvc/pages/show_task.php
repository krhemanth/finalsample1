<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body style="background-color: #87ceeb">

 <h3>Edit My Task</h3>
 <h4 style="margin-left: 1580px;"><?php include "header.php";?></h4>
 <h4 style="margin-left: 1570px;"><button><a href="index.php?page=tasks&action=all">My Task</a></button></h4>
 <h4 style="margin-left: 1560px;"><button><a href="index.php?page=accounts&action=ViewProfile"> MyProfile</a></button><br><br><br></h4>
 <?php
print utility\htmlTable::generateTableFromOneRecord($data);
?>

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post" style= "margin-left: 20px;" > 
    Owneremail:<input type="email" name="owneremail" value="<?php echo $data->owneremail; ?>"required><br><br>
    Ownerid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="ownerid" value="<?php echo $data->ownerid; ?>"required><br><br>
    Createdate:&nbsp;&nbsp;<input type="date" name="Createddate" data-date-inline-picker="true" value="<?php echo $data->createddate; ?>"required><br><br>
    Duedate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="duedate" data-date-inline-picker="true" value="<?php echo $data->duedate; ?>"required><br><br>
    Message:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="message" value="<?php echo $data->message; ?>"required><br><br>
    Isdone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="isdone" value="<?php echo $data->isdone; ?>"required><br><br>
    <input type="submit" value="Update Task"><br><br>
   
</form>


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1" style= "margin-left: 20px;">
<button type="submit" form="form1" value="delete">Delete Task</button>
</form>

<script src="js/scripts.js"></script>
</body>
</html>