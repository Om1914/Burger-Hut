<?php include 'header.php'; ?>

<html>
  <head>
    <style>
      /* General Styles */
 

      /* Menu Section */
      .menu {
        font-family: Arial, sans-serif;
        background: black;
        margin: 0;
        padding: 0;
        color: #333;
        padding: 50px 20px;
      }

      .menu-header {
        margin-bottom: 30px;
        text-align: center;
        animation: fadeIn 1s ease-in-out;
      }

      .menu-header h2 {
        font-size: 2.5rem;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        animation: bounce 1.5s infinite;
      }

      .menu-header p {
        font-size: 1.2rem;
        color: #f9f9f9;
      }

      /* Menu Grid */
      .menu-items {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
      }

      /* Menu Item */
      .menu-item {
        background: white;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        animation: slideUp 0.8s ease-in-out;
      }

      .menu-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      }

      /* Menu Item Image */
      .menu-item img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.4s ease-in-out, filter 0.4s ease-in-out;
        border-bottom: 2px solid #f9f9f9;
      }

      .menu-item:hover img {
        transform: scale(1.1) rotate(3deg);
        filter: brightness(0.9);
      }

      /* Item Details */
      .item-details {
        padding: 20px;
      }

      .item-details h3 {
        font-size: 1.8rem;
        color: #333;
        text-align: center;
        margin-bottom: 10px;
        transition: color 0.3s ease-in-out;
        font-weight: bold;
      }

      .menu-item:hover h3 {
        color: #ff5722;
      }

      .item-details p {
        font-size: 1.1rem;
        color: #666;
        text-align: center;
        margin-bottom: 10px;
      }

      .item-details span {
        font-weight: bold;
        font-size: 1.4rem;
        text-align: center;
        color: #27ae60;
        display: block;
        margin: 10px 0;
      }

      /* Order Button */
      .btn-order {
        display: block;
        margin: 15px auto;
        padding: 12px 25px;
        text-align: center;
        font-size: 1.1rem;
        font-weight: bold;
        color: white;
        background: #ff5722;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        width: fit-content;
      }

      .btn-order:hover {
        background: #e64a19;
        transform: translateY(-3px);
      }

      /* Animations */
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

      /* Bounce Effect for Headings */
      .menu-header h2 {
        animation: bounce 1.5s infinite;
      }
    </style>
  </head>
  <body>
    <div class="menu">
      <div class="menu-header">
        <h2>Our Delicious Menu</h2>
        <p>Choose from our wide range of mouthwatering burgers, pizzas, and drinks!</p>
      </div>

      <div class="menu-items">
        <?php include 'db_connection.php'; ?>

        <?php
          // Fetch menu items from the database
          $sql = "SELECT * FROM menu";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="menu-item">
                          <img src="' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["name"]) . '">
                          <div class="item-details">
                              <h3>' . htmlspecialchars($row["name"]) . '</h3>
                              <p>' . htmlspecialchars($row["detail"]) . '</p>
                              <span>' . $row["price"] . ' Rs</span>
                              <a href="OrderNow.php" class="btn-order">Order Now</a>
                          </div>
                        </div>';
              }
          } else {
              echo "<p>No menu items available.</p>";
          }

          $conn->close();
        ?>
      </div>
    </div>
  </body>
</html>

<?php include 'footer.php'; ?>
