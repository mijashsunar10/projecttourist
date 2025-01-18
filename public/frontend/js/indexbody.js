//  //navbar
//  document.addEventListener('DOMContentLoaded', () => {
//     const dropdownParents = document.querySelectorAll('.group'); // Select all parent groups

//     dropdownParents.forEach((parent) => {
//     const dropdownMenu = parent.querySelector('.dropdown-menu');
//     let timeout;

//     parent.addEventListener('mouseenter', () => {
//         clearTimeout(timeout);
//         dropdownMenu.classList.remove('opacity-0', 'invisible');
//         dropdownMenu.classList.add('opacity-100');
//     });

//     parent.addEventListener('mouseleave', () => {
//         timeout = setTimeout(() => {
//         dropdownMenu.classList.remove('opacity-100');
//         dropdownMenu.classList.add('opacity-0', 'invisible');
//         }, 100); // Delay before hiding
//     });

//     dropdownMenu.addEventListener('mouseenter', () => {
//         clearTimeout(timeout);
//     });

//     dropdownMenu.addEventListener('mouseleave', () => {
//         timeout = setTimeout(() => {
//         dropdownMenu.classList.remove('opacity-100');
//         dropdownMenu.classList.add('opacity-0', 'invisible');
//         }, 100); // Delay before hiding
//     });


//     // Handle nested dropdowns
// const nestedDropdownParents = dropdownMenu.querySelectorAll('.relative');
// nestedDropdownParents.forEach((nestedParent) => {
//     const nestedMenu = nestedParent.querySelector('.nested-dropdown-menu');
//     nestedParent.addEventListener('mouseenter', () => {
//     nestedMenu.classList.remove('opacity-0', 'invisible');
//     nestedMenu.classList.add('opacity-100');
//     });
//     nestedParent.addEventListener('mouseleave', () => {
//     nestedMenu.classList.remove('opacity-100');
//     nestedMenu.classList.add('opacity-0', 'invisible');
//     });
// });
// });
//     });

// //navbar



// mobile navbar

const mobileMenuButton = document.getElementById('mobileMenuButton');
const closeMobileMenu = document.getElementById('closeMobileMenu');
const mobileNavbar = document.getElementById('mobileNavbar');

// Show Navbar and Toggle Buttons
mobileMenuButton.addEventListener('click', () => {
  mobileNavbar.classList.remove('translate-x-full');
  mobileMenuButton.classList.add('hidden');
  closeMobileMenu.classList.remove('hidden');
});

// Hide Navbar and Toggle Buttons
closeMobileMenu.addEventListener('click', () => {
  mobileNavbar.classList.add('translate-x-full');
  closeMobileMenu.classList.add('hidden');
  mobileMenuButton.classList.remove('hidden');
});

// Toggle Dropdown Visibility
function toggleDropdown(id) {
  const dropdown = document.getElementById(id);
  dropdown.classList.toggle('hidden');
  dropdown.classList.toggle('block');
}

// mobile navbar



// navbar


document.addEventListener('DOMContentLoaded', () => {
    const dropdownParents = document.querySelectorAll('.group'); // Select all parent groups
   
    dropdownParents.forEach((parent) => {
      const dropdownMenu = parent.querySelector('.dropdown-menu');
      let timeout;
   
      if (dropdownMenu) {
        parent.addEventListener('mouseenter', () => {
          clearTimeout(timeout);
          dropdownMenu.classList.remove('opacity-0', 'invisible');
          dropdownMenu.classList.add('opacity-100');
        });
   
        parent.addEventListener('mouseleave', () => {
          timeout = setTimeout(() => {
            dropdownMenu.classList.remove('opacity-100');
            dropdownMenu.classList.add('opacity-0', 'invisible');
          }, 100); // Delay before hiding
        });
   
        dropdownMenu.addEventListener('mouseenter', () => {
          clearTimeout(timeout);
        });
   
        dropdownMenu.addEventListener('mouseleave', () => {
          timeout = setTimeout(() => {
            dropdownMenu.classList.remove('opacity-100');
            dropdownMenu.classList.add('opacity-0', 'invisible');
          }, 100); // Delay before hiding
        });
   
        // Handle nested dropdowns
        const nestedDropdownParents = dropdownMenu.querySelectorAll('.relative');
        nestedDropdownParents.forEach((nestedParent) => {
          const nestedMenu = nestedParent.querySelector('.nested-dropdown-menu');
          if (nestedMenu) {
            nestedParent.addEventListener('mouseenter', () => {
              nestedMenu.classList.remove('opacity-0', 'invisible');
              nestedMenu.classList.add('opacity-100');
            });
            nestedParent.addEventListener('mouseleave', () => {
              nestedMenu.classList.remove('opacity-100');
              nestedMenu.classList.add('opacity-0', 'invisible');
            });
          }
        });
      }
    });
   });

//    navbar



// scrolling function 

document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("navbar");
  const logoName = document.getElementById("logoName");

  // Check if the current URL is the homepage
  const isHomePage = window.location.pathname === "/";

  if (isHomePage) {
    // Scroll behavior for the homepage
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        // Change navbar background and text on scroll
        navbar.classList.add("bg-white", "shadow-lg");
        navbar.classList.remove("bg-transparent");
        navbar.querySelectorAll("button, a").forEach((el) => {
          el.classList.add("text-gray-900");
          el.classList.remove("text-white");
        });

        // Change logo name colors
        logoName.innerHTML = `
          <span class="text-amber-900 text-xl xl:text-2xl font-bold block">DAWN IN NEPAL</span>
          <span class="text-yellow-500 text-md xl:text-lg font-bold block">ADVENTURES P.LTD</span>
        `;
      } else {
        // Revert navbar background and text
        navbar.classList.remove("bg-white", "shadow-lg");
        navbar.classList.add("bg-transparent");
        navbar.querySelectorAll("button, a").forEach((el) => {
          el.classList.add("text-white");
          el.classList.remove("text-gray-900");
        });
        navbar.querySelectorAll("ul,li, a").forEach((el) => {
          el.classList.add("text-gray-900");
         el.classList.remove("text-white");
        });

        // Revert logo name colors
        logoName.innerHTML = `
          <span class="text-white text-xl xl:text-2xl font-bold block">DAWN IN NEPAL</span>
          <span class="text-white text-md xl:text-lg font-bold block">ADVENTURES P.LTD</span>
        `;
      }
    });
  } else {
    // For other pages, set navbar to white with black text by default
    navbar.classList.add("bg-white", "shadow-lg");
    navbar.querySelectorAll("button, a").forEach((el) => {
      el.classList.add("text-gray-900");
      el.classList.remove("text-white");
    });

    // Set logo name colors for other pages
    logoName.innerHTML = `
      <span class="text-amber-900 text-xl xl:text-2xl font-bold block">DAWN IN NEPAL</span>
      <span class="text-yellow-500 text-md xl:text-lg font-bold block">ADVENTURES P.LTD</span>
    `;
  }
});

// scrolling function 
