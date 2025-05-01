<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burger Hut</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
<?php
// Check if a session is already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
  <header>
    <nav class="navbar">
      <div class="logo">
        <a href="#">🍔 Burger Hut</a>
      </div>
      
      <ul class="nav-links">
        <?php if (isset($_SESSION['user'])): ?>
            <!-- Show welcome message if user is logged in -->
            <li>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</li>
        <?php endif; ?>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <!-- Show logout button if user is logged in -->
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <!-- Show login button if user is not logged in -->
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
        <li><a href="OrderNow.php" class="btn-order-now">Order Now</a></li>
      </ul>

      <div class="hamburger" onclick="toggleMenu()">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </nav>
  </header>
  
  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.classList.toggle('active');
    }
  </script>
</body>
</html>
