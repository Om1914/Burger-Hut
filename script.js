// admin-script.js



// script.js


// function toggleMenu() {
//     const navLinks = document.querySelector('.nav-links');
//     navLinks.classList.toggle('active');
//   }

  // script.js

// Smooth scroll for buttons
document.querySelectorAll('.hero-buttons a').forEach(button => {
    button.addEventListener('click', e => {
      e.preventDefault();
      const targetId = button.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  
  // script.js

// Smooth scroll for "Order Now" buttons
document.querySelectorAll('.btn-order').forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault();
    const targetId = button.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  });
});


// script.js

const checkboxes = document.querySelectorAll("input[type=checkbox]");
const totalPriceElement = document.getElementById("totalPrice");

checkboxes.forEach((checkbox) => {
  checkbox.addEventListener("change", calculateTotal);
});

function calculateTotal() {
  let total = 0;
  checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
      total += parseFloat(checkbox.dataset.price);
    }
  });
  totalPriceElement.textContent = `$${total.toFixed(2)}`;
}
let currentSlide = 0;
  const slides = document.querySelectorAll('.slider-slide');
  const totalSlides = slides.length;

  function showSlide(index) {
    if (index < 0) {
      currentSlide = totalSlides - 1;
    } else if (index >= totalSlides) {
      currentSlide = 0;
    }
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
  }

  document.querySelector('.next').addEventListener('click', () => {
    currentSlide++;
    showSlide(currentSlide);
  });

  document.querySelector('.prev').addEventListener('click', () => {
    currentSlide--;
    showSlide(currentSlide);
  });

  // Auto slide every 5 seconds
  setInterval(() => {
    currentSlide++;
    showSlide(currentSlide);
  }, 5000);

// document.getElementById("adminLoginForm").addEventListener("submit", function (e) {
//   const username = document.getElementById("username").value.trim();
//   const password = document.getElementById("password").value.trim();
//   const errorMessage = document.getElementById("error-message");

//   // Clear previous error message
//   errorMessage.textContent = "";

//   // Validate form inputs

//   if (username === "admin" && password === "1234")
//   { // Replace with real validation
//     window.location.href = "index.html"; // Redirect to the home page
//   }

// });