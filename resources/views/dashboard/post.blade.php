@extends('layouts.app')

@section('content')



<div class="bg-white  py-8">
    <div class="mx-auto max-w-7xl">
        <div class="min-h-full">
            
            @include('includes.dashboard_nav')
            
            <div class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    
                    <div class="flex-none md:flex ">
                        <div class="w-full md:w-6/12 py-6">

                            <h1 class="text-3xl font-bold tracking-tight text-gray-900 mb-6">New blog post</h1>


                            @if( session('status') )
                                <div class="bg-green-500 p-4 rounded-lg text-white mb-6 text-center">
                                {{ session('status') }}
                                </div>
                            @endif

                            <form method="post" action="{{ route('store_post') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="title" class="sr-only">title</label>
                                    <input type="text" name="title" id="title" placeholder="Title" 
                                        class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                                        @error('title') border-red-500 @enderror" value="{{ old('title') }}"/>
                                        
                                        @error('title')
                                            <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="body" class="sr-only">body</label>
                                    <textarea name="body" id="body" placeholder="Body" 
                                        class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                        @error('body') border-red-500 @enderror"></textarea>
                
                                        @error('body')
                                            <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                            
                                <div>
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 
                                        font-medium w-full rounded-lg ">Submit post</button>
                                </div>
                            </form>
                        </div>
                        <div class="w-full md:w-6/12 py-6 px-0 sm:px-6">

                            <h1 class="text-3xl font-bold tracking-tight text-gray-900 mb-6">My blog posts</h1>

                            @if ( $posts->count() ) 
                                @foreach ($posts as $post)
                                    <div>{{ $post->title}}</div>
                                @endforeach
                            @endif

                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
           

        </div>
    </div>
</div>


@endsection