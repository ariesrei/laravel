@extends('layouts.app')

@section('content')

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

    
        <div class="mx-auto mt-10  max-w-2xl  gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">


            <h1 class="mb-6 mt-2 text-4xl font-bold  text-gray-900 group-hover:text-gray-600" >{{ $title}}</h1>
            
            <p class="mt-2 text-lg leading-8 text-gray-600">{{ $body}}</p>
 
        </div>
    </div>
</div>

@endsection