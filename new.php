<?php
include('renderform.php');

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$img = $_FILES['img'];
	$blurb = mysqli_real_escape_string($connection, htmlspecialchars($_POST['blurb']));
	$link = mysqli_real_escape_string($connection, htmlspecialchars($_POST['link']));

	


	// check to make sure both fields are entered
	if ($firstname == '' || $lastname == '' || $img == '' || $blurb == '' || $link == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $lastname, $img, $blurb, $link, $error);

	} else {
		//Handling of Image upload
			
		$fileName = $img['name'];
		$fileTmpName = $img['tmp_name'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$fileNameNew = uniqid('',true).".".$fileActualExt;
		$img = 'images/'.$fileNameNew;

		move_uploaded_file($fileTmpName, $img);
		
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO student_index (firstname, lastname, img, blurb, link) VALUES ('$firstname', '$lastname', '$img' , '$blurb' , '$link' )");

		// once saved, redirect back to the view page
		header("Location: list.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','');
}
?>