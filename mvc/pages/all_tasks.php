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




<h4 style="margin-left: 1580px;"><?php include "header.php" ?><br><br></h4>



<h4 style="margin-left: 1560px;"><button><a href="index.php?page=accounts&action=ViewProfile"> MyProfile</a></button><br><br><br></h4>

<h3> My Task </h3>
<p>Add details below to your Task </p> <br>


<form action="index.php?page=tasks&action=insert" method="post" style="margin-left: 20px"> 
     
    Owneremail:<input type="email" name="owneremail" required><br><br>
    Ownerid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ownerid" required ><br><br>
    Createdate:&nbsp;&nbsp;<input type="date" name="createdate" data-date-inline-picker="true" / required><br><br>
    Duedate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="duedate" data-date-inline-picker="true" / required><br><br>
    Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="message" required><br><br>
    Isdone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="isdone" required><br><br>
    <input type="submit" value="Add Task">&nbsp;<br><br>
    
    
</form>
  </div>
<?php
if (!empty($data))
print utility\htmlTable::genarateTableFromMultiArray($data);
?>



<script src="js/scripts.js"></script>
</body>
</html>
