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
<style>
.login{
	position: absolute;
	top: calc(46% - 75px);
	left: calc(50% - 50px);
	background : #02d3d8;
	box-shadow: 5px 5px 3px #2A2B2B;
	z-index : 5;
	height: 265px;
	width: 330px;
        padding: 10px;
	border-radius: 4px;
	z-index: 2;
}

</style>

<h4 style="margin-left: 1600px;"><?php include "header.php" ?><br><br></h4>


<h6 style="margin-bottom: 300px;"><a href="index.php?page=accounts&action=ViewProfile"> Click ---> To view MyProfile</a>

<br><br><br>


<form action="index.php?page=tasks&action=insert" method="post" style="margin-left: 20px"> 
     
    Owneremail:<input type="email" name="owneremail"><br><br>
    Ownerid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="ownerid" ><br><br>
    Createdate:&nbsp;&nbsp;<input type="text" name="createdate" ><br><br>
    Duedate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="duedate"><br><br>
    Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="message"><br><br>
    Isdone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="isdone"><br><br>
    <input type="submit" value="Add Task"><br><br>
 
</form>
  </div>
<?php

print utility\htmlTable::genarateTableFromMultiArray($data);
?>



<script src="js/scripts.js"></script>
</body>
</html>