<?php include 'admin_dashboard.php'; ?>
    <div class="main-content">
        <h2>Manage Orders</h2>
        <?php
include 'Db_connect.php';

$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Order List</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Items Ordered</th>
            <th>Total Price (Rs)</th>
            <th>Order Date</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['order_id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['customer_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "<td>" . htmlspecialchars($row['location']) . "</td>";

        // Decode JSON cart items
        $cart_items = json_decode($row['cart_items'], true);
        echo "<td>";
        foreach ($cart_items as $item) {
            echo htmlspecialchars($item['name']) . " x" . $item['quantity'] . " - Rs " . ($item['price'] * $item['quantity']) . "<br>";
        }
        echo "</td>";

        echo "<td>" . number_format($row['total_price'], 2) . "</td>";
        echo "<td>" . $row['order_date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>No orders found.</p>";
}

$conn->close();
?>