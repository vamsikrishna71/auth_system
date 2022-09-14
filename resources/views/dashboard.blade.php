<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <code>User ID: {{ Auth()->user()->firstName }}{{ Auth()->user()->mobile }}</code>
                    <h2>First Name: {{ Auth()->user()->firstName }}</h2>
                    <h2>Last Name: {{ Auth()->user()->lastName }}</h2>
                    <h2>Email: {{ Auth()->user()->email }}</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
