<?php
include 'db_config.php';

$id = $_GET['id'] ?? '';

if (!empty($id)) {
    // Delete user
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

$conn->close();
?>
