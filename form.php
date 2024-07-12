<!DOCTYPE html>
<html>
<head>
    <title>Add / Edit User</title>
</head>
<body>
    <h2>Add / Edit User</h2>
    <?php
    include 'db_config.php';

    $id = $_GET['id'] ?? '';
    $name = '';
    $email = '';

    if (!empty($id)) {
        // Fetch existing user details for editing
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $email = $row['email'];
        }
    }
    ?>

    <form action="save_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
