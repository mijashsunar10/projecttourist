<div class="space-y-12 text-slate-700">
            
            @if($terms->isNotEmpty())
            @foreach($terms as $term)
            <!-- test section -->
            @php
                $isOdd = $loop->index % 2 !== 0; // Alternate card style based on index
            @endphp
            
            <section class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-200 to-teal-100 rounded-lg opacity-0 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h2 class="text-2xl font-bold mb-4 text-teal-600">
                        <svg class="h-8 w-8 inline-block mr-2 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        {{$term->title}}
                    </h2>
                    <p class="text-slate-600 leading-relaxed">
                        {{$term->content}}
                    </p>
                    <a href="{{ route('termsandconditionedit', $term->id ) }}" class="">
                        <button class="bg-green-600  p-2 text-white rounded-md hover:bg-blue-500  mt-4">Edit Terms</button>
                    </a>

                    <form action="{{ route('delete', ['id' => $term->id, 'slug' => $term->slug]) }}" method="POST" class="inline">
                        @method('DELETE')
                        @csrf
                        
                            <button class="bg-red-500  p-2 text-white rounded-md  mt-4 hover:bg-blue-500">Delete Terms</button>
                        
                    </form>
                </div>
            </section>
            
            <section class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-200 to-teal-100 rounded-lg opacity-0 group-hover:opacity-40 transition duration-500"></div>
                <div class="relative bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h2 class="text-2xl font-bold mb-4 text-blue-600">
                        <svg class="h-8 w-8 inline-block mr-2 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        {{$term->title}}
                    </h2>
                    <p class="text-slate-600 leading-relaxed">
                        {{$term->content}}
                    </p>
                    <!--  -->
                    <a href="{{ route('termsandconditionedit', $term->id ) }}" class="">
                        <button class="bg-green-600  p-2 text-white rounded-md hover:bg-blue-500  mt-4">Edit Terms</button>
                    </a>
                    <form action="{{ route('delete', ['id' => $term->id, 'slug' => $term->slug]) }}" method="POST" class="inline">
                        @method('DELETE')
                        @csrf
                        
                            <button class="bg-red-500  p-2 text-white rounded-md  mt-4 hover:bg-blue-500">Delete Terms</button>
                        
                    </form>
                </div>
            </section>
            
            @endforeach
            @endif
            