<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>



<body>
<body style="background-color: #87ceeb">
<h2>My Profile</h2>
<h4 style="margin-left: 1600px;"><?php include "header.php";?></h4>
<h4 style="margin-left: 1600px;"><button><a href="index.php?page=tasks&action=all">My Task</a></button></h4>


<h2>Hello: <?php echo $data->fname; ?></h2>



<?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);


?>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"required><br><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"required><br><br>
    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $data->email; ?>"required><br><br>
    Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" maxlength="10" value="<?php echo $data->phone; ?>"required><br><br>
    Birthday: &nbsp;&nbsp;<input type="text" name="birthday" value="<?php echo $data->birthday; ?>"required><br><br>
    Gender: &nbsp;&nbsp;&nbsp;<input type="text" name="gender" value="<?php echo $data->gender; ?>"required><br><br>
    <input type="submit" value="Update Profile"><br><br>
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete Profile</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>