<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $img, $blurb, $link, $error) {
?>
<!doctype html>
<?php include "inc/html-top.php"; ?>
	<body>
		<header>
			<h1><a href = "index.php">CSC 174</a></h1>
		</header>
		<?php
		// if there are any errors, display them
		if ($error != '') {
			echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
		}
		?>

		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div>
				<label for="firstname">Type your first name:</label> <input type="text" name="firstname" value="<?php echo $firstname; ?>">
			</div>

			<div>
				<label for= "lastname">Type your last name:</label> <input type="text" name="lastname" value="<?php echo $lastname; ?>">
			</div>

			<div>
				<label for ="img">Upload your headshot:</label> <input  type="file" name="img" value="<?php echo $img; ?>">
			</div>

			<div>
				<label for = "blurb">Tell the World Wide Web about yourself in 100-200 words:</label> <textarea id ="blurb" name="blurb" rows = "4" cols = "50"><?php echo $blurb; ?></textarea>
			</div>

			<div>
				<label for = "link">Provide a link to a website you've worked on:</label> <input  type="text" name="link" value="<?php echo $link; ?>">
			</div>
			<div><em>all fields are required</em></div>
			<input  type="submit" name="submit" value="Submit">
		</form>
	 

	    <div>
      	   <a href="list.php">Cancel</a> 
        </div>
        
	</body>
</html>
<?php
}
?>