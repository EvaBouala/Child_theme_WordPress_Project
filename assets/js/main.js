document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth'
      });
    }
  });
});



document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const navList = document.querySelector(".nav-list");

  if (menuToggle && navList) {
    menuToggle.addEventListener("click", () => {
      navList.classList.toggle("active");
    });
  }
});



// document.addEventListener('DOMContentLoaded', function() {
//     const menuToggle = document.querySelector('.menu-toggle');
//     const navList = document.querySelector('.nav-list');
//     const menuLinks = document.querySelectorAll('.nav-list a');

//     // Toggle menu on button click
//     menuToggle.addEventListener('click', function(e) {
//         e.stopPropagation();
//         menuToggle.classList.toggle('active');
//         navList.classList.toggle('active');
//     });

//     // Close menu when clicking a link
//     menuLinks.forEach(link => {
//         link.addEventListener('click', () => {
//             menuToggle.classList.remove('active');
//             navList.classList.remove('active');
//         });
//     });

//     // Close menu when clicking outside
//     document.addEventListener('click', (e) => {
//         if (!navList.contains(e.target) && !menuToggle.contains(e.target)) {
//             menuToggle.classList.remove('active');
//             navList.classList.remove('active');
//         }
//     });
// });