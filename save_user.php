<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($id)) {
        // Insert new record
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    } else {
        // Update existing record
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "User saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
