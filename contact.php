<?php include 'header.php'; 
error_reporting(0);

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "burgerdb"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, address, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $address, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Your message has been submitted successfully!</div>";
        // Redirect to home page after successful submission
        header("Location: index.php");  // Replace 'index.php' with the path to your home page
        exit();  // Don't forget to call exit after header redirection
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: url('https://static.vecteezy.com/system/resources/thumbnails/022/576/027/small_2x/image-of-wooden-table-in-front-of-abstract-blurred-background-of-resturant-lights-wood-table-top-on-blur-of-lighting-in-night-cafe-restaurant-background-selective-focus-generative-ai-photo.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #fff;
    }

    .container {
        max-width: 600px;
        margin: 100px auto;
        background: rgba(0, 0, 0, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        animation: fadeIn 1s ease-in-out;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 2rem;
        color: #ffcc00;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 90%;
        padding: 15px;
        border: none;
        border-radius: 5px;
        background: #333;
        color: #fff;
        font-size: 1rem;
    }

    .form-control:focus {
        outline: none;
        background: #444;
        box-shadow: 0 0 5px #ffcc00;
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #ffcc00;
        color: #000;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: #e6b800;
    }

    .alert {
        margin-top: 20px;
        padding: 10px;
        border-radius: 5px;
    }

    .alert-success {
        background: #4caf50;
        color: #fff;
    }

    .alert-danger {
        background: #f44336;
        color: #fff;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .map-container {
        margin-top: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .map-container h3 {
        color: #ffcc00;
        text-align: center;
        margin-bottom: 10px;
    }

    iframe {
        width: 100%;
        height: 300px;
        border: none;
        border-radius: 10px;
    }
</style>

<div class="container">
    <h2 class="text-center">Contact Us</h2>

    <form method="POST" action="contact.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="map-container">
        <h3>Our Location</h3>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.601463789849!2d73.82723847903249!3d20.025234633386496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddea7258e48163%3A0x6ea01f778559a67f!2sK%20K%20Wagh%20Arts%2C%20Science%20Commerce%20Senior%20College!5e0!3m2!1sen!2sin!4v1742393658009!5m2!1sen!2sin"  
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

<?php include 'footer.php'; ?>
