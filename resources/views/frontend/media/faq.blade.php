@extends('frontend.template.template')


@section('pagecontent')

<section class="bg-gray-200">

        <div class="mt-20  flex items-center justify-center">

   
            <div class="w-full max-w-7xl h-full">
                <!-- Header -->
                <div class="bg-[#0B6285] text-white text-center my-6 py-6 rounded-t-lg">
                    <h1 class="text-4xl font-bold">Trekking in Nepal – FAQs</h1>
                    <p class="mt-2 text-lg">Have some Queries? We have the answers to your FAQs.</p>
                </div>
                <!-- FAQ Section -->
                <div id="faq-container" class="bg-transaparent shadow-lg rounded-b-lg"></div>
            </div>

           

        </div>

        <script>
            // Array of FAQs
            const faqs = [
                {
                    question: "What are the best times to go trekking in Nepal?",
                    answer: "The best times to go trekking in Nepal are March to May and September to November. During these months, the weather is pleasant and clear, offering the best views of the mountains. The monsoon season from June to August can bring heavy rain, making the trails muddy and slippery. Winter months from December to February can be cold with snow in high-altitude areas."
                },
                {
                    question: "What should I pack for trekking in Nepal?",
                    answer: "When trekking in Nepal, you should pack essentials such as comfortable trekking boots, warm clothing layers, a waterproof jacket, a sleeping bag, sunscreen, a hat, and a reusable water bottle. Depending on the season and region, you might also need gloves, trekking poles, and a first aid kit."
                },
                {
                    question: "Do I need a guide for trekking in Nepal?",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },
                {
                    question: "Do I need a guide for trekking in Nepal?",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

                {
                    question: "Do I need a guide for trekking in Nepal?",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

                {
                    question: "Do I need a guide for trekking in Nepal?",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },

                {
                    question: "Do I need a guide for trekking in Nepal?",
                    answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                },
        
            ];

            // Function to generate FAQs
            function renderFAQs() {
                const faqContainer = document.getElementById("faq-container");
                let faqHTML = "";

                faqs.forEach((faq, index) => {
                    faqHTML += `
                        <div class="border-b border-blue-200 mb-4 last:mb-0">
                            <button
                                class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-orange-800 bg-white hover:bg-blue-100 focus:outline-none"
                                onclick="toggleAnswer('answer${index}')"
                            >
                                ${faq.question}
                                <svg id="icon${index}" class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                             <hr id="hr${index}" class="  hidden border-black border-opacity-50 mx-0">
                            <div class="hidden px-4 pb-4 bg-white text-orange-700" id="answer${index}">
                                <p>${faq.answer}</p>
                            </div>
                        </div>
                    `;
                });

                faqContainer.innerHTML = faqHTML;
            }

            // Toggle function
            function toggleAnswer(answerId) {
                const answer = document.getElementById(answerId);
                const icon = document.getElementById(`icon${answerId.slice(-1)}`);

                if (answer.classList.contains('hidden')) {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                }
            }

            // Render FAQs on page load
            renderFAQs();
        </script>
</section>





@section('pagecontent')

