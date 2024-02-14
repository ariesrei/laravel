@extends('layouts.app')

@section('content')


<div class="bg-white  py-8">
    <div class="mx-auto max-w-7xl">
        <div class="min-h-full">
            
            @include('includes.dashboard_nav')
 

            <div class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">My Profile</h1>
                </div>
            </div>


          
            <div class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    
                    <div id="default-tab-content">

                        <div class="hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>

                        <div class="hidden" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                            <h1 class="text-3xl font-bold tracking-tight text-gray-900 mb-6">Create a new post</h1>

                            <div class="flex flex-row">
                                <div class="basis-2/4 px-4 py-4">
                                    <form method="post" action="{{ route('store_post') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="title" class="sr-only">Email</label>
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
                                            <label for="body" class="sr-only">Password</label>
                                            <textarea name="body" id="body" placeholder="Content" 
                                                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                                @error('body') border-red-500 @enderror"></textarea>
                        
                                                {{-- @error('password')
                                                    <div class="text-red-500 mt-2 text-sm">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                        </div>
                                    
                                        <div>
                                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 
                                                font-medium w-full rounded-lg ">Submit post</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="basis-2/4">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                                </div>
                            </div>
                            

                           
                        </div> 

                    </div>

                </div>
            </div> 


        </div>
    </div>
</div>


@endsection