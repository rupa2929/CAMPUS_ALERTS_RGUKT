<?php
    // Replace these with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "campus_alerts";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve messages from the database (replace 'messages' with your actual table name)
    $sql = "SELECT * FROM messages5";
    $result = $conn->query($sql);

    // Prepare an array to store the data
    $data = array();

    // Collect messages data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rowData = array(
                'category' => $row['category'],
                'sender' => $row['sender'],
                'to' => '',
                'message' => $row['messag'],
                'time' => $row['time']
            );

            // Concatenate all non-'none' values into the 'to' field
            foreach ($row as $columnName => $columnValue) {
                if ($columnValue !== 'none' && $columnName !== 'category' && $columnName != 'sender' && $columnName != 'messag' && $columnName != 'time') {
                    $rowData['to'] .= "$columnValue, ";
                }
            }

            // Remove the trailing comma and space
            $rowData['to'] = rtrim($rowData['to'], ', ');

            // Add the row data to the array
            $data[] = $rowData;
        }
    }

    // Close connection
    $conn->close();

    // Send the data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
?>
