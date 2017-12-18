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
	opacity: 0.8;
}
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

<body style= "background-image: url(https://static.pexels.com/photos/547114/pexels-photo-547114.jpeg); background-size: cover;">


<h1>
    <?php
    //this how to print some data;
    echo $data['site_name'];
    
    ?> 
</h1>
<br>
<br>
<form action="index.php?page=accounts&action=login" method="POST">
  <font face = "Comic sans MS" size =" 5">
   

    <div class="container">
    <div class="login">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>
        <br>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
        <button><a href="index.php?page=accounts&action=register">Sign up</a></button>
        </div>
    </div>
    


</form>

<script src="js/scripts.js"></script>
</body>
</html>