<?php
    session_start();
    if (isset($_SESSION['loggedin']) == "yes") {          
    }

    else {
        header("Location: index.php");
    }
    
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMD Talks</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/twitter.css">	
</head>
<body>
	<nav>
		<a href="logout.php">Logout</a>
	</nav>
	
	<div id="container">	
	<section id="newpost">
		<form action="" method="post">
			<label for="post">What's on your mind?</label>	
			<textarea name="post" id="post" cols="30" rows="2"></textarea>		
			<input type="submit" name="btnCreatePost" value="Send" />
			
		</form>
	</section>
	
	<section id="tweets">
		<h2>Your posts</h2>
		
	</section>
	
	</div>	
	
</body>
</html>