<?php
    $email = $_POST['email'];

    $conn = new mysqli('localhost', 'root', '', 'comig');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (email) VALUES (?)");
        $stmt->bind_param("s", $email); // corrected function name here
        $stmt->execute();
        echo "success";
        $stmt->close();
        $conn->close();
    }
?>
