<?php
// Ensure session_start() is called at the top of the script
session_start();

// Define $order_placed variable to avoid warnings
$order_placed = isset($_SESSION['order_placed']) ? $_SESSION['order_placed'] : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Placed - Burger Hut</title>
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
      color: #fff;
      background: linear-gradient(135deg, #f39c12, #e74c3c);
      background-size: 400% 400%;
      animation: gradientAnimation 10s ease infinite;
    }

    .order-placed-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
      background: url('https://png.pngtree.com/background/20220714/original/pngtree-big-isolated-motorcycle-vector-colorful-icons-flat-illustrations-of-delivery-by-picture-image_1607599.jpg') no-repeat center center;
      background-size: cover;
      border-radius: 15px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
      padding: 20px;
    }

    .success-icon {
      margin-bottom: 20px;
    }

    /* Animated Checkmark Circle */
    .checkmark-circle {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: radial-gradient(circle, #4caf50 0%, #2e7d32 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
      position: relative;
      animation: bounce 1.5s ease-out infinite;
    }

    .checkmark {
      width: 50px;
      height: 25px;
      border: 5px solid white;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      animation: drawCheckmark 0.8s ease-out forwards;
    }

    h1 {
      font-size: 30px;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 80px;
      animation: fadeInDown 1.5s ease-out;
      color: black;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
    }

    p {
      font-size: 20px;
      margin-bottom: 20px;
      line-height: 1.5;
      animation: fadeInUp 1.5s ease-out;
      color:black;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }

    .button-container {
      margin-top: 5px;
    }

    .btn {
      text-decoration: none;
      padding: 12px 25px;
      font-size: 1rem;
      font-weight: bold;
      color: #fff;
      border-radius: 25px;
      margin: 10px;
      background: linear-gradient(135deg, #3498db, #2980b9);
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s, background 0.3s, box-shadow 0.3s;
    }

    .btn:hover {
      background: linear-gradient(135deg, #6dd5fa, #2980b9);
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.4);
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    @keyframes bounce {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
    }

    @keyframes drawCheckmark {
      0% {
        stroke-dasharray: 50;
        stroke-dashoffset: 50;
      }
      100% {
        stroke-dasharray: 50;
        stroke-dashoffset: 0;
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

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="order-placed-container">
    <?php if ($order_placed): ?>
      <div class="success-icon">
        <div class="checkmark-circle">
          <div class="checkmark"></div>
        </div>
      </div>
      <h1>Order Failed!</h1>
      <p>There was an issue placing your order. Please try again.</p>
    <?php else: ?>
      <h1>Order Placed Successfully!</h1>
      <!-- <p>Thank you for ordering from Burger Hut! Your delicious burger is being prepared and will be ready shortly.</p> -->
    <?php endif; ?>

    <div class="button-container">
      <a href="menu.php" class="btn">Order Again</a>
      <a href="index.php" class="btn">Return to Home</a>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
