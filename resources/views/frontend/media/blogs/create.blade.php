@extends('frontend.template.template')

@section('pagecontent')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4 sm:px-6 lg:px-8 mt-10">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="px-6 py-8">
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">
                        Create New Blog Post
                    </h2>

                    <form class="space-y-6" enctype="multipart/form-data" action="{{ route('blogs.store') }}" method="Post">
                        <!-- Title -->  
                         @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">
                                Title
                            </label>
                            <input type="text"  name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2" placeholder="Enter your blog title" required />
                            <span class="text-red-500">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Author -->
                        <div>
                            <label for="author" class="block text-sm font-medium text-gray-700">
                                Author Name
                            </label>
                            <input type="text" id="author" name="author" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2" placeholder="Your name" required />
                            <span class="text-red-500">
                                @error('author')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                       

                        <!-- Image URL -->
                        <div>
                            <label for="imageUrl" class="block text-sm font-medium text-gray-700">
                                Chose Image
                            </label>
                            <div class="flex items-center gap-x-2">
                                <input type="file"  name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2" />
                                <i class="fa-solid fa-image text-2xl"></i>
                            </div>
                            <span class="text-red-500">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Short Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Short Description
                            </label>
                            <textarea id="description" name="description" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2" placeholder="Brief description of your blog post" required></textarea>
                            <span class="text-red-500">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Main Content -->
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700">
                                Content
                            </label>
                            <textarea id="content" name="content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 bg-gray-50 px-4 py-2" placeholder="Write your blog post content here..." required></textarea>
                            <span class="text-red-500">
                                @error('content')
                                    {{ $message }}
                                @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                                Publish Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('pagecontent') 