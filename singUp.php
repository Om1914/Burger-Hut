<?php
include 'header.php'; 
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!'); window.location.href = 'signUp.php';</script>";
        exit();
    }

    // // Password validation
    // if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
    //     echo "<script>alert('Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character.'); window.location.href = 'signUp.php';</script>";
    //     exit();
    // }

    // Confirm password check
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href = 'signUp.php';</script>";
        exit();
    }

    // Check if email exists
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check_email);
    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists! Please use a different email.'); window.location.href = 'signUp.php';</script>";
        exit();
    }

    // Hash password and insert user
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful! Redirecting to login...'); window.location.href = 'login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Database error: " . $conn->error . "'); window.location.href = 'signUp.php';</script>";
    }
    
    $conn->close();
}
?>

<html>
  <head>
<style>


      /* General body and container styling */
.signup-container {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: url('https://t4.ftcdn.net/jpg/05/62/17/79/360_F_562177976_dH3SgNcJBPjkvonJIyBvemkNCvPfOEKB.jpg') no-repeat center center fixed;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center; /* Center the image */
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeIn 2s ease-out;
}

/* Signup card styling */
.signup-card {
    background-color: rgba(0, 0, 0, 0.8); /* Dark semi-transparent background */
    padding: 40px 50px;
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    text-align: center;
    width: 100%;
    max-width: 450px;
    animation: slideIn 1s ease-out;
}

/* Header Style */
.signup-card h2 {
    color: #ffcc00;
    margin-bottom: 20px;
    font-size: 2.2rem;
    animation: fadeInDown 1s ease-out;
}

/* Input Group Styling */
.input-group {
    margin-bottom: 20px;
    text-align: left;
    animation: fadeIn 1s ease-out;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    color: #ffcc00;
    font-weight: bold;
}

/* Input Fields Styling */
.input-group input {
    width: 100%;
    padding: 12px;
    border: 2px solid #444;
    border-radius: 8px;
    background-color: #333;
    color: #fff;
    font-size: 1rem;
    margin-bottom: 15px;
    transition: background-color 0.3s ease, border 0.3s ease;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
}

/* Input hover and focus effects */
.input-group input:hover {
    background-color: #444;
    border-color: #ffcc00;
}

.input-group input:focus {
    background-color: #555;
    border-color: #ffcc00;
    outline: none;
    box-shadow: 0 0 5px #ffcc00;
}

/* Button Styling */
.signup-btn {
    background-color: #ffcc00;
    color: #1e1e1e;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.1rem;
    width: 100%;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
}

/* Button hover effect */
.signup-btn:hover {
    background-color: #e6b800;
    transform: scale(1.05);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.5);
}

/* Signup Text Styling */
.login-text {
    color: #fff;
    margin-top: 15px;
    font-size: 1rem;
}

.login-text a {
    color: #ffcc00;
    text-decoration: none;
    font-weight: bold;
}

/* Hover effect for Login text */
.login-text a:hover {
    text-decoration: underline;
}

/* Animations */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    0% {
        opacity: 0;
        transform: translateX(100%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

</style>
<script>
        function validateForm() {
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm-password").value;
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // let passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // if (!passwordRegex.test(password)) {
            //     alert("Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character.");
            //     return false;
            // }

            // if (password !== confirmPassword) {
            //     alert("Passwords do not match.");
            //     return false;
            // }

            return true;
        }
    </script>

  </head>
  <body>
    <div class="signup-container">
        <div class="signup-card">
            <h2>Create Account</h2>
            <form action="login.php" method="post" onsubmit="return validateForm();">
                <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter a password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="signup-btn" href="login.php">Sign Up</button>
            </form>
            <p class="login-text">Already have an account? <a href="login.php">Log In</a></p>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php'; ?>