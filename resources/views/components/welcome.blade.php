<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome to <strong>{{env('APP_NAME')}}</strong> User Manager Panel!
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
       {{config('company.description')}}
    </p>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    
        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a>Authenticationth and Profile</a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                {{env('APP_NAME')}} Provides you our user with the very secured experience of your account, data and
                profile. This system is designded to handle complex security features that protects you and your data.
                Privacy is 100% guaranteed!.
            </p>
            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                {{env('APP_NAME')}} techclouds provides you with the safe user profile management system where you can
                make alot of changes to your system informations, visit the link below or on the top right image is the
                profile management
            </p>
            <p class="mt-4 text-sm">
                <a href="{{ route('profile.show') }}"
                    class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                    My profile settings

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                        <path fill-rule="evenodd"
                            d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
     <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a>User level management Dashboard</a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                This is the customer level dashboard that helps the TechClouds customer to manage the accounts, requests
                and
                all the services that have been ordered by you. Check out all the services that you have requested from
                our
                application and get more details about how the orders are being processed here.
            </p>
            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                For more technical help you can go to the <a href="/contact"
                    class="text-white hover:text-slate-400">customer desk</a> to get a
                quick help
            </p>

            @if(auth()->user()->isManager())
            <p class="mt-4 text-sm">
                <a href="{{url('/admin')}}"
                    class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                    Visit Admin Panel

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        class="ml-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                        <path fill-rule="evenodd"
                            d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
            @endif
        </div>


</div>
