@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto max-w-2xl px-4">
        <div class="bg-white rounded-xl shadow-md p-8 relative">
            <a href="{{ route('faqs.index') }}" 
            class="absolute top-2 right-4 text-gray-600 hover:text-gray-900 transition-colors">
             <button class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow">Cancel</button>
         </a>
            <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Edit FAQ</h1>
            
            <form action="{{ route('faqs.update', $faq->slug) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="question" class="block text-sm font-medium text-gray-700 mb-3">Question</label>
                    <input type="text" name="question" id="question" value="{{ $faq->question }}"
                           class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 placeholder-gray-400"
                           placeholder="Update the question">
                    @error('question')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="answer" class="block text-sm font-medium text-gray-700 mb-3">Answer</label>
                    <textarea name="answer" id="answer" rows="5"
                              class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 placeholder-gray-400"
                              placeholder="Revise the answer">{{ $faq->answer }}</textarea>
                    @error('answer')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-8 flex justify-between items-center">
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 hover:scale-[1.02] shadow-md">
                        Update FAQ
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
</div>