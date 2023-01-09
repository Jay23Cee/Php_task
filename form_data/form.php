<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Initialize an empty array to store the form data
  $formData = array();

  // Extract the data from the form
  $formData['name'] = $_POST['name'];
  $formData['email'] = $_POST['email'];
  $formData['message'] = $_POST['message'];

  // Do something with the data (e.g. save it to a database)
  // ...

  // Redirect to a thank you page
  header('Location: thanks.php');
  exit;
}

?>

<!-- HTML form goes here -->
<form action="" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message:</label><br>
  <textarea id="message" name="message"></textarea><br>
  <input type="submit" value="Submit" name="submit">
</form>
