<nav class="bg-gray-800">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
               
                    <div>
                        <ul class="flex items-baseline space-x-4"> 
                            <li class="md:block">
                                <a href="{{ route('dashboard') }}" 
                                    class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
                            </li>
                            <li class="md:block">
                                <a href="{{ route('dashboard_profile') }}" 
                                    class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">My profile</a>
                            </li> 
                            <li class="md:block">
                                <a href="{{ route('dashboard_post') }}" 
                                    class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" >Blog post</a>
                            </li>   
                        </ul>
                    </div>
                
            </div>
        </div>
    </div>
 
</nav>


