
<?php
// header('Content-Type: application/json');

// Database dbhection
include 'config.php';


// Function to sanitize inputs
function clean_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

// Collect and sanitize POST data
$name = clean_input($_POST['name'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$phone = clean_input($_POST['phone'] ?? '');
$msgsubject = clean_input($_POST['msgsubject'] ?? '');
$message = clean_input($_POST['message'] ?? '');
$status = 0;

// Check required fields
if (empty($name) || empty($email) || empty($phone)|| empty($msgsubject) || empty($message)) {
  // echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
  $error = 'All fields are required.';
  exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    $error = 'Invalid email address.';
  exit;
}

// Spam & unwanted word detection
$banned_words = ['spam', 'viagra', 'bitcoin', 'lottery', 'win money', 'sex', 'porn', 'credit card', 'loan offer'];
foreach ($banned_words as $bad) {
  if (stripos($message, $bad) !== false || stripos($msgsubject, $bad) !== false) {
    // echo json_encode(['status' => 'error', 'message' => 'Message contains prohibited content.']);
    $error = 'Message contains prohibited content.';
    exit;
  }
}

// Prevent repeated spam (simple rate limit per IP)
$ip = $_SERVER['REMOTE_ADDR'];
$checkSpam = "SELECT COUNT(*) AS attempts FROM tblcontactusquery WHERE PostingDate > NOW() - INTERVAL 2 MINUTE AND INET_ATON('$ip') = INET_ATON('$ip')";
$query = $dbh->prepare($checkSpam);
				$query->execute();
        $results=$query->fetch(PDO::FETCH_ASSOC);
// $row = $checkSpam->fetch_assoc();
if ($results['attempts'] > 3) {
  // echo json_encode(['status' => 'error', 'message' => 'Too many attempts. Try again later.']);
  $error = 'Too many attempts. Try again later.';
  exit;
}

// Save message to database
$stmt = "INSERT INTO tblcontactusquery 
(name, EmailId, ContactNumber, msgsubject, Message, status) 
VALUES (:name, :email, :phone, :msgsubject, :message, :status)";
$query = $dbh->prepare($stmt);
$query->bindParam(':name', $name, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':phone', $phone, PDO::PARAM_STR);
$query->bindParam(':msgsubject', $msgsubject, PDO::PARAM_STR);
$query->bindParam(':message', $message, PDO::PARAM_STR);
$query->bindParam(':status', $status, PDO::PARAM_STR);
// $stmt->bind_param("ssssss", $name, $email, $phone, $msgsubject, $message, $status);
$query->execute();
if ($query) {
  // echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
   $message = 'Your message has been sent successfully!';
   header("Location: ../contact-us?p=contactus");
		exit;
} else {
  // echo json_encode(['status' => 'error', 'message' => 'Something went wrong, please try again.']);
    $error = 'Something went wrong, please try again.';
   header("Location: ../contact-us?p=contactus");
}

// $stmt->close();
// $dbh->close();
?>
