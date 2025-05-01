<?php include 'header.php'; ?> 


<style>
/* ==========================
   General Page Styling
========================== */
.about-us-page {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.8;
    background: linear-gradient(to bottom, #ffecd2, #fcb69f);
    animation: pageLoadAnimation 2s ease-in-out;
}

/* Page Load Animation */
@keyframes pageLoadAnimation {
    0% {
        opacity: 0;
        transform: scale(0.9) rotateX(10deg);
    }
    50% {
        opacity: 0.5;
        transform: scale(1.05) rotateX(0);
    }
    100% {
        opacity: 1;
        transform: scale(1) rotateX(0);
    }
}

/* ==========================
   About Us Section Styling
========================== */
.about-us {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 4rem 2rem;
    text-align: center;
    line-height: 1.8;
    animation: fadeIn 1.5s ease-in-out;
}

/* Sections Styling */
.about-content,
.about-story,
.about-values,
.about-mission {
    max-width: 900px;
    margin: 2rem auto;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s, box-shadow 0.3s;
    animation: slideIn 1.5s ease-in-out, glowEffect 3s infinite alternate;
}

.about-content:hover,
.about-story:hover,
.about-values:hover,
.about-mission:hover {
    transform: scale(1.1);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
}

/* Background Styling for Sections */
.about-content {
    background: linear-gradient(to right, #f9d423, #ff4e50);
    color: #000;
}

.about-story {
    background: linear-gradient(to right, #89f7fe, #66a6ff);
    color: #fff;
}

.about-values {
    background: linear-gradient(to right, #a8ff78, #78ffd6);
    color: #000;
}

.about-mission {
    background: linear-gradient(to right, #fbc2eb, #a6c1ee);
    color: #fff;
}

/* Section Headings */
.about-content h2,
.about-story h3,
.about-values h3,
.about-mission h3 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    animation: fadeInDown 1.2s ease-in-out;
}

/* Section Paragraphs */
.about-content p,
.about-story p,
.about-values p,
.about-mission p {
    font-size: 1.2rem;
    line-height: 1.8;
    animation: popIn 1.5s ease-in-out;
}

.about-content p {
    color: #000;
}

.about-story p {
    color: #fff;
}

.about-values p {
    color: #000;
}

.about-mission p {
    color: #fff;
}

/* About Values List */
.about-values ul {
    list-style-type: none;
    padding: 0;
    margin: 1rem 0;
    text-align: left;
    font-size: 1.1rem;
}

.about-values li {
    margin: 0.5rem 0;
    animation: slideInFromLeft 1.5s ease-in-out;
}

/* ==========================
   Team Section Styling
========================== */
/* Team Section */
.team {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    margin-top: 2rem;
    animation: fadeInUp 1.5s ease-in-out;
}

.team h3 {
    width: 100%;
    text-align: center;
    font-size: 2rem;
    color: #ff7e5f;
}

.team-member {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    text-align: center;
    width: 250px;
    transition: transform 0.3s ease-in-out;
}

.team-member:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.team-member img {
    width: 100%;
    height: 300px; /* Uniform height */
    object-fit: cover; /* Ensures the image fills the container proportionally */
    aspect-ratio: 1; /* Ensures a perfect square aspect ratio */
    border-radius: 15px; /* Optional: Slight rounding for consistency */
    background-color: #f0f0f0; /* Fallback for cases where images aren't loaded */
}

.team-member h4 {
    margin: 1rem 0 0.5rem;
    font-size: 1.2rem;
    color: #ff7e5f;
}

.team-member p {
    font-size: 1rem;
    color: #666;
    margin-bottom: 1rem;
}

/* Scroll Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
  }
}
</style>

 <!-- About Us Section -->
<section class="about-us" id="about">
  <div class="about-content">
    <h2>About Us</h2>
    <p>
      Welcome to Burger Hut, your ultimate destination for mouthwatering burgers and exceptional service. 
      We pride ourselves on combining fresh ingredients, creative recipes, and a passion for perfection to deliver the best burger experience. 
      Whether you’re dining in, taking out, or ordering online, Burger Hut is here to make every meal unforgettable.
    </p>
  </div>

  <div class="about-story">
    <h3>Our Story</h3>
    <p>
      Burger Hut began its journey in 2020 as a small, family-run business with a dream to redefine how burgers are made and enjoyed. 
      From our humble beginnings with a single grill to becoming a beloved community favorite, our story is rooted in a love for food, family, and our customers. 
      Today, we continue to evolve while staying true to our values of quality, flavor, and creativity.
    </p>
  </div>

  <div class="about-values">
    <h3>Our Values</h3>
    <p>
      At Burger Hut, we are guided by three core values:
    </p>
    <ul>
      <li><strong>Quality:</strong> We use only the freshest ingredients, ensuring every bite is bursting with flavor.</li>
      <li><strong>Innovation:</strong> From classic favorites to bold new creations, we constantly push the boundaries of what a burger can be.</li>
      <li><strong>Community:</strong> Our customers are at the heart of everything we do, and we’re committed to giving back to the community that supports us.</li>
    </ul>
  </div>

  <div class="about-mission">
    <h3>Our Mission</h3>
    <p>
      Our mission is to deliver more than just great food – we aim to create moments of joy with every meal. 
      By prioritizing freshness, quality, and customer satisfaction, we strive to bring people together through the love of good food.
    </p>
  </div>
</section>

    <div class="team">
      <h3>Meet The Team</h3>
        <div class="team-member">
          <img src="omkar1.jpg" alt="Team Member 2">
          <h4>Omkar Suryavanshi</h4>
          <p>Software Engineer & Tech enthusiast</p>
        </div>
        <div class="team-members">
        <!-- <div class="team-member">
          <img src="anurag.jpg" alt="Team Member 1">
          <h4>Anurag Pagar</h4>
          <p>Software Engineer & Tech enthusiast</p>
        </div>
       -->
      </div>
    </div>
  </section>

  <script src="script.js"></script>

  <?php include 'footer.php'; ?> 