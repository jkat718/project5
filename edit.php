<?php
include('inc/protect.php');
include('renderform.php');

// connect to the database
include('inc/connect-db.php');

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) {
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) {
		// get form data, making sure it is valid
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
		$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
		$blurb = mysqli_real_escape_string($connection, htmlspecialchars($_POST['blurb']));
		$link = mysqli_real_escape_string($connection, htmlspecialchars($_POST['link']));
		$img = $_FILES['img'];

		if ( $firstname == '' || $lastname == ''  || $blurb == '' || $link == '' || $img == '') {
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';

			//error, display form
			renderForm($id, $firstname, $lastname, $img, $blurb, $link, $error);
		}
		else {
			//Delete old file

			$result = mysqli_query($connection, "SELECT * FROM student_index WHERE id=$id");
			$row = mysqli_fetch_array( $result );
			$imgToDelete = $row['img'];
			if (file_exists($imgToDelete)) {
				unlink($imgToDelete);
			}
			
			//Handling of Image upload
			
			$fileName = $img['name'];
			$fileTmpName = $img['tmp_name'];
			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$fileNameNew = uniqid('',true).".".$fileActualExt;
			$img = 'images/'.$fileNameNew;

			move_uploaded_file($fileTmpName, $img);

			// save the data to the database
			$result = mysqli_query($connection, "UPDATE student_index SET firstname='$firstname', lastname='$lastname' , img='$img' , blurb='$blurb' , link='$link'  WHERE id='$id'");

			// once saved, redirect back to the homepage page to view the results
			header("Location: list.php");

		}	
	} else {
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
} else {
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($connection, "SELECT * FROM student_index WHERE id=$id");
		$row = mysqli_fetch_array( $result );

		// check that the 'id' matches up with a row in the databse
		if($row) {
			// get data from db
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$img = $row['img'];
			$blurb = $row['blurb'];
			$link = $row['link'];
			// show form
			renderForm($id, $firstname, $lastname, $img, $blurb, $link, '');
		} else {
			// if no match, display result
			echo "No results!";
		}
	} else {
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error!';
	}
}
?>