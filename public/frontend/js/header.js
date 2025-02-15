//    search javascript
   
//    let searchHistory = [];
    
//         function handleSearch(event) {
//         const searchInputModal = document.getElementById('searchInputModal');
//         const query = searchInputModal.value.trim();
    
//         if (query && !searchHistory.includes(query)) {
//             searchHistory.unshift(query);
//             if (searchHistory.length > 5) searchHistory.pop();
//             updateSearchHistory();
//         }
    
//         searchInputModal.value = ''; 
//         console.log('Searching for:', query);
//         }
    
//         function updateSearchHistory() {
//         const historyList = document.getElementById('searchHistory');
//         historyList.innerHTML = ''; 
//         searchHistory.forEach(search => {
//             const li = document.createElement('li');
//             li.classList.add('cursor-pointer', 'text-white', 'mb-2', 'hover:text-gray-300');
//             li.textContent = search;
//             historyList.appendChild(li);
//         });
//         }
    
        function toggleModal() {
        const modal = document.getElementById('searchModal');
        modal.classList.toggle('hidden');
        if (!modal.classList.contains('hidden')) {
            setTimeout(() => {
            modal.classList.add('opacity-100');
            modal.classList.remove('scale-90');
            }, 100);
        } else {
            modal.classList.remove('opacity-100');
            modal.classList.add('scale-90');
        }
    }

// //   search javascript

    
// Close modal when clicking outside
document.addEventListener('click', (event) => {
    const modal = document.getElementById('searchModal');
    const modalContent = modal.querySelector('.relative.z-10'); // The modal content
  
    if (
      modal &&
      modal.classList.contains('opacity-100') &&
      !modalContent.contains(event.target) && // Check if clicked outside the modal content
      !event.target.closest('button') // Exclude clicks on buttons
    ) {
      toggleModal();
    }
  });

// Close modal when clicking outside

// emailbox

function toggleEmailBox() {
    const emailBox = document.getElementById('emailBox');
    const emailButton = document.getElementById('emailButton');
    
    if (emailBox.classList.contains('hidden')) {
      emailBox.classList.remove('hidden');
      setTimeout(() => {
        emailBox.classList.add('scale-100', 'opacity-100');
        emailBox.classList.remove('scale-95', 'opacity-0');
      }, 50);
      emailButton.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      `;
    } else {
      emailBox.classList.add('scale-95', 'opacity-0');
      emailBox.classList.remove('scale-100', 'opacity-100');
      setTimeout(() => {
        emailBox.classList.add('hidden');
      }, 300);
      emailButton.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" viewBox="0 0 24 24" fill="none">
          <path d="M12 2C6.48 2 2 5.92 2 10.5C2 12.78 3.16 14.84 5.08 16.24C4.8 17.09 4.25 18.45 4.06 18.92C3.89 19.34 4.28 19.75 4.73 19.65C5.62 19.45 7.22 19.07 8.11 18.74C9.03 18.97 10 19.1 11 19.1C16.52 19.1 21 15.18 21 10.6C21 5.92 16.52 2 12 2Z" fill="white" />
        </svg>
      `;
    }
  }

// emailbox






// looping secntece
    const statements = [
      "Your Adventure Starts Here",
      "Explore the Beauty of Nature",
      "Discover the Unseen Trails"
    ]; // Array of statements
    const typingTextElement = document.getElementById("typing-text");

    let statementIndex = 0; // Tracks the current statement
    let charIndex = 0; // Tracks the current character in the statement

    function typeEffect() {
      if (charIndex < statements[statementIndex].length) {
        const span = document.createElement("span");
        span.innerHTML = statements[statementIndex][charIndex] === " " ? "&nbsp;" : statements[statementIndex][charIndex];
        span.className = "hidden-text inline-block";
        typingTextElement.appendChild(span);

        setTimeout(() => {
          span.classList.remove("hidden-text");
          span.classList.add("visible-text");
        }, 50);

        charIndex++;
        setTimeout(typeEffect, 100); // Delay between each letter
      } else {
        // Move to the next statement after a short pause
        setTimeout(() => {
          typingTextElement.textContent = ""; // Clear text
          charIndex = 0;
          statementIndex = (statementIndex + 1) % statements.length; // Loop back to the first statement
          typeEffect(); // Start typing the next statement
        }, 1000); // Pause before the next statement
      }
    }

    // Start the typing effect
    typeEffect();

// looping secntece

