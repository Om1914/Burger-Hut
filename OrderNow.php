<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Order Section */
        .order-now {
            padding: 50px 20px;
        }

        .order-header {
            margin-bottom: 30px;
            animation: fadeIn 1s ease-in-out;
        }

        .order-header h2 {
            font-size: 2.5rem;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            animation: bounce 1.5s infinite;
        }

        .order-header p {
            font-size: 1.2rem;
            color: white;
        }

        .burger-menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1100px;
            margin: auto;
        }

        .burger {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            padding: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            animation: slideUp 0.8s ease-in-out;
        }

        .burger:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .burger img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        .burger h2 {
            font-size: 1.8rem;
            color: #333;
            margin: 10px 0;
            transition: color 0.3s ease-in-out;
        }

        .burger:hover h2 {
            color: #ff5722;
        }

        .burger p {
            font-size: 1.4rem;
            font-weight: bold;
            color: #27ae60;
        }

        .quantity-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .quantity-btn {
            background: #ff5722;
            color: white;
            border: none;
            padding: 8px 15px;
            font-size: 1.2rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease-in-out;
        }

        .quantity-btn:hover {
            background: #e64a19;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            border: none;
            background: #f0f0f0;
            padding: 5px;
            border-radius: 5px;
        }

        .add-cart-btn {
            background: #ff5722;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .add-cart-btn:hover {
            background: #e64a19;
            transform: translateY(-3px);
        }

        #cart {
            background: white;
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        #cart p {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        #total-price {
            color: #27ae60;
            font-size: 1.6rem;
            font-weight: bold;
        }

        #cart h2 {
            font-size: 2rem;
            color: #333;
        }

        #cart-items {
            list-style-type: none;
            padding: 0;
            margin: 15px 0;
        }

        #cart-items li {
            font-size: 1.2rem;
            padding: 5px 0;
            color: #555;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form label {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }

        form input {
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form button {
            background: #27ae60;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        form button:hover {
            background: #219150;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        /* Select Dropdown Styling */
select {
    width: 100%;
    padding: 10px 15px;
    font-size: 1rem;
    font-weight: bold;
    color: #333;
    background-color: #f9f9f9;
    border: 2px solid #ccc;
    border-radius: 8px;
    outline: none;
    cursor: pointer;
    transition: border-color 0.3s ease-in-out, transform 0.2s ease-in-out;
}

select:hover {
    border-color: #ff5722;
    transform: scale(1.02);
}

select:focus {
    border-color: #27ae60;
    box-shadow: 0 4px 10px rgba(39, 174, 96, 0.2);
}

option {
    font-size: 1rem;
    font-weight: normal;
    color: #555;
    background-color: #fff;
}

/* Add a smooth fade-in animation */
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

select {
    animation: fadeIn 0.8s ease-in-out;
}





    </style>
</head>
<body>
    <section class="order-now" id="order-now">
        <div class="order-header">
            <h2>Order Now</h2>
            <p>Choose your favorite burgers and place your order below!</p>
        </div>

        <div class="burger-menu">
            <?php include 'db_connection.php'; ?>
            <?php
            $sql = "SELECT * FROM menu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="burger" data-id="' . $row["id"] . '" data-name="' . $row["name"] . '" data-price="' . $row["price"] . '">';
                    echo '<img src="' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["name"]) . '">';
                    echo '<h2>' . htmlspecialchars($row["name"]) . '</h2>';
                    echo '<p>' . $row["price"] . ' Rs</p>';
                    echo '<div class="quantity-container">';
                    echo '<button class="quantity-btn" onclick="decrementQuantity(' . $row["id"] . ')">-</button>';
                    echo '<input type="text" id="quantity-' . $row["id"] . '" class="quantity-input" value="1" readonly>';
                    echo '<button class="quantity-btn" onclick="incrementQuantity(' . $row["id"] . ')">+</button>';
                    echo '</div>';
                    echo '<button class="add-cart-btn" onclick="addToCart(' . $row["id"] . ', \'' . $row["name"] . '\', ' . $row["price"] . ')">Add to Cart</button>';
                    echo '</div>';
                }
            } else {
                echo "<p>No menu items available.</p>";
            }
            $conn->close();
            ?>
        </div>

        <section id="cart">
            <h2>Your Cart</h2>
            <ul id="cart-items"></ul>
            <p>Total: Rs <span id="total-price">0.00</span></p>
            <form action="order_conf.php" method="POST" onsubmit="return getUserDetails()">
                <input type="hidden" name="cartData" id="cartData">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="location">Live Location:</label>
                <input type="text" id="location" name="location" required>
                <select id="cod" name="payment" required>
                    <option value="COD">Cash on Delivery</option>
                </select>
                <button type="submit">Order</button>
            </form>
        </section>
    </section>

    <script>
        let cart = [];

        function incrementQuantity(id) {
            let quantityInput = document.getElementById(`quantity-${id}`);
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decrementQuantity(id) {
            let quantityInput = document.getElementById(`quantity-${id}`);
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }

        function addToCart(id, name, price) {
            let quantity = parseInt(document.getElementById(`quantity-${id}`).value);
            let itemIndex = cart.findIndex(item => item.id === id);
            if (itemIndex !== -1) {
                cart[itemIndex].quantity = quantity;
            } else {
                cart.push({ id, name, price, quantity });
            }
            updateCart();
        }

        function updateCart() {
            let cartItems = document.getElementById('cart-items');
            let totalPrice = document.getElementById('total-price');
            cartItems.innerHTML = '';
            let total = 0;

            cart.forEach(item => {
                let li = document.createElement('li');
                li.textContent = `${item.name} x${item.quantity} - Rs ${(item.price * item.quantity).toFixed(2)}`;
                cartItems.appendChild(li);
                total += item.price * item.quantity;
            });

            totalPrice.textContent = total.toFixed(2);
        }

        function getUserDetails() {
            document.getElementById('cartData').value = JSON.stringify(cart);
            return true;
        }
    </script>
</body>
</html>

<?php include 'footer.php'; ?>
