<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<?php
		// Check if the form has been submitted
		if(isset($_POST['form_submitted']) && $_POST['form_submitted'] == 1) {
		    // Process the form data
		    $firstname = $_POST['firstname'];
		    $lastname = $_POST['lastname'];

		    // Here you can perform any further processing, such as storing the data in a database

		    // Display a message confirming successful submission
		    echo "<p>Thank you for registering, $firstname $lastname!</p>";
		}
		?>
	</body>
</html>
