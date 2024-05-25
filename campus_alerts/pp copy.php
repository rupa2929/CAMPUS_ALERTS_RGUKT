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
$sender = $_POST['from'];
$message = $_POST['message'];

$to = $_POST['to'];

// Set default values for unselected options
$allPUC = "none";
$allEngineering = "none";
$pucGroup = "none";
$pucSection = "none";
$engineeringYear = "none";
$engineeringBranch = "none";
$engineeringSection = "none";

if ($to === "all") {
    // If "All" is selected, set all recipients to "All"
    $allPUC = "allPUC";
    $allEngineering = "allEngineering";
} elseif ($to === "PUC") {
    $pucGroup = $_POST['pucGroup'];
    $pucSection = $_POST['pucSection'];
} elseif ($to === "engineering") {
    $engineeringYear = $_POST['engineeringYear'];
    $engineeringBranch = $_POST['engineeringBranch'];
    $engineeringSection = $_POST['engineeringSection'];
}

// Construct the SQL query
$sql = "INSERT INTO messages (category,sender, messag, allPUC, allengineering, pucGroup, pucSection, engineeringYear, engineeringBranch, engineeringSection) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Bind parameters
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

// Bind parameters with their respective data types
$stmt->bind_param("ssssssssss",$category, $sender, $message, $allPUC, $allEngineering, $pucGroup, $pucSection, $engineeringYear, $engineeringBranch, $engineeringSection);

if ($stmt->execute()) {
    // Message successfully stored in the database
    echo"
    <script>alert('saved successfully');</script>
    ";
} else {
    // Handle the case where execution fails
    echo "Error: " . $stmt->error;
}
$stmt->close();




$sql1 = "INSERT INTO main_messages (category,sender, messag, allPUC, allengineering, pucGroup, pucSection, engineeringYear, engineeringBranch, engineeringSection) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt2 = $conn->prepare($sql1);
if (!$stmt2) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

// Bind parameters with their respective data types
$stmt2->bind_param("ssssssssss",$category, $sender, $message, $allPUC, $allEngineering, $pucGroup, $pucSection, $engineeringYear, $engineeringBranch, $engineeringSection);

if ($stmt2->execute()) {
    // Message successfully stored in the database
    echo"
    <script>alert('saved successfully');</script>
    ";
} else {
    // Handle the case where execution fails
    echo "Error: " . $stmt2->error;
}


// header("Location: .php");


$stmt2->close();
$conn->close();
?>