<?php include 'header.php'; ?>

<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];

    if ($role == "signup") {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

        if ($password !== $confirm_password) {
            die("Passwords do not match!");
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            // Redirect without printing anything before
            header("Location: login.php");
            exit(); // Make sure no further code is executed
        } else {
            echo "Error: " . $conn->error;
        }
    } 

    elseif ($role == "user_login") {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM users WHERE name='$name'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = $row['name'];
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "No user found!";
        }
    } 

    elseif ($role == "admin_login") {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM admin WHERE name='$name' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['admin'] = $name;
            header("Location: admin_welcome.php");
            exit();
        } else {
            echo "Invalid admin credentials!";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup | Burger Hut</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your styles file -->
    <script defer src="script.js"></script>
    <style>
        /* General Styles */
/* Container */
body {
    font-family: 'Poppins', sans-serif;  
    color: white;
    text-align: center;
    margin: 0;
    padding: 0;
    background: url('https://t4.ftcdn.net/jpg/05/62/17/79/360_F_562177976_dH3SgNcJBPjkvonJIyBvemkNCvPfOEKB.jpg') no-repeat center center fixed;
    background-size: cover;
    background-attachment: fixed;
}

.container {
    margin-top: 100px;   
    height: 75vh;
}

/* Form Container */
.form-container {
    background: rgba(0, 0, 0, 0.9);
    padding: 30px;
    width: 350px;
    
    margin: auto;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(255, 204, 0, 0.5);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.form-container:hover {
    transform: scale(1.03);
    box-shadow: 0px 0px 20px rgba(255, 204, 0, 0.7);
}

/* Input Fields */
input {
    width: 90%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ffcc00;
    background-color: transparent;
    color: white;
    border-radius: 5px;
    outline: none;
    transition: all 0.3s ease-in-out;
}

input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input:focus {
    border-color: #e6b800;
    box-shadow: 0px 0px 10px rgba(255, 204, 0, 0.7);
}

/* Buttons */
button {
    width: 95%;
    padding: 12px;
    background-color: #ffcc00;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}

button:hover {
    background-color: #e6b800;
    transform: scale(1.05);
    box-shadow: 0px 0px 10px rgba(255, 204, 0, 0.5);
}

/* Tabs */
.tabs {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 10px;
}

/* Tabs Buttons */
.tabs button {
    width: 150px;
    padding: 10px;
    cursor: pointer;
    background-color: transparent;
    border: 1px solid #ffcc00;
    color: #ffcc00;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
    transition: all 0.3s ease-in-out;
}

.tabs button:hover {
    background-color: #ffcc00;
    color: black;
}

/* Links */
/* a.singup {
    color: #ffcc00;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s ease-in-out;
}

a:hover {
    text-decoration: underline;
    color: #e6b800;
} */

/* Headings */
h1 {
    font-size: 32px;
    font-weight: bold;
    color: #ffcc00;
    text-shadow: 2px 2px 8px rgba(255, 204, 0, 0.5);
}

h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
}

/* Responsive Design */
@media (max-width: 600px) {
    .tabs {
        flex-direction: column;
        align-items: center;
    }

    .tabs button {
        width: 80%;
    }
}

@media (max-width: 400px) {
    .form-container {
        width: 90%;
        padding: 20px;
    }
}

    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <!-- User Login -->
        <div id="user-login">
            <h2>User Login</h2>
            <form action="login.php" method="post">
                <input type="hidden" name="role" value="user_login">
                <input type="text" name="name" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a name="singup"href="#" onclick="showSignup()">Sign Up</a></p>
        </div>

        <!-- Admin Login -->
        <div id="admin-login" style="display: none;">
            <h2>Admin Login</h2>
            <form action="login.php" method="post">
                <input type="hidden" name="role" value="admin_login">
                <input type="text" name="name" placeholder="Admin Name" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- User Signup -->
        <div id="signup" style="display: none;">
            <h2>Sign Up</h2>
            <form id="signup-form" action="login.php" method="post" onsubmit="return validateSignupForm()">
                <input type="hidden" name="role" value="signup">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
        </div>
    </div>

    <!-- Tabs for switching forms -->
    <div class="tabs">
        <button onclick="showLogin()">User Login</button>
        <button onclick="showAdmin()">Admin Login</button>
        <button onclick="showSignup()">Sign Up</button>
    </div>
</div>

<script>
    function validateSignupForm() {
    const email = document.querySelector('#signup-form input[name="email"]').value;

    // Check if the email ends with '@gmail.com'
    const gmailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    if (!gmailRegex.test(email)) {
        alert("Please enter a valid Gmail address. Example:- abc@gmail.com");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}

function showForm(formId) {
    let forms = document.querySelectorAll('.form-container');
    forms.forEach(form => form.style.display = 'none');

    document.getElementById(formId).style.display = 'block';
}

function showLogin() {
    document.getElementById("user-login").style.display = "block";
    document.getElementById("admin-login").style.display = "none";
    document.getElementById("signup").style.display = "none";
}

function showAdmin() {
    document.getElementById("user-login").style.display = "none";
    document.getElementById("admin-login").style.display = "block";
    document.getElementById("signup").style.display = "none";
}

function showSignup() {
    document.getElementById("user-login").style.display = "none";
    document.getElementById("admin-login").style.display = "none";
    document.getElementById("signup").style.display = "block";
}
</script>

</body>
</html>

<?php include 'footer.php'; ?>