













<!DOCTYPE html>






<!-- Homepage -->
<html>
  <head>
    <title>Phlemp & Financial</title>
    <link rel="stylesheet" type="text/css" href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/consumer-pages/contact-an-agent/contact-an-agent-styles.css">

  </head>
  <body>
    <header>
      <!-- Header content goes here -->
    </header>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 <nav>
      <ul>
        <li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/homepage.html"class="active">Home</a></li>
        <li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/annuities.html">Annuities</a></li>
        <li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/life-insurance.html">Life Insurance</a></li>
		<li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/about-us.html">About Us</a></li>
        <li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/contact-an-agent.html">Contact an Agent</a></li>
		<li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/become-an-agent.html">Become an Agent</a></li>
		<li><a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/login.html">Login</a></li>
      </ul>
    </nav>
	
	
	
	
	
	
	<h1>Contact an Agent</h1>
<p>Need help with your insurance policy or have a question about coverage? Our team of experienced agents is here to help. Simply fill out the form below and we'll get back to you as soon as possible.</p>

<form method="post" action="send_message.php">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone"><br>
  <label for="message">Message:</label><br>
  <textarea id="message" name="message" required></textarea><br>
  <input type="submit" value="Send">
</form> 

<p>You can also reach us by phone at 469-251-9023 or by email at agents@example.com.</p>

	
	
	
	
	
	
	
	
	
	
	
	
<?php

// Connect to the MySQL database
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'contact_agent';
$conn = mysqli_connect($host, $user, $password, $database);

// Check for connection errors
if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Escape the form data to prevent SQL injection attacks
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$message = mysqli_real_escape_string($conn, $message);

// Build the SQL query
$query = "INSERT INTO messages (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

// Execute the query
$result = mysqli_query($conn, $query);

// Check for errors
if (!$result) {
  die('Error: ' . mysqli_error($conn));
}

// Close the connection
mysqli_close($conn);

?>

	
	
	
	
	
	
	
		
    <footer>
      <!-- Footer content goes here -->
    </footer>
	<script src="C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/contact-an-agent-scripts.js"></script>
	 <link<a href="file:///C:/Users/phlem/OneDrive/Desktop/Phlemp&Financial/contact-an-agent.php">Contact an Agent</a>

  </body>
</html>
