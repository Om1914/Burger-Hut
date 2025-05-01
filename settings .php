<?php
session_start();
include 'Db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];
    $emailNotifications = isset($_POST['email_notifications']) ? 1 : 0;
    $orderNotifications = isset($_POST['order_notifications']) ? 1 : 0;
    $promoNotifications = isset($_POST['promo_notifications']) ? 1 : 0;
    $newName = $_POST['new_name'];
    
    // Handle profile picture upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $targetDirectory = "uploads/profile_pictures/";
        $targetFile = $targetDirectory . basename($_FILES['profile_picture']['name']);
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFile);
        
        // Store the profile picture path in the database
        $profilePicturePath = $targetFile;
    }

    // Update password and profile picture if applicable
    if ($newPassword === $confirmPassword) {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the user info in the database
        $sql = "UPDATE users SET name='$newName', password='$hashedPassword', profile_picture='$profilePicturePath', 
                email_notifications='$emailNotifications', order_notifications='$orderNotifications', promo_notifications='$promoNotifications' 
                WHERE user_id=" . $_SESSION['user_id'];
        if (mysqli_query($conn, $sql)) {
            echo "Settings updated successfully!";
        } else {
            echo "Error updating settings: " . mysqli_error($conn);
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Burger Hut Admin</title>
    <link rel="stylesheet" href="dash.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #2c3e50;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #34495e;
        }

        .settings-container {
            flex-grow: 1;
            padding: 30px;
        }

        .settings-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .settings-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-out;
        }

        .settings-form input, .settings-form button, .settings-form select {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .settings-form button {
            background-color: #f39c12;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .settings-form button:hover {
            background-color: #e67e22;
        }

        /* Profile picture preview */
        #profile_picture_preview {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        /* Animation for settings form */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .checkbox-label {
            font-size: 16px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="admin-profile">
            <div class="temp-logo">&#128104;</div>
            <h3>Omkar Suryawanshi</h3>
        </div>

        <div class="logo logo-primary">Burger Hut Admin</div>

        <ul>
            <li><a href="admin_welcome.php">Dashboard</a></li>
            <li><a href="manage_menu.php">Manage Menu</a></li>
            <li><a href="manage_order.php">Orders</a></li>
            <li><a href="user_account.php">Users Account</a></li>
            <li><a href="user_messages.php">Messages</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="settings-container">
        <h1 class="settings-title">Settings</h1>
        <div class="settings-form">
            <form action="settings.php" method="POST" enctype="multipart/form-data">
                <label for="profile_picture">Change Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" onchange="previewImage(event)">
                <img id="profile_picture_preview" src="" alt="Profile Picture Preview">
                
                <label for="new_name">Change Name</label>
                <input type="text" name="new_name" id="new_name" placeholder="Enter new name">
                
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" placeholder="Enter new password">
                
                <label for="confirm_password">Confirm New Password</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm new password">
                
                <label for="email_notifications">Enable Email Notifications</label>
                <input type="checkbox" name="email_notifications" id="email_notifications">
                
                <label class="checkbox-label" for="order_notifications">Enable Order Notifications</label>
                <input type="checkbox" name="order_notifications" id="order_notifications">

                <label class="checkbox-label" for="promo_notifications">Enable Promo Notifications</label>
                <input type="checkbox" name="promo_notifications" id="promo_notifications">
                
                <button type="submit">Save Settings</button>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('profile_picture_preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

</body>
</html>
