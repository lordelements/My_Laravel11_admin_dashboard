<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" x-data="{show : true}" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                    {{ __("You're logged in!") }}
                    <br>

                </div>
            </div>
            <x-messages />
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{ url('admin/users_accounts') }}" class="text-red-600 border-solid border-2 border-sky-500 rounded mb-4 px-4 text-sm whitespace-nowrap">Users registered</a>
            </div>
        </div>
    </div>

</x-app-layout>