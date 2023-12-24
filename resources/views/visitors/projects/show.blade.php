@extends('visitors.layouts.app')

@section('content')


<div class=" mt-36 max-w-7xl h-full mx-auto  w-10/12  p-6 bg-white dark:bg-gray-800/50
     dark:bg-gradient-to-bl
      from-gray-700/50 via-transparent 
      dark:ring-1 dark:ring-inset
       dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none 
        flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

    <div class="p-12">
        <button class="bg-blue-400 text-white px-4 py-2 rounded-md" disabled>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
            </svg>
        </button>

        <div class="mt-12">
            <a href="{{ $project->github_link }}" target="_blank" class="text-blue-500">
                <svg width="64px" height="64px" viewBox="-20.48 -20.48 296.96 296.96" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMinYMin meet" fill="#000000" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)"
                    stroke="#000000" stroke-width="0.00256">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-20.48" y="-20.48" width="296.96" height="296.96" rx="148.48" fill="#e8f7fa"
                            strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g fill="#66c3da">
                            <path
                                d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0">
                            </path>
                            <path
                                d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>

    <!-- Project Content -->
    <div class="p-6">
        <!-- Project Title -->
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">{{ $project->title }}</h2>

        <!-- Project Owner -->
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">By 
        
            <a href="#"  style="background-color: #44453c; margin:2px; color: white; border-radius: 5px; padding: 2px; font-size: 12px">{{ $project->user->name }}</a>
        
        </p>


        <!-- Technologies Used -->
        <div class="mb-4">
            <strong style="color: #8a8e94">Technologies Used:</strong>
            @foreach ($project->technologies as $technology)
            <span
                style="background-color: #ef4444; margin:2px; color: white; border-radius: 5px; padding: 2px; font-size: 12px">
                {{ $technology->name }}
            </span>
            @endforeach
        </div>

        <!-- Desired Contributors -->
        <div class="mb-4">
            <strong style="color: #8a8e94">Desired Contributors:</strong>
            @foreach ($project->requested_contributions as $requested_contribution)
            @foreach ($requested_contribution->roles as $role)
            <span
                style="background-color: #99a01e; margin:2px; color: white; border-radius: 5px; padding: 2px; font-size: 12px">
                {{ $role->name }}
            </span>
            @endforeach
            @endforeach
        </div>





        <!-- Project Description -->
        <div class="mt-16 mb-16">
            <p class="text-gray-900 dark:text-white text-sm leading-relaxed mb-4">
                {{ $project->description }}
            </p>

        </div>


        <!-- Requested Contributions Description -->
        <div class="mb-4 ">
            <strong style="color: #8a8e94">Requested Contributions Description:</strong>
            @foreach ($project->requested_contributions as $requested_contribution)
            <p class="text-gray-900 dark:text-white text-sm leading-relaxed mt-4 mb-4">{{
                $requested_contribution->description }}</p>
            @endforeach
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-between items-center">

            <button class="bg-green-500 text-white px-4 py-2 rounded-md">
                Join Project
            </button>
        </div>

        <!-- Comments Section -->
        <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Comments</h3>
            <!-- Add your comments section here -->
        </div>
    </div>
</div>

@endsection