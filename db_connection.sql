-- database name is "burgerdb"

CREATE TABLE IF NOT EXISTS menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    detail VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

-- Fetch menu items from database
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);




CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_phone VARCHAR(20) NOT NULL,
    user_location TEXT NOT NULL,
    item_id INT NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Fetch cart items from the database
$sql = "SELECT * FROM cart ORDER BY created_at DESC";
$result = $conn->query($sql);

-- Insert data into the cart table
$sql = "INSERT INTO cart (user_name, user_phone, user_location, item_id, item_name, quantity, price, total_price)
        VALUES ('$user_name', '$user_phone', '$user_location', '$item_id', '$item_name', '$quantity', '$price', '$total_price')";
