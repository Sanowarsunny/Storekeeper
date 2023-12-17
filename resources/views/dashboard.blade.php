<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Today's Sales</h3>
                    <p class="text-3xl font-bold text-blue-700">{{ $todaySales }}</p>
                </div>

                <!-- Repeat similar blocks for yesterday, this month, and last month -->

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Yesterday's Sales</h3>
                    <p class="text-3xl font-bold text-blue-700">{{ $yesterdaySales }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">This Month's Sales</h3>
                    <p class="text-3xl font-bold text-blue-700">{{ $thisMonthSales }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Last Month's Sales</h3>
                    <p class="text-3xl font-bold text-blue-700">{{ $lastMonthSales }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
