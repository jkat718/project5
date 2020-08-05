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
		<div class="container">
		<form action="#" method="post" enctype="multipart/form-data" class="form-inline">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label for="firstname">Type your first name:</label> <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
			</div>

			<div class="form-group">
				<label for= "lastname">Type your last name:</label> <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
			</div>

			<div class="custom-file form-group">
				<label for ="img" class="custom-file-label">Upload your headshot:</label> <input  type="file" name="img" id="img" value="<?php echo $img; ?>" class="custom-file-input" >
			</div>

			<div>
				<label for = "blurb">Tell the us about yourself in ~50 words:</label> <textarea id ="blurb" name="blurb" rows = "4" cols = "50"><?php echo $blurb; ?></textarea>
			</div>

			<div class="form-group">
				<label for = "link">Provide a link to your Lab05:</label> <input  type="text" name="link" id="link">
			</div>
			<div class="required"><em>All fields are required</em></div>
			<input  type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
			<div>
      	  		<a href="list.php" class="btn btn-danger btn-block">Cancel</a> 
        	</div>
		</form>
	 	</div>

	    
        
	</body>
</html>
<?php
}
?>