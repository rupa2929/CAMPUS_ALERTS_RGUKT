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
$category=$sender=$message=$to="none";
$allBoys = $allGirls = $boysBlock = $boysFloor = $boysRoom = $girlsBlock = $girlsFloor = $girlsRoom = "none";

// Process form data

// Set default values for unselected options


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $category=$_POST["category"];
    $sender = $_POST['hostelfrom'];
    $message = $_POST['hostelmessage'];
    
    $to = $_POST['hostelto'];

$allBoys="none";
$allGirls="none";
$boysBlock="none";
$boysFloor="none";
$boysRoom="none";
$girlsBlock="none";
$girlsFloor="none";
$girlsRoom="none";

if ($to === "all") {
    // If "All" is selected, set all recipients to "All"
    $allBoys = "allboysblocks";
    $allGirls = "allgirlsblocks";
} elseif ($to === "BOYS") {
    $boysBlock = $_POST['boysBlock'];
    $boysFloor = $_POST['boysFloor'];
    $boysRoom = $_POST['boysRoom'];
   
} elseif ($to === "GIRLS") {
    $girlsBlock = $_POST["girlsBlock"];
    $girlsFloor = $_POST["girlsFloor"];
    $girlsRoom = $_POST["girlsRoom"];
}

// Construct the SQL query
$sql = "INSERT INTO messages5 (category,sender, messag,allboysblocks,allgirlsblocks, boysBlock,boysFloor,boysRoom,girlsBlock,girlsFloor,girlsRoom) VALUES (?,?,?,?, ?, ?, ?, ?, ?, ?, ?)";

// Bind parameters
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

// Bind parameters with their respective data types
$stmt->bind_param("sssssssssss",$category, $sender, $message,$allBoys,$allGirls,$boysBlock,$boysFloor,$boysRoom,$girlsBlock,$girlsFloor,$girlsRoom);

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


$sql2 = "INSERT INTO main_messages (category,sender, messag,allboysblocks,allgirlsblocks, boysBlock,boysFloor,boysRoom,girlsBlock,girlsFloor,girlsRoom) VALUES (?,?,?,?, ?, ?, ?, ?, ?, ?, ?)";

// Bind parameters
$stmt2 = $conn->prepare($sql2);
if (!$stmt2) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

// Bind parameters with their respective data types
$stmt2->bind_param("sssssssssss",$category, $sender, $message,$allBoys,$allGirls,$boysBlock,$boysFloor,$boysRoom,$girlsBlock,$girlsFloor,$girlsRoom);

if ($stmt2->execute()) {
    // Message successfully stored in the database
    echo"
    <script>alert('saved successfully');</script>
    ";
} else {
    // Handle the case where execution fails
    echo "Error: " . $stmt2->error;
    
}
 $stmt2->close();
}

// header("Location:form5.php");

$conn->close();
?>