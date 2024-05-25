<?php
// Connect to your database (replace with your actual database connection code)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus_alerts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$category=$_POST['category'];
$sender = $_POST['messfrom'];
$message = $_POST['mess-message'];

$to = $_POST['messto'];

// Set default values for unselected options
$Bothmess = "none";
$BoysMess = "none";
$GirlsMess = "none";


if ($to === "Both Mess") {
    // If "All" is selected, set all recipients to "All"
    $BoysMess = "Boys Mess";
    $GirlsMess = "Girls Mess";
} elseif ($to === "Boys Mess") {
    $BoysMess = "Boys Mess";
} elseif ($to === "Girls Mess") {
    $GirlsMess = "Girls Mess";
}

// Construct the SQL query
$sql = "INSERT INTO messages6 (category,sender, messag,Bothmess,BoysMess,GirlsMess ) VALUES (?,?, ?, ?, ?, ?)";

// Bind parameters
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

// Bind parameters with their respective data types
$stmt->bind_param("ssssss",$category, $sender, $message,$Bothmess,$BoysMess,$GirlsMess);

if ($stmt->execute()) {
    // Message successfully stored in the database
    echo"
    <script>alert('saved successfully');</script>
    ";
} else {
    // Handle the case where execution fails
    echo "Error: " . $stmt->error;
}


$sql2 = "INSERT INTO main_messages (category,sender, messag,Bothmess,BoysMess,GirlsMess ) VALUES (?,?, ?, ?, ?, ?)";

// Bind parameters
$stmt2 = $conn->prepare($sql2);
if (!$stmt2) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

// Bind parameters with their respective data types
$stmt2->bind_param("ssssss",$category, $sender, $message,$Bothmess,$BoysMess,$GirlsMess);

if ($stmt2->execute()) {
    // Message successfully stored in the database
    echo"
    <script>alert('saved successfully');</script>
    ";
} else {
    // Handle the case where execution fails
    echo "Error: " . $stmt2->error;
}


header("Location:form6.php");

$stmt->close();

$stmt2->close();
$conn->close();
?>