@extends('frontend.template.template')


@section('pagecontent')
    <section class="bg-gray-200 min-h-screen">
        <div class="flex items-center justify-center mt-20">
            <div class="w-full max-w-6xl">
                <div class="bg-[#0B6285] text-white text-center my-6 p-6 rounded-t-lg">
                    <h1 class="text-4xl font-bold">Trekking in Nepal – FAQs</h1>
                    <p class="mt-2 text-lg">Have some Queries? We have the answers to your FAQs.</p>
                    <a href="{{ route('faqs.create') }}"><button class="text-white font-bold mt-2 px-3 py-1 bg-[#374151] rounded-lg ">Add FAQ</button></a>
                </div>
                <div id="faq-container" class="bg-transparent shadow-lg rounded-b-lg">
                    @foreach ($faqs as $faq)
                        <div class="border-b mb-4 last:mb-0">
                            <button
                                class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-orange-800 bg-white focus:outline-none shadow-md"
                                onclick="toggleAnswer('answer{{ $faq->id }}')" aria-expanded="false">
                                {{ $faq->question }}
                                <svg id="icon{{ $faq->id }}"
                                    class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="hidden px-4 pb-4 bg-white text-black" id="answer{{ $faq->id }}">
                                <p>{{ $faq->answer }}</p>
                                <div class="mt-1">
                                    <a href="{{ route('faqs.edit', $faq->slug) }}" class="text-blue-500"><button class="text-white font-bold mt-2 px-3 py-1 bg-[#0B6285] rounded-lg ">Edit</button></a>
                                    <form action="{{ route('faqs.destroy', $faq->slug) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white font-bold mt-2 ml-2 px-3 py-1 bg-[#ff0000] rounded-lg ">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
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
    </script>


@section('pagecontent')
