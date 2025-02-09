@extends('frontend.template.template')

@section('pagecontent')
<div class="min-h-screen bg-gray-50 mt-14">
        <main class="max-w-3xl mx-auto px-4 py-8">
            <!-- Article Container -->
            <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                <!-- Hero Image -->
                <div class="aspect-[16/9] w-full relative">
                    <img
                        src="{{ asset('uploads/blogs/images/'.$blog->image) }}"
                        alt="Blog post hero"
                        class="w-full h-full object-cover" />
                </div>

                <!-- Content Container -->
                <div class="p-6 sm:p-8">
                    <!-- Title -->
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">
                        {{ $blog->title }}
                    </h1>

                    <!-- Article Content -->
                    <div class="prose prose-lg text-gray-700 max-w-none space-y-4">
                        <p>
                            {{ $blog->content }}
                        </p>
                        <p>
                            When we approach writing with intention and purpose, we create
                            content that resonates and leaves a lasting impact. It's about
                            finding the perfect balance between information and engagement,
                            between teaching and entertaining.
                        </p>
                        <p>
                            In this comprehensive guide, we'll explore the fundamental
                            principles that can transform your writing from good to
                            exceptional. Whether you're a beginner or an experienced writer,
                            these insights will help you elevate your craft.
                        </p>
                    </div>

                    <!-- Author Section -->
                    <div class="border-t pt-6 mt-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="bg-gray-100 p-3 rounded-full">
                                    <i class="fa-solid fa-user text-gray-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 text-lg">{{ $blog->author}}</h3>
                                    <p class="text-sm text-gray-500">Content Strategist & Writer</p>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">Published on {{$blog->created_at->diffForHumans()}}</div>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>

@section('pagecontent')