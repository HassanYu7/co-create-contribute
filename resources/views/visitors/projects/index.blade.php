
@extends('visitors.layouts.app')

@section('content')
    
    



    <div class="max-w-7xl mx-auto p-6 lg:p-8">


        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

                @foreach ($projects as $project)
                <a href="{{ route('projects.show', $project) }}"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none 
                flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    {{-- <div
                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>
                    </div> --}}

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $project->title }}
                    </h2>



                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                       {{ Str::limit($project->description, 100, $end = '...') }} 
                    </p>

                    <strong style="color: #8a8e94">Technologies:</strong>
                    @foreach ($project->technologies as $technology)
                    <span style="background-color: #ef4444; margin:2px; color: white; border-radius: 5px; padding: 2px; font-size: 12px">{{ $technology->name
                        }}</span>
                    @endforeach

                    <br>

                    <strong style="color: #8a8e94" class="mt-4">Desired Contributors:</strong>
                    @foreach ($project->requested_contributions as $requested_contribution)
                    @foreach ($requested_contribution->roles as $role)
                    <span style="background-color: #99a01e; margin:2px; color: white; border-radius: 5px; padding: 2px; font-size: 12px">{{ $role->name }}</span>

                    @endforeach
                    @endforeach

                </div>

          
            </a>

                @endforeach


                </div>
            </div>
            </div>

@endsection