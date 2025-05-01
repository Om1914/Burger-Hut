<?php include 'admin_dashboard.php'; 
include 'Db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO menu (name, detail, price, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssds", $name, $detail, $price, $image);

        if ($stmt->execute()) {
            echo "<p style='color:green;'>New item added successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . htmlspecialchars($stmt->error) . "</p>";
        }

        $stmt->close();
    } else {
        echo "<p style='color:red;'>Error preparing statement: " . htmlspecialchars($conn->error) . "</p>";
    }
}

$conn->close();
?>

<html>
    <body>
        <style>
            /* ===== Heading ===== */
            h2 {
    color: #333;
    text-align: center;
    align-items: center;
    animation: fade-in 2s ease-in-out;
}

/* @keyframes fade-in {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
} */


            /* ===== Form Container ===== */
            form {
                background: white;
               margin-bottom: 50%;
               margin-top: 5%;
               margin-left: 15%;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                max-width: 500px;
                width: 50%;
                text-align: center;
                animation: fadeIn 1s ease-in-out;
            }

            /* ===== Input Fields ===== */
            label {
                display: block;
                text-align: left;
                font-size: 1rem;
                font-weight: bold;
                margin-top: 10px;
                color: #555;
            }

            input {
                width: 80%;
                padding: 10px;
                border: 2px solid #ddd;
                border-radius: 8px;
                font-size: 1rem;
                margin-top: 5px;
                transition: all 0.3s ease-in-out;
            }

            input:focus {
                border-color: #ff5722;
                outline: none;
            }

            /* ===== Button Styling ===== */
            button {
                background: #ff5722;
                color: white;
                border: none;
                padding: 12px;
                font-size: 1.2rem;
                cursor: pointer;
                border-radius: 8px;
                width: 100%;
                margin-top: 15px;
                transition: background 0.3s ease-in-out, transform 0.2s;
            }

            button:hover {
                background: #e64a19;
                transform: scale(1.05);
            }

            /* ===== Success/Error Messages ===== */
            p {
                font-size: 1rem;
                font-weight: bold;
                text-align: center;
                margin-top: 15px;
            }

            /* ===== Animations ===== */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>

        
        <form action="" method="POST">
        <h2>Add New Menu Item</h2>
            <label for="name">Burger Name:</label>
            <input type="text" name="name" required><br>

            <label for="detail">Details:</label>
            <input type="text" name="detail" required><br>

            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" required><br>

            <label for="image">Image Path:</label>
            <input type="text" name="image" required><br>

            <button type="submit">Add Item</button>
        </form>

    </body>
</html>
