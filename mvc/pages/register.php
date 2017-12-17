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
<style>
.container{
	position: absolute;
	top: -20px;
	left: -20px;
	right: 200px;
	bottom: -40px; 
	z-index: 1;
	opacity: 0.7;
}
.login{
	position: absolute;
	top: calc(50% - 275px);
	left: calc(50% - 50px);
	background : #3293f3e8;
	box-shadow: 5px 5px 3px #2A2B2B;
	z-index : 5;
	height: 430px;
	width: 310px;
        padding: 10px;
	border-radius: 4px;
	z-index: 2;
}

</style>

<body>

<body style= "background-image: url(https://static.pexels.com/photos/547114/pexels-photo-547114.jpeg); background-size: cover;">
<form action="index.php?page=accounts&action=register" method="post">
<div class="container">
    <div class="login">
    First name:&nbsp;<input type="text" name="fname"><br><br>
    Last name: &nbsp;<input type="text" name="lname"><br><br>
    Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email"><br><br>
    Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone"><br><br>
    Birthday:&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="birthday" data-date-inline-picker="true" /><br><br>
    Gender:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="gender"><br><br>
    Password:&nbsp; <input type="password" name="password"><br><br>
    <input type="submit" value="Submit form">
    </div>
</div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>
