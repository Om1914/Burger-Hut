<style>
  /* Footer Styling */
.footer {
  background-color: #121212; /* Dark theme background */
  color: #ffffff; /* Light text */
  padding: 50px 20px;
  font-size: 14px;
  line-height: 1.6;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  gap: 20px;
}

/* Footer Sections */
.footer-about,
.footer-links,
.footer-social {
  flex: 1 1 300px;
}

.footer-about h3,
.footer-links h3,
.footer-social h3 { /* Added semicolon here */
  font-size: 20px;
  color: #ffcc00; /* Highlight color */
  margin-bottom: 15px;
}

.footer-about p {
  color: #dddddd;
}

.footer-links ul {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 10px;
}

.footer-links a {
  color: #ffcc00; /* Yellow highlight */
  text-decoration: none;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #e6b800; /* Slightly darker yellow */
}

/* Social Media Icons */
.footer-social .social-icons a {
  font-size: 30px;
  margin-right: 15px;
  transition: transform 0.3s, color 0.3s;
  color: inherit; /* Ensure icon color follows its original color */
}

/* Facebook Icon Color */
.footer-social .social-icons a i.fa-facebook-f {
  color: #3b5998; /* Facebook's original blue */
}

/* LinkedIn Icon Color */
.footer-social .social-icons a i.fa-linkedin {
  color: #0077b5; /* LinkedIn's original blue */
}

/* Instagram Icon Color */
.footer-social .social-icons a i.fa-instagram {
  color: #e4405f; /* Instagram's original pinkish-red */
}

/* YouTube Icon Color */
.footer-social .social-icons a i.fa-youtube {
  color: #ff0000; /* YouTube's original red */
}

/* Hover Effects */
.footer-social .social-icons a:hover {
  transform: scale(1.2); /* Slight zoom on hover */
  color: #e6b800; /* Slightly darker yellow on hover */
}

/* Footer Bottom */
.footer-bottom {
  text-align: center;
  margin-top: 30px;
  border-top: 1px solid #333;
  padding-top: 15px;
  color: #777777;
}

/* Footer Quick Links */
.footer-links ul {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 10px;
}

.footer-links a {
  color:rgb(245, 244, 236); /* Set the default color to yellow */
  text-decoration: none; /* Remove underlining from links */
  font-size: 16px; /* Set font size */
  transition: color 0.3s ease, text-decoration 0.3s ease; /* Smooth transition */
}

.footer-links a:hover {
  color:rgb(232, 189, 80); /* Change color to a darker yellow on hover */
  text-decoration: underline; /* Add underline on hover */
}

/* about section */
/* Footer About Section */


.footer-about h3 {
  font-size: 20px;
  color: #ffcc00; /* Yellow color for the heading */
  margin-bottom: 15px;
}

.footer-about p {
  color:rgb(245, 244, 236); /* Light grey text for the paragraphs */
  font-size: 16px;
  margin-bottom: 10px;
}

/* Adding hover effect to text */
.footer-about p:hover {
  color: #e6b800; /* Change text color on hover */
  cursor: pointer; /* Change cursor to indicate interactivity */
}


/* footer bottom */
/* Footer Bottom */
.footer-bottom {
  background-color: rgb(245, 244, 236); /* Dark background to match the footer */
  color:black; /* Light grey color for text */
  text-align: center;
  padding: 15px 0;
  font-size: 14px;
  border-top: 1px solid #333; /* Subtle divider to separate footer */
}

.footer-bottom p {
  margin: 0;
  font-size: 16px;
}

.footer-bottom p a {
  color: #ffcc00; /* Yellow color for links */
  text-decoration: none;
}

.footer-bottom p a:hover {
  color: #e6b800; /* Darker yellow for hover */
  text-decoration: underline; /* Underline on hover */
}

</style>
<footer class="footer">
  <div class="footer-container">
    <!-- About Section -->
    <div class="footer-about">
      <h3>Contact Us</h3>
      <p>
        
      <p>123 Burger Lane, Food City, FC 4567</p>
      <p>Phone: (123) 456-7890</p>
      <p>Email: contact@burgerhut.com</p>
      </p>
    </div>

    <!-- Quick Links -->
    <div class="footer-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>

    <!-- Social Media -->
    <div class="footer-social">
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/omkar-suryawanshi-4b43b6341" target="_blank"><i class="fab fa-linkedin"></i></a> <!-- Corrected LinkedIn icon -->
        <a href="https://www.instagram.com/omkar" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <!-- Copyright Section -->
  <div class="footer-bottom">
    <p>&copy; 2025 Burger Hut. All Rights Reserved.</p>
  </div>
</footer>

  
  <!-- <script src="script.js"></script> -->
</body>
</html>
