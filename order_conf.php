<?php
include 'db_connection.php';
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['name'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $cartData = $_POST['cartData']; // JSON string of cart items

    // Calculate total price from cart items
    $cart_items = json_decode($cartData, true);
    $total_price = 0;
    foreach ($cart_items as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }

    try {
        // Prepare SQL statement to insert order data
        $stmt = $conn->prepare("INSERT INTO orders (customer_name, phone, location, cart_items, total_price) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("SQL prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ssssd", $customer_name, $phone, $location, $cartData, $total_price);

        if ($stmt->execute()) {
            echo "Order placed successfully!";
            header("Location: OrderPlaced1.php");
            exit;
        } else {
            throw new Exception("SQL execute failed: " . $stmt->error);
        }
    } catch (Exception $e) {
        echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
