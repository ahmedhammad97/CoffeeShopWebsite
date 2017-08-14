<?php 	define("TITLE","Contact Us | Vagolia Coffee Shop");
		include("includes/header.php");


	
		// Check for Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
		
		
		if (isset($_POST['submit'])) {
			
			// Assign trimmed form data to variables
			// Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$comment	= $_POST['comment']; // no need to trim message
		
			// Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)) {
				
				die(); // If true, kill the script
				
			}
			
			if (!$name || !$email || !$comment) {
				echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
				exit;
			}
			
			// Add the recipient email to a variable
			$to	= "example@gmail.com";
			
			// Create a subject
			$subject = "$name sent a message via your contact form";
			
			// Construct the message
			$message .= "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$comment";
			
		
			$message = wordwrap($message, 72); // Keep the message neat n' tidy
		
			// Set the mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			// Send the email!
			mail($to, $subject, $message, $headers); }
 ?>
 	<div id="contactbody">
 		<center><form method="post" action="contact.php"><br>
 			<span id="formtitle">Enter your information please!</span><br><br><br>
 			Name : <input type="text" name="name" class="in"/><br><br>
 			Email : <input type="email" name="email" class="in"/><br><br>
 			Gender :   	Male <input type="radio" name="gender" value="Male"/>  
 						Female <input type="radio" name="gender" value="Female"/><br><br>
 			Comment : <textarea name="comment" ></textarea><br><br><br>
 						<input type="submit" id="sub"/ name="submit"><br><br>

 		</form></center>



 	</div>

 <?php include("includes/footer.php"); ?>