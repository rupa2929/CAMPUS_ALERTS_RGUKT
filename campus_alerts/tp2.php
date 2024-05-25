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
$sender = $_POST['scholar-from'];
$message = $_POST['scholar-message'];

$to = $_POST['scholar-to'];

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
    $pucGroup = $_POST['scholarpucGroup'];
    $pucSection = $_POST['scholarpucSection'];
} elseif ($to === "engineering") {
    $engineeringYear = $_POST['scholarengineeringYear'];
    $engineeringBranch = $_POST['scholarengineeringBranch'];
    $engineeringSection = $_POST['scholarengineeringSection'];
}

// Construct the SQL query
$sql = "INSERT INTO messages2 (category,sender, messag, allPUC, allengineering, pucGroup, pucSection, engineeringYear, engineeringBranch, engineeringSection) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)";

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


//header("Location:form2.php");

$stmt->close();

$stmt2->close();
$conn->close();
?>