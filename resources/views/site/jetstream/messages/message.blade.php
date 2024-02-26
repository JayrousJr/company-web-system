<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                <form>
                    <div class="space-y-12 px-10 py-4">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-500 dark:text-gray-400">My Message
                            </h2>
                            <p class="mt-10 text-sm font-bold text-gray-500 dark:text-gray-400">Message Sent
                                By: {{Auth::user()->name}}<br>Email: {{Auth::user()->email}}<br>Sent On:
                                {{$message->created_at->format('D, F d, Y')}}
                            </p>
                            <p class="mt-1 text-md font-bold text-gray-500 dark:text-gray-400">Subject
                                <br>{{$message->subject}}
                            </p>

                            <h2 class="text-base font-semibold leading-7 text-gray-500 dark:text-gray-400">Message Body
                            </h2>

                            <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <div class="mt-1">
                                        <textarea type="text" rows="3" readonly class="block w-full rounded-md border-0 py-1.5 text-gray-500 dark:text-gray-50 shadow-sm ring-1 ring-inset bg-white dark:bg-slate-500 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$message->message}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </form>


            </div>
        </div>
    </div>
</x-app-layout>