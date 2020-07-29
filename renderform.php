<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $img, $blurb, $link, $error) {
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Index</title>

	</head>
	<body>
		<?php
		// if there are any errors, display them
		if ($error != '') {
			echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
		}
		?>

		<form action="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div>
				<strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $firstname; ?>"/>
			</div>

			<div>
				<strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/>
			</div>

			<div>
				<strong>Image: *</strong> <input  type="file" name="img" value="<?php echo $img; ?>"/>
			</div>

			<div>
				<strong>Blurb: *</strong> <input  type="text" name="blurb" value="<?php echo $blurb; ?>"/>
			</div>

			<div>
				<strong>Link: *</strong> <input  type="text" name="link" value="<?php echo $link; ?>"/>
			</div>

			<div>* required</div>
			<input  type="submit" name="submit" value="Submit">
		</form>
	 

	    <div>
      	   <a href=".">Cancel</a> 
        </div>
        
	</body>
</html>
<?php
}
?>