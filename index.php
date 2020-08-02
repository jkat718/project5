<?php include "inc/html-top.php"; ?>

	<body class="container-fluid">
		<header id="index-header">
			<h1>CSC 174</h1>
		</header>
		
		<div class="viewport2">
			<div class="grid2">
				<div>


					<figure>
						<img class = "home-pic" src ="images/web-dev.png" alt="home">
					</figure>



				</div>
				<div>
					<h2>A fellow CSC 174 student? Login to your account!</h2 >
					<form action = "new.php" class="form-inline">
						<label for="username">Type username:</label> <input id="username" type="text" name="username">
						<label for="password">Type password:</label> <input id="password" type="text" name="password">
						<input type="submit" value="Log in/Add info" class="btn btn-primary" >
					</form>
				</div>
	
			</div>
			<div class="align">
				<article>
					<h2>About CSC 174</h2>
					<p>“Front-end” is an industry term that refers to the focus on HTML, CSS and JavaScript, which differentiates this course from the formal programming courses.</p>
				</article>
				<div class="align">
					<a href="list.php">See a showcase of students ></a>
				</div>
			</div>
		</div>
		
		<footer><a href = "https://docs.csc174.org/syllabus.html">
			CSC 174: Advanced Front-End Web Design and Development </a>
		</footer>
<?php include "inc/scripts.php"; ?>
	</body>
</html>
