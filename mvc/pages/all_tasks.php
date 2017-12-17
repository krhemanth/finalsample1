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

<body>



<?php include "header.php" ?><br><br>

<a href="index.php?page=accounts&action=ViewProfile">MyProfile---></a>

<br><br><br>


<form action="index.php?page=tasks&action=insert" method="post"> 
     
    Owneremail:<input type="email" name="owneremail"><br>
    Ownerid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="ownerid" ><br>
    Createdate:&nbsp;&nbsp;<input type="text" name="createdate" ><br>
    Duedate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="duedate"><br>
    Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="message"><br>
    Isdone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="isdone"><br><br><br>
    <input type="submit" value="Insert Task"><br><br>
   
</form>

<?php

print utility\htmlTable::genarateTableFromMultiArray($data);
?>



<script src="js/scripts.js"></script>
</body>
</html>