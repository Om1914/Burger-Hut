<?php include 'header.php'; ?>  
<style>
  /* Reviews Section */
.reviews {
  background-color: rgb(13, 14, 15);
  padding: 50px 0;
  color: #fff; /* Ensure the text is white for contrast */
  text-align: center; /* Center-align content */
  overflow: hidden; /* Hide overflow for slider effect */
}

.reviews-container {
  display: flex;
  gap: 30px; /* Space between the review boxes */
  animation: slideReviews 15s infinite linear; /* Auto sliding effect */
  width: calc(300px * 5 + 30px * 4); /* Adjust width based on total reviews */
}

.review-box {
  background-color: #fff; /* White background for individual review boxes */
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  width: 300px; /* Set a fixed width for each review box */
  min-width: 280px; /* Ensure a minimum width for readability */
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.review-box:hover {
  transform: scale(1.05); /* Slight zoom effect on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.review-header {
  display: flex;
  align-items: center;
  gap: 15px; /* Space between photo and name */
}

.review-photo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #ddd; /* Border for the photo */
}

.review-name {
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

.review-text {
  font-size: 18px;
  color: #555;
  font-style: italic;
}

.rating {
  color: #ffcc00;
  font-size: 20px;
  margin: 5px 0;
}

.question-mark {
  position: absolute;
  top: 5px; /* Position near the top-right */
  right: 10px;
  font-size: 80px;
  color: #999; /* Grey color for subtle appearance */
  cursor: pointer; /* Indicate interactivity */
  transition: transform 0.3s ease, color 0.3s ease;
}

.question-mark:hover {
  transform: scale(1.2); /* Slightly enlarge on hover */
  color: #ffcc00; /* Golden color on hover */
}

.reviews h4 {
  font-size: 20px;
  font-weight: bold;
  color: rgb(220, 217, 205); /* Golden color */
  margin-bottom: 10px;
  text-transform: uppercase;
}

.reviews h5 {
  font-size: 15px;
  font-weight: 500;
  color: rgb(185, 103, 103); /* Muted white for a contrast effect */
  margin-bottom: 30px;
  letter-spacing: 1px; /* Add spacing for a polished look */
  text-transform: capitalize;
}

/* Keyframes for sliding reviews */
@keyframes slideReviews {
  0% {
    transform: translateX(0);
  }
  20% {
    transform: translateX(-20%);
  }
  40% {
    transform: translateX(-40%);
  }
  60% {
    transform: translateX(-60%);
  }
  80% {
    transform: translateX(-80%);
  }
  100% {
    transform: translateX(0);
  }
}


   /* Services Section */
   .services {
    background-color: rgb(13, 14, 15); /* Light background for contrast */
    padding: 50px 0;
    text-align: center;
    color: #333; /* Dark text for readability */
  }

  .services h2 {
    font-size: 28px;
    font-weight: bold;
    color: #ff6600; /* Highlight color */
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .services h5 {
    font-size: 16px;
    font-weight: 500;
    color: #666;
    margin-bottom: 40px;
  }

  .services-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
  }

  .service-box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
  }

  .service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  }

  .service-icon {
    font-size: 40px;
    color: #ff6600; /* Match highlight color */
    margin-bottom: 15px;
  }

  .service-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
  }

  .service-description {
    font-size: 14px;
    color: #666;
  }
  .services {
    padding: 50px 0;
    text-align: center;
    color: #333; /* Dark text for readability */
  }

  .services h3 {
    font-size: 28px;
    font-weight: bold;
    color: #ff6600; /* Highlight color */
    margin-bottom: 20px;
    text-transform: uppercase;
    animation: slideIn 1s ease-in-out;
  }

  .services h5 {
    font-size: 16px;
    font-weight: 500;
    color: white;
    margin-bottom: 40px;
    animation: slideIn 1.2s ease-in-out;
  }

  .services-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
  }

  .service-box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
    opacity: 0; /* Start invisible */
    animation: fadeInUp 0.8s ease forwards;
  }

  .service-box:nth-child(1) {
    animation-delay: 0.2s;
  }

  .service-box:nth-child(2) {
    animation-delay: 0.4s;
  }

  .service-box:nth-child(3) {
    animation-delay: 0.6s;
  }

  .service-box:nth-child(4) {
    animation-delay: 0.8s;
  }

  .service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  }

  .service-icon {
    font-size: 40px;
    color: #ff6600; /* Match highlight color */
    margin-bottom: 15px;
  }

  .service-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
  }

  .service-description {
    font-size: 14px;
    color: #666;
  }

  /* Animations */
  @keyframes slideIn {
    from {
      transform: translateY(-50px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }







  /* Burger Information Section */
.burger-info {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  background-color: rgb(13, 14, 15);
}

.burger-info-container {
  display: flex;
  gap: 20px;
  max-width: 1200px;
  width: 100%;
}

.burger-image img {
  width: 100%;
  max-width: 500px;
  border-radius: 50%; /* Makes the image round */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  object-fit: cover; /* Ensures the image maintains proper proportions */
}


.burger-details {
  flex: 1;
}

.burger-details h2 {
  font-size: 2rem;
  color: white;
  margin-bottom: 20px;
}

.burger-details p {
  font-size: 1.2rem;
  line-height: 1.6;
  color: white;
  margin-bottom: 20px;
}

.btn-primaryi {
  display: inline-block;
  padding: 10px 20px;
  font-size: 1rem;
  color: #fff;
  background-color:#e64a19;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn-primaryi:hover {
  background-color:#e64a19;
}

/* Pizza Information Section */
.pizza-info {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  background-color: rgb(13, 14, 15); /* Dark background for pizza section */
}

.pizza-info-container {
  display: flex;
  gap: 20px;
  max-width: 1200px;
  width: 100%;
  flex-direction: row; /* Image on the left and text on the right */
}

.pizza-image img {
  width: 100%;
  max-width: 500px;
  border-radius: 50%; /* Round shape */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow effect */
  object-fit: cover; /* Maintains proper aspect ratio */
}

.pizza-details {
  flex: 1;
}

.pizza-details h2 {
  font-size: 2rem;
  color: white; /* White text for consistency */
  margin-bottom: 20px;
}

.pizza-details p {
  font-size: 1.2rem;
  line-height: 1.6;
  color: white;
  margin-bottom: 20px;
}

.pizza-info .btn-primaryi {
  display: inline-block;
  padding: 10px 20px;
  font-size: 1rem;
  color: #fff;
  background-color: #ff7043; /* Orange button for pizza section */
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.pizza-info .btn-primaryi:hover {
  background-color: #e64a19; /* Darker orange hover effect */
}










/* Ads Section */
.ads-section {
  padding: 2rem;
  text-align: center;
  background-color: rgb(13, 14, 15); /* Black background */
  color: #fff; /* White text for contrast */
}

.ads-section h3 {
  font-size: 1.8rem;
  margin-bottom: 1.5rem;
  color: #fff;
}

.slider-container {
  overflow: hidden;
  position: relative;
  width: 100%;
  max-width: 1200px; /* Increased max width */
  margin: 0 auto;
}

.slider {
  display: flex;
  gap: 2rem; /* Increased gap between slides */
  animation: slide 10s infinite linear;
  width: calc(400px * 5 + 2rem * 4); /* Updated total slide width with new size and gap */
}

.slide {
  flex: 0 0 350px; /* Width of each slide */
  height: 350px; /* Height of each slide */
  display: flex; /* Make slide a flex container */
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
  position: relative;
  transition: transform 0.3s ease;
  background: #222; /* Background color for empty space */
}

.slide img {
  width: 80%;
  height: 80%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

/* Hover animation for slides */
.slide:hover {
  transform: scale(1.1);
  box-shadow: 0 8px 15px rgba(255, 255, 255, 0.3);
}

.slide:hover img {
  transform: scale(1.2);
}

/* Discounts Container */
.discounts-container {
  text-align: center;
  margin-top: 2rem;
}

/* Main Heading */
.discounts-heading {
  font-size: 2.5rem;
  font-weight: bold;
  background: linear-gradient(90deg, #ff7e5f, #feb47b); /* Vibrant gradient */
  color: transparent; /* Makes the text transparent */
  background-clip: text; /* Clips background to text */
  -webkit-text-fill-color: transparent; /* Ensures text fill remains transparent */
  animation: fade-in-heading 1.5s ease-in-out; /* Fade-in animation */
  margin: 0;
}


/* Subheading */
.discounts-subheading {
  font-size: 1.2rem;
  color: #e0e0e0; /* Soft white for text */
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5); /* Subtle shadow */
  margin-top: 1rem;
  background: linear-gradient(90deg, #ff7e5f, #feb47b); /* Gradient background */
  padding: 0.5rem 1rem; /* Padding for the tag effect */
  display: inline-block; /* Inline-block to wrap content */
  border-radius: 20px; /* Rounded edges for a tag-like appearance */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Tag shadow for depth */
  animation: fade-in-subheading 2s ease-in-out forwards;
  opacity: 0; /* Start hidden */
}

/* Hover effect for the tag */
.discounts-subheading:hover {
  transform: scale(1.05); /* Slight zoom on hover */
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
}

/* Fade-in animation */
@keyframes fade-in-subheading {
  0% {
    opacity: 0;
    transform: translateY(20px); /* Slight slide-in effect */
  }
  100% {
    opacity: 1;
    transform: translateY(0); /* End position */
  }
}

/* Animations */
/* Main heading fade-in animation */
@keyframes fade-in-heading {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Subheading fade-in animation */
@keyframes fade-in-subheading {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}


/* Keyframes for the sliding effect */
@keyframes slide {
  0% {
    transform: translateX(0);
  }
  20% {
    transform: translateX(-20%);
  }
  40% {
    transform: translateX(-40%);
  }
  60% {
    transform: translateX(-60%);
  }
  80% {
    transform: translateX(-80%);
  }
  100% {
    transform: translateX(0);
  }
}


/********* Latest News Section CSS *********/
.latest-news {
  margin-top: 50px;
  padding: 20px;
  background-color: rgb(13, 14, 15);
  position: relative;
  overflow: hidden;
}

.animated-heading {
  font-size: 2.5rem;
  color: #ffcc00;
  text-align: center;
  margin-bottom: 10px;
  animation: fadeIn 2s ease-in-out;
}

.animated-subheading {
  text-align: center;
  color: #aaa;
  margin-bottom: 20px;
  animation: fadeInUp 2s ease-in-out;
}

.news-slider {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.news-container {
  display: flex;
  gap: 20px; /* Add specific space between news boxes */
  width: calc(300px * 5 + 20px * 4); /* Adjust for the number of news boxes and gaps */
  animation: slide 20s infinite linear;
}


.news-box {
  width: 300px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.news-image img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.news-content {
  padding: 15px;
}

.news-content h4 {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #333;
}

.news-content p {
  font-size: 0.9rem;
  color: #555;
  margin-bottom: 10px;
}

.btn-primaryi {
  display: inline-block;
  padding: 10px 15px;
  background-color: #ffcc00;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn-primaryi:hover {
  background-color: #e6b800;
}

/********* Animations *********/
@keyframes slide {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-1500px); /* Adjust for total slider width */
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}


</style>

<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <h1>Welcome to <span>Burger Hut</span></h1>
    <p>Are You Hungry?</p>
    <h1>Don't Wait</h1>
    <p>Let Start to Order Food Now</p>
    <div class="hero-buttons">
      <a href="menu.php" class="btn-primary">View Menu</a>
      <a href="OrderNow.php" class="btn-secondary">Order Now</a>
      <!-- <a href="index.php" class="btn-primary">cancel</a> -->
    </div>
  </div>
</section>


<!-- Burger Information Section -->
<section class="burger-info">
  <div class="burger-info-container">
    <div class="burger-image">
      <img src="https://crunchymunchie.in/wp-content/uploads/2024/04/Veg-Burger.jpg" alt="Delicious Burger" />
    </div>
    <div class="burger-details">
      <h2>About Our Burgers</h2>
      <p>At Burger Hut, we believe in quality and flavor. Our burgers are crafted with the freshest ingredients and a passion for delicious food. From classic favorites to unique gourmet options, we’ve got something for everyone.</p>
      <p>Our signature sauces and perfectly seasoned patties will leave you coming back for more. Whether you're craving a classic cheeseburger or something adventurous, we’ve got you covered!</p>
      <a href="menu.php" class="btn-primaryi">Explore Our Menu</a>
    </div>
  </div>
</section>


<!-- Pizza Information Section -->
<section class="pizza-info">
  <div class="pizza-info-container">
    <div class="pizza-details">
      <h2>About Our Pizzas</h2>
      <p>
        At Burger Hut, we also serve mouthwatering pizzas crafted with a perfect blend of fresh dough, quality toppings, and our signature sauces. Whether you like it classic or loaded with toppings, we’ve got your pizza cravings covered!
      </p>
      <p>
        From cheesy margherita to fully-loaded supreme, our pizzas promise satisfaction in every bite. Order now and enjoy the perfect combination of crust, sauce, and toppings!
      </p>
      <a href="menu.php" class="btn-primaryi">Explore Our Menu</a>
    </div>
    <div class="pizza-image">
      <img src="https://t3.ftcdn.net/jpg/00/27/57/96/360_F_27579652_tM7V4fZBBw8RLmZo0Bi8WhtO2EosTRFD.jpg" alt="Delicious Pizza" />
    </div>
  </div>
</section>

<!-- Burger and Pizza Hut Ads Slider -->
<section class="ads-section">
  <div class="discounts-container">
    <h3 class="discounts-heading">Our Discounts</h3>
    <p class="discounts-subheading">Exclusive deals just for you!</p>
  </div>

  <div class="slider-container">
    <div class="slider">
      <div class="slide">
        <a href="menu.php">
          <img src="https://i.pinimg.com/736x/d8/fd/03/d8fd0344e7e9e94b6437aadad390a940.jpg" alt="Burger Ad 1" />
        </a>
      </div>
      <div class="slide">
        <a href="menu.php">
          <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/pizza-shop-instagram-ad-design-template-3d51cfacae02372bd7c716d2a99b2578_screen.jpg?ts=1614399799" alt="Pizza Ad 1" />
        </a>
      </div>
      <div class="slide">
        <a href="menu.php">
          <img src="https://marketplace.canva.com/EAGGFXb7LZg/5/0/1600w/canva-red-and-white-bold-burger-sale-animated-social-media-KA1LZ9LmTFk.jpg" alt="Burger Ad 2" />
        </a>
      </div>
      <div class="slide">
        <a href="menu.php">
          <img src="https://i.pinimg.com/736x/bb/5c/10/bb5c10eb671a808327dd178456edb816.jpg" alt="Pizza Ad 2" />
        </a>
      </div>
      <div class="slide">
        <a href="menu.php">
          <img src="https://img.pikbest.com/templates/20240509/spirited-mothers-day-holiday-wishes-222024-png-images-png_10557272.jpg!w700wp" alt="Ad 3" />
        </a>
      </div>
      <div class="slide">
        <a href="menu.php">
          <img src="https://i.pinimg.com/736x/87/e2/8a/87e28ac46427097f29129d26d999f925.jpg" alt="Ad 3" />
        </a>
      </div>
      <div class="slide">
        <a href="menu.php">
          <img src="https://img.pikbest.com/templates/20240509/spirited-mothers-day-holiday-wishes-222024-png-images-png_10557272.jpg!w700wp" alt="Ad 3" />
        </a>
      </div>
    </div>
  </div>
</section>





<!-- Services Section -->
<section class="services">
  <h3>Our Services</h3>
  <h5>We deliver quality and satisfaction</h5>
  <div class="services-container">
    <div class="service-box">
      <div class="service-icon">🍔</div>
      <div class="service-title">Delicious Burgers</div>
      <div class="service-description">Enjoy a variety of freshly prepared burgers made with quality ingredients.</div>
    </div>
    <div class="service-box">
      <div class="service-icon">🚚</div>
      <div class="service-title">Fast Delivery</div>
      <div class="service-description">Get your food delivered to your doorstep quickly and efficiently.</div>
    </div>
    <div class="service-box">
      <div class="service-icon">🍟</div>
      <div class="service-title">Sides & Drinks</div>
      <div class="service-description">Complement your meals with tasty sides and refreshing beverages.</div>
    </div>
    <div class="service-box">
      <div class="service-icon">💻</div>
      <div class="service-title">Online Ordering</div>
      <div class="service-description">Easily order your favorite meals online through our user-friendly platform.</div>
    </div>
    <div class="service-box">
      <div class="service-icon">🎉</div>
      <div class="service-title">Event Catering</div>
      <div class="service-description">Make your events special with our professional catering services tailored to your needs.</div>
    </div>
    <div class="service-box">
      <div class="service-icon">👨‍🍳</div>
      <div class="service-title">Custom Orders</div>
      <div class="service-description">Personalize your meals with custom orders designed to suit your taste.</div>
    </div>
  </div>
</section>


<section class="latest-news">
  <h3 class="animated-heading">Our Latest News & Articles</h3>
  <h5 class="animated-subheading">Stay Updated with Burger Hut</h5>
  <div class="news-slider">
    <div class="news-container">
      <!-- News Box 1 -->
      <div class="news-box">
        <div class="news-image">
          <img src="https://img.freepik.com/free-photo/front-view-burger-stand_141793-15555.jpg" alt="New Burger Launch">
        </div>
        <div class="news-content">
          <h4>New Burger Launch</h4>
          <p>We've just launched our newest addition to the menu: the Smoky BBQ Double Decker! Try it today.</p>
          <a href="#" class="btn-primaryi">Read More</a>
        </div>
      </div>

      <!-- News Box 2 -->
      <div class="news-box">
        <div class="news-image">
          <img src="https://img.freepik.com/free-photo/family-having-fun-together-eating_23-2148948432.jpg" alt="Family Special Deals">
        </div>
        <div class="news-content">
          <h4>Family Special Deals</h4>
          <p>Enjoy exclusive family meal combos and discounts every weekend. Bring your loved ones to Burger Hut!</p>
          <a href="#" class="btn-primaryi">Read More</a>
        </div>
      </div>

      <!-- News Box 3 -->
      <div class="news-box">
        <div class="news-image">
          <img src="https://img.freepik.com/free-photo/fried-potato-glass-dark-beer_140725-7747.jpg" alt="New Beverage Line">
        </div>
        <div class="news-content">
          <h4>New Beverage Line</h4>
          <p>Introducing refreshing new beverages to perfectly complement your meal. Check them out now!</p>
          <a href="#" class="btn-primaryi">Read More</a>
        </div>
      </div>

      <!-- News Box 4 -->
      <div class="news-box">
        <div class="news-image">
          <img src="https://img.freepik.com/free-photo/delicious-fast-food-burger_144627-18289.jpg" alt="Special Events">
        </div>
        <div class="news-content">
          <h4>Special Events</h4>
          <p>Join us this weekend for live music and a burger festival at select locations!</p>
          <a href="#" class="btn-primaryi">Read More</a>
        </div>
      </div>

      <!-- Repeat News Boxes to create seamless looping -->
      <div class="news-box">
        <div class="news-image">
          <img src="https://img.freepik.com/free-photo/front-view-burger-stand_141793-15555.jpg" alt="New Burger Launch">
        </div>
        <div class="news-content">
          <h4>New Burger Launch</h4>
          <p>We've just launched our newest addition to the menu: the Smoky BBQ Double Decker! Try it today.</p>
          <a href="#" class="btn-primaryi">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Reviews Section -->
<section class="reviews">
  <h4>Customer Reviews</h4>
  <h5>WHAT THEY SAY</h5>
  <div class="reviews-container">
    <!-- Review 1 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://www.shutterstock.com/image-photo/portrait-young-investor-banker-workplace-260nw-2364566447.jpg" alt="John Doe" class="review-photo" />
        <span class="review-name">John Doe</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"The best burgers in town! Highly recommend the double cheese."</p>
      <div class="rating">★★★★☆</div>
    </div>

    <!-- Review 2 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUJs0MDVormc2D4v8SrLlmB6LE3OiHbT76JScixL6g5HDidgDTfeJkwKM&s.jpg" alt="Blake Lively" class="review-photo" />
        <span class="review-name">Blake Lively</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"I love the quick service and fresh ingredients. My go-to spot for lunch."</p>
      <div class="rating">★★★★★</div>
    </div>

    <!-- Review 3 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://t4.ftcdn.net/jpg/02/44/80/33/240_F_244803369_cNviClISSSUV5FGcYsJR9anLrqiRrHVK.jpg" alt="Sam Wilson" class="review-photo" />
        <span class="review-name">Sam Wilson</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"Amazing flavors, friendly staff, and great atmosphere. Burger Hut never disappoints!"</p>
      <div class="rating">★★★★☆</div>
    </div>

    <!-- Review 4 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://i.pravatar.cc/50?img=4" alt="Emily Davis" class="review-photo" />
        <span class="review-name">Emily Davis</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"Affordable prices and generous portions. The fries are crispy and perfectly seasoned!"</p>
      <div class="rating">★★★★☆</div>
    </div>

    <!-- Review 5 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://i.pravatar.cc/50?img=12" alt="Michael Brown" class="review-photo" />
        <span class="review-name">Michael Brown</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"Fantastic customer service! The team is always friendly and welcoming."</p>
      <div class="rating">★★★★★</div>
    </div>

    <!-- Review 6 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://i.pravatar.cc/50?img=6" alt="Olivia Johnson" class="review-photo" />
        <span class="review-name">Olivia Johnson</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"Delicious veggie burger options for vegetarians! Highly impressed with the taste."</p>
      <div class="rating">★★★★★</div>
    </div>

    <!-- Review 7 -->
    <div class="review-box">
      <div class="review-header">
        <img src="https://i.pravatar.cc/50?img=20" alt="Chris Lee" class="review-photo" />
        <span class="review-name">Chris Lee</span>
      </div>
      <span class="question-mark">,,</span>
      <p class="review-text">"The milkshakes are to die for! My favorite is the chocolate fudge shake."</p>
      <div class="rating">★★★★★</div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
